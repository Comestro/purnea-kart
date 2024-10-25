<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends Controller
{
    private $msg91AuthKey = '433074A27fz5BFYNs671a49f7P1'; 
    private $msg91SenderId = 'YOUR_SENDER_ID'; 

    public function otpLogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        $email = $validatedData['email'];
        $otp = rand(100000, 999999);

        $user = User::updateOrCreate(
            ['email' => $email],
            ['name' => 'User ' . $email, 'otp' => $otp, 'otp_expires_at' => now()->addMinutes(5)]
        );

        // Send OTP via email
        $this->sendOtp($email, $otp);

        return response()->json(['message' => 'OTP sent successfully.'], 200);
    }

    private function sendOtp($email, $otp)
    {
        $client = new Client();
        try {
            $response = $client->post('https://api.msg91.com/api/sendotp.php', [
                'form_params' => [
                    'authkey' => $this->msg91AuthKey,
                    'email' => $email,
                    'message' => "Your OTP is: $otp",
                    'sender' => $this->msg91SenderId,
                    'otp' => true,
                ]
            ]);

            return json_decode($response->getBody());
        } catch (\Exception $e) {
            \Log::error('Failed to send OTP: ' . $e->getMessage());
            throw new \Exception('Unable to send OTP. Please try again later.');
        }
    }

    public function verifyOtp(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255',
            'otp' => 'required|string|size:6',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user || $user->otp !== $validatedData['otp']) {
            return response()->json(['error' => 'Invalid OTP.'], 401);
        }

        // Check if the OTP is expired
        if ($user->otp_expires_at < now()) {
            return response()->json(['error' => 'OTP has expired.'], 401);
        }

        // Clear the OTP after successful verification
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        // Generate JWT token
        $token = JWTAuth::fromUser($user);

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'is_admin' => $request->is_admin ?? 0,
            'is_vendor' => $request->is_vendor ?? 0,
        ]);

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if ($token = JWTAuth::attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function user(Request $request)
    {
        $token = $request->bearerToken();
        if (!$token) {
            return response()->json(['error' => 'Token is required'], 401);
        }

        try {
            $user = JWTAuth::setToken($token)->authenticate();
            return response()->json([
                'message' => 'User authentication successful',
                'user' => $user,
                'expires_in' => auth()->factory()->getTTL() * 60,
            ], 200);
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token has expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not parse the token'], 401);
        }
    }

    public function logout()
    {
        $token = JWTAuth::getToken();
        if (!$token) {
            return response()->json(['error' => 'Token is required for logout'], 401);
        }

        JWTAuth::invalidate($token);
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh(Request $request)
    {
        $token = $request->bearerToken();
        if (!$token) {
            return response()->json(['error' => 'Token is required for refresh'], 401);
        }

        try {
            $newToken = JWTAuth::refresh($token);
            return $this->respondWithToken($newToken);
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token has expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not refresh token'], 500);
        }
    }

    protected function respondWithToken($token)
    {
        $user = JWTAuth::user();
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'is_admin' => $user->is_admin ?? 0,
            'is_vendor' => $user->is_vendor ?? 0,
            'user' => $user,
        ]);
    }
}

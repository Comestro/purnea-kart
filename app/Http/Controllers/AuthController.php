<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate(
                [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users,email',
                    'password' => 'required|string|min:6',
                ],
                [
                    'email.unique' => 'The email address is already registered.',
                ]
            );

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' =>$validatedData['password'],
                'is_admin' => $request->is_admin ?? 0,
                'is_vendor' => $request->is_vendor ?? 0,
            ]);

            return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()], 422);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                return response()->json(['error' => 'The email address is already registered.'], 409);
            }
            return response()->json(['error' => 'Unable to register user. Please try again.'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to register user. Please try again.'], 500);
        }
    }

    public function login(Request $request)
    {
        if (!$request->isMethod('post')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

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
                'expires_in' => auth()->factory()->getTTL() * 60
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
        $isAdmin = $user->is_admin ?? 0;
        $isVendor = $user->is_vendor ?? 0;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'is_admin' => $isAdmin,
            'is_vendor' => $isVendor,
            'user_type' => $isAdmin ? 'admin' : ($isVendor ? 'vendor' : 'user'),
            'user' => $user
        ]);
    }
}

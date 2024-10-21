<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends Controller
{
    // Register method
    public function register(Request $request)
    {
        // Restrict method to POST
        if (!$request->isMethod('post')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Create a new user and hash the password
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin ?? 0;
        $user->is_vendor = $request->is_vendor ?? 0;
        $user->save();

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 200);
    }

    // Login method
    public function login(Request $request)
    {
        // Restrict method to POST
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
            $user = JWTAuth::user();
            $isAdmin = $user->is_admin ?? 0;
            $isVendor = $user->is_vendor ?? 0;

            $userType = ($isAdmin && $isVendor) ? 'admin' : (($isAdmin && !$isVendor) ? 'user' : 'vendor');

            return $this->respondWithToken($token, $isAdmin, $isVendor, $userType, $user);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // User details method
    public function user(Request $request)
    {
        // Restrict method to GET
        if (!$request->isMethod('get')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        $token = JWTAuth::getToken();

        if (!$token) {
            return response()->json(['error' => 'Token is required'], 400);
        }

        try {
            $user = JWTAuth::toUser($token);
            return response()->json([
                'message' => 'User authentication successful',
                'user' => $user,
                'token' => $token
            ], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Invalid or expired token'], 401);
        }
    }

    // Logout method (invalidate token)
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // Respond with token
    protected function respondWithToken($token, $isAdmin, $isVendor, $userType, $user)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'is_admin' => $isAdmin,
            'is_vendor' => $isVendor,
            'user_type' => $userType,
            'user' => $user
        ]);
    }
}

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
        if (!$request->isMethod('post')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin ?? 0;
        $user->is_vendor = $request->is_vendor ?? 0;
        $user->save();

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
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
        if (!$request->isMethod('get')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        $token = JWTAuth::getToken();

        if (!$token) {
            return response()->json(['error' => 'Token is required'], 401);
        }

        try {
            $user = JWTAuth::toUser($token);
            return response()->json([
                'message' => 'User authentication successful',
                'user' => $user,
                'token' => $token,
                'expires_in' => auth()->factory()->getTTL() * 60
            ], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Invalid or expired token'], 401);
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

    // Respond with token
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
            'user_type' => ($isAdmin && $isVendor) ? 'admin' : (($isAdmin) ? 'user' : 'vendor'),
            'user' => $user
        ]);
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends Controller
{
    // Register method
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json(['message' => 'User successfully registered', 'user' => $user], 200);
    }

    public function login(Request $request)
    {
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
            $isAdmin = $user->is_admin;

            // return response()->json(compact('token', 'isAdmin'));
            return response()->json(['message' => 'User successfully login', 'token', 'isAdmin', 'user' => $user], 200);

        }
        // Invalid credentials
        return response()->json(['error' => 'Invalid credentials'], 401);
    }


    // Logout method
    public function logout()
    {
        // Invalidate the JWT token
        JWTAuth::invalidate(JWTAuth::getToken());

        // Return a logout success message
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // Helper method to return token with user roles
    protected function respondWithToken($token, $isAdmin)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'is_admin' => $isAdmin
        ]);
    }
}

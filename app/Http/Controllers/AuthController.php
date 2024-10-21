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

            $userType = ($isAdmin == 1 && $isVendor == 1) ? 'admin' : (($isAdmin == 0 && $isVendor == 1) ? 'vendor' : 'user');

            return $this->respondWithToken($token, $isAdmin, $isVendor, $userType, $user);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    
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

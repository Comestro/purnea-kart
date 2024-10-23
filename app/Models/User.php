<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',        
        'is_vendor',        
        'email_verified_at',        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [
            'is_admin' =>$this->is_admin,
            'is_vendor'=>$this->is_vendor,
        ];
    }  

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

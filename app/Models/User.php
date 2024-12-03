<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
use Notifiable;

protected $fillable = [
'name',
'mobile_number',
'password',
];

protected $hidden = [
'password',
'remember_token',
];

// Optionally, you can cast the mobile number
protected $casts = [
// Define casts as needed
];
}
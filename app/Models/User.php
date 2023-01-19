<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'fullname',
        'role_id',
        'profile_picture_url'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function vehicleBookings()
    {
        return $this->hasMany(VehicleBooking::class);
    }
    public function scopeApprovers($query)
    {
        return $query->where('role_id', 2);
    }
}

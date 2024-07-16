<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guests extends Authenticatable{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'passport_number', 'password', 'gender', 'image', 'user_type', 'last_login_on', 'login_try_attempts', 'login_try_attempt_date','status'
    ];
    public function reservations()
    {
        return $this->hasMany(ChaletsReservation::class, 'guest_id');
    }
}

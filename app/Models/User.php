<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Event;
class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasFactory;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'phone', 'gender', 'user_type', 'last_login_on', 'login_try_attempts', 'login_try_attempt_date','status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function resorts()
    {
        return $this->hasMany(Resorts::class, 'user_id');
    }
}

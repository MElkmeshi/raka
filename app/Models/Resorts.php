<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resorts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'municipality_id', 'name', 'phone', 
        'email', 'website', 'locations_link', 'address',
        'description', 'image', 'rating', 'check_in_time',
        'check_out_time', 'number_of_chalets', 'created_by','status'
        ];

    public function municipality()
    {
        return $this->belongsTo(Municipalities::class, 'municipality_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function categories()
    {
        return $this->hasMany(Categories::class);
    }

    public function resortAttachments()
    {
        return $this->hasMany(ResortsAttachments::class);
    }
}


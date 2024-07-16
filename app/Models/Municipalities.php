<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image','status','created_by'
    ];
    public function resort()
    {
        return $this->belongsTo(Resorts::class, 'resort_id', 'id');
    }
}

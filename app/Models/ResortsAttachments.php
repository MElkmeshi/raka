<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResortsAttachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'resort_id', 'path','status'
    ];
    public function resort()
    {
        return $this->belongsTo(Resorts::class, 'resort_id', 'id');
    }
}

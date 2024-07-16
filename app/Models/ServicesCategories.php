<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'category_id','status'
    ];
    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id', 'id');
    }
}

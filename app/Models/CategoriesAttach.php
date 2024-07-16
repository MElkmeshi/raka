<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesAttach extends Model
{
    use HasFactory;
    protected $table = 'categories_attach';
    protected $fillable = [
        'category_id', 'path',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}

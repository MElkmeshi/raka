<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image','status'
    ];
    public function serviceCategories()
    {
        return $this->belongsToMany(ServicesCategories::class,'services_categories','service_id','category_id');
    }
}

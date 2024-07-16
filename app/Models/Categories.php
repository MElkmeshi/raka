<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'rooms_count', 'bathroom_count',
         'price', 'capacity', 'resort_id','status'
    ];

    public function resort()
    {
        return $this->belongsTo(Resorts::class, 'resort_id', 'id');
    }

    public function chalets()
    {
        return $this->hasMany(Chalets::class, 'category_id', 'id');
    }

    public function categoryAttach()
    {
        return $this->hasMany(CategoriesAttach::class, 'category_id', 'id');
    }

    public function serviceCategories()
    {
        return $this->belongsToMany(ServicesCategories::class,'services_categories','category_id','service_id');
    }

}
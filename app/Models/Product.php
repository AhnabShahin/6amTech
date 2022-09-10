<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'status',
        'name',
        'brand',
        'detail',
        'images',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class,'product_id')->orderBy('id', 'DESC');
    }
}

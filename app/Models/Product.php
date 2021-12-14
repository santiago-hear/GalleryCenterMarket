<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'category_id',
        'seller_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}

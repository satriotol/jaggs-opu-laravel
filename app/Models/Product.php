<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'price'];

    public function product_image()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function deleteImage()
    {
        foreach ($this->product_image() as $image) {
            Storage::disk('public')->delete($image->attributes['image']);
        }
    }
}

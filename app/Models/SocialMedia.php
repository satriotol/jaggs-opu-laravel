<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'link', 'image'];

    public function getImageAttribute($value)
    {
        return url('storage/' . $value);
    }
    public function deleteImage()
    {
        Storage::disk('public')->delete($this->attributes['image']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatsapp extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'message'];
    protected $appends = ['link'];

    public function getLinkAttribute()
    {
        return 'https://api.whatsapp.com/send?phone=' . $this->phone_number . '&text=' . $this->message;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WhatsappCollection;
use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index()
    {
        $data = Whatsapp::all();
        return new WhatsappCollection($data);
    }
}

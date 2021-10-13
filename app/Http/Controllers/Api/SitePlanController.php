<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SitePlanCollection;
use App\Models\SitePlan;
use Illuminate\Http\Request;

class SitePlanController extends Controller
{
    public function index()
    {
        $data = SitePlan::all();
        return new SitePlanCollection($data);
    }
}

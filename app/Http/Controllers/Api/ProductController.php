<?php

namespace App\Http\Controllers\Api;

use File;
use App\Http\Controllers\API\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductNameResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getName()
    {
        $data = Product::all();
        if ($data) {
            return ResponseFormatter::success(ProductNameResource::collection($data), 'Data Berhasil Didapatkan');
        } else {
            return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }
    }
    public function index(Request $request)
    {
        $data = Product::where('id', $request->id)->get();
        if ($data) {
            return ResponseFormatter::success(ProductResource::collection($data), 'Data Berhasil Didapatkan');
        } else {
            return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }
    }
}

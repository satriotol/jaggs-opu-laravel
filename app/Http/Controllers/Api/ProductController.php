<?php

namespace App\Http\Controllers\Api;

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
        $search = $request->id;

        if ($search) {
            $data = Product::where('id', $search)->get();
        } else {
            $data = Product::all()->first();
        }
        if ($data) {
            return ResponseFormatter::success(ProductResource::collection($data), 'Data Berhasil Didapatkan');
        } else {
            return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }
    }
}

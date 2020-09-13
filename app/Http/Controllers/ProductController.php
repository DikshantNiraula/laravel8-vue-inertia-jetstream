<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function create()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return Inertia::render('Products/Index',compact('products'));
    }
}

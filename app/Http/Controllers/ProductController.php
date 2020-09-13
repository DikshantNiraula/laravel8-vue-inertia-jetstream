<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return Inertia::render('Products/Index',compact('products'));
    }

    public function create()
    {
        return Inertia::render('Products/Create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('/product');

    }
}

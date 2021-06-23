<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $products = Product::query()->getModel()->get();

        return view('web.home', compact('products'));
    }
}

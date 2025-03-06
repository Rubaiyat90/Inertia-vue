<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;

class FrontendController extends Controller
{
    public function about(){
        $products = Product::all();
        return Inertia::render('Frontend/Product/Index',[
            'products' => $products
        ]);
    }
}

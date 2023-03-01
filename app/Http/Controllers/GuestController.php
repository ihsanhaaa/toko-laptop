<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GuestController extends Controller
{
    public function guests()
    {
        $products = Product::latest()->get();

        // dd($products);

        return view('product.guests', compact('products'));
    }

    public function guest(Product $product)
    {
        // dd(json_decode($product->foto)[0]);
        return view('product.guest', compact('product'));
    }
}

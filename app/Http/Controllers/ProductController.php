<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function all() {
        return \App\Models\Product::all()->toArray();
    }

    function search(Request $request) {

    }
}

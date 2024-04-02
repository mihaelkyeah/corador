<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function all() {
        return \App\Models\Brand::all()->toArray();
    }
}

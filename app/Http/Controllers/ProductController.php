<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function all() {
        return Product::all()->toArray();
    }

    function search(Request $request) {

    }

    function comments(Product $product) {
        $comments = $product->comments;
        foreach($comments as $comment) {
            $comment["user"] = $comment->user;
        }
        return $comments->toArray();
    }
}

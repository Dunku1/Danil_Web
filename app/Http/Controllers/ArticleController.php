<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function show()
   {
   		return Product::all();
   }

   public function search($title)
   {
   		return Product::where('title', 'like', '%'.$title.'%')->get();
   }

}

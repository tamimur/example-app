<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        return view('index');
      }
    public function productList(){
        return view('product-list');
      }

      public function productDetails($category,$productTitle,$id){
        return view('product-detail');
      }
}

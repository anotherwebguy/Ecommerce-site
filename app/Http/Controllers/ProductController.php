<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){

    }

    public function create(){
        return view(view: 'admin.products.create');
    }
}

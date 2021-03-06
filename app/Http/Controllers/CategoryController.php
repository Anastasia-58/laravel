<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = $this->getCategory();

        return view('categories.index',[
            'categories'=>$categories,
        ]);
    }
}

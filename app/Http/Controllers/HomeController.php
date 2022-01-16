<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = $this->getCategory();
        return view('layouts.index',['news'=>$news]);
    }
}

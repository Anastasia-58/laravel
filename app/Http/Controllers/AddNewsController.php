<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewsController extends Controller
{
    public function index(){

        return view('news.add');
    }
}

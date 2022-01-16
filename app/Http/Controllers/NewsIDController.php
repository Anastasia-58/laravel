<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsIDController extends Controller
{
    public function index($category,$id){
        if($id>5){
            abort(404);
        }
        $news = $this->getNewsById($id, $category);
        return view('layouts.newsItem',[
            'newsItem'=>$news,
            'category'=>$category
        ]);
    }

}

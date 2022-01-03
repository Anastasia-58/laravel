<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($category){
        $news = $this->getCategoryNews($category);
        return view('news.index',[
            'news'=>$news,
            'category'=>$category,
        ]);
    }



//    public function show(int $id){
//        if($id>5){
//            abort(404);
//        }
//        $news = $this->getNewsById($id);
//        return view('news.show',[
//            'newsItem'=>$news,
//        ]);
//    }
}

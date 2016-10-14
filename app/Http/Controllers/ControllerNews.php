<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerNews extends Controller
{
    public function create(){
        $listNews = News::all();
        return view('news.news')->with("listNews", $listNews);
    }

    public function detailNews($id_news){
        $news_item = News::where('news_id', $id_news)->first();
        $news_relative = News::where('news_id','!=', $id_news)->get();
        return view('news.details')->with("news_item", $news_item)->with("news_relative",$news_relative);
    }
}

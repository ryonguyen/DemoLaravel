<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function getTest(Request $request)
    {
        $output = '';
//        $listNews = News::all();
//        foreach($listNews as $new){
//            echo $new->news_title;
//        }
//        return $output;
        return News::all();
    }

    public function postTest(Request $request)
    {
        if ($request->has('name')) {
            $name = $request->url();

            return $name;
        }
        return 'khog co gi';
    }
}

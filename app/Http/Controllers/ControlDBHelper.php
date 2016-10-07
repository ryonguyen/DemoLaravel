<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControlDBHelper extends Controller
{
    public function getNewsAll(){
        //        $listNew = DB::select('SELECT * FROM tb_news');
//        return $listNew;
        return DB::select('SELECT * FROM tb_news');
    }

    public function getNewsSearchTitle($value_)
    {

    }
}

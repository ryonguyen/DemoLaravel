<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function getTest(Request $request)
    {
        return 'getTest';
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

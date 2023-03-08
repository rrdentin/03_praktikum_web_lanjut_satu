<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($page=0)
    {
        return view('news', ['page'=>$page]);
    }

}

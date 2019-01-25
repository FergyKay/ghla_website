<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PagesController extends Controller
{
    public function home(){
        $news = News::all();

        return view('index',compact('news'));
    }

    public function management(){
        return view('management');

    }
    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showMagazine(){
        return view('webmag');
    }

    public function showArticle(){
        return view('article');
    }
}

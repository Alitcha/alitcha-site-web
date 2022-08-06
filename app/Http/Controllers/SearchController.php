<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $key = $request->recherche;
        $result = Article::where([
            ['title', 'like', '%'. $key .'%'],
            ['published', 1]
        ])->orwhere([
            ['subtitle', 'like', '%'. $key .'%'],
            ['published', 1]
        ])->get()->sortByDesc('nb_like');
        $articles = Article::where('published', 1)->get()->sortByDesc('id');
        return view('resultSearch', compact('key', 'result', 'articles'));
    }
}

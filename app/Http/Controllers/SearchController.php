<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $key = $request->recherche;
        $result = Article::where([
            ['title', 'like', '%' . $key . '%'],
            ['published', 1]
        ])->orwhere([
            ['subtitle', 'like', '%' . $key . '%'],
            ['published', 1]
        ])->get()->sortByDesc('nb_like');
        $articles = Article::where('published', 1)->get()->sortByDesc('id')->take(3);
        $num = Article::where('categorie_id', 1)->get()->count();
        $eco = Article::where('categorie_id', 2)->get()->count();
        $tech = Article::where('categorie_id', 3)->get()->count();
        $divers = Article::where('categorie_id', 4)->get()->count();
        return view('resultSearch', compact('key', 'result', 'articles', 'num', 'eco', 'tech', 'divers'));
    }
    public function search2(Request $request)
    {
        $result = [];
        if ($request->has('author')) {
            $result = Article::where(['postBy' => $request->author, 'published' => 1])->get()->sortByDesc('nb_like');
        } else if ($request->has('categorie')) {
            $result = Article::where(['categorie_id' => $request->categorie, 'published' => 1])->get()->sortByDesc('nb_like');
        }
        $articles = Article::where('published', 1)->get()->sortByDesc('id')->take(3);
        $num = Article::where('categorie_id', 1)->get()->count();
        $eco = Article::where('categorie_id', 2)->get()->count();
        $tech = Article::where('categorie_id', 3)->get()->count();
        $divers = Article::where('categorie_id', 4)->get()->count();
        return view('resultSearch', compact('result', 'articles', 'num', 'eco', 'tech', 'divers'));
    }
}

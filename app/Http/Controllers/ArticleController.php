<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showMagazine(){
        $articles = Article::all()->sortByDesc('id');
        $articles_P = Article::all()->sortByDesc('nb_like');
        $articles_A = Article::all()->random(10);
        return view('webmag', [
            'articles_R' => $articles,
            'articles_P' => $articles_P,
            'art'
        ]);
    }

    public function showArticle($id){
        $article = Article::all()->find($id);
        if ($article != null){
            return view('article', ['article' => $article]);
        } else {
            return redirect()->route('webmagazine')
                ->with('error', "L'article que vous recherché n'existe plus.
                    Il a peut-être été supprimé ou n'a peut-être jamais existé");
        }
    }
}

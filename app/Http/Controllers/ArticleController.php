<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showMagazine(){
        return view('webmag');
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

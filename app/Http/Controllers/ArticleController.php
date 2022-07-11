<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Writers;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function showMagazine(){
        $articles = Article::all()->sortByDesc('id');
        $articles_P = Article::all()->sortByDesc('nb_like');
        $articles_A = Article::all()->random(4);
        $writers = Writers::all();
        
        return view('webmag', [
            'articles_R' => $articles,
            'articles_P' => $articles_P,
            'articles_A' => $articles_A,
            'writers' => $writers,

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //A trier prochainement
        $articles = Article::all();

        return view("article.index",compact("articles"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show',compact("article")) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}

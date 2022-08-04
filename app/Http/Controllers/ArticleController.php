<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Writers;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;


class ArticleController extends Controller
{
    public function showMagazine(){
        $articles = Article::all()->sortByDesc('id');
        $articles_P = Article::all()->sortByDesc('nb_like');
        $articles_A = Article::all()->random(4);
        //$writers = Writers::all();

        return view('webmag', [
            'articles_R' => $articles,
            'articles_P' => $articles_P,
            'articles_A' => $articles_A,

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
        $articles=[];
        if(Auth::user()->isRoot()){
            $articles = Article::all();
        }
        elseif (Auth::user()->isEditor()){
            $articles = Article::where("postBy",Auth::user()->id)->get();;
        }


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
        $categories = Categorie::all();
        $images = Image::all();
        return view('article.create',compact("categories","images"));
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
        $validated= $request->validate([
            "title" => "bail|required",
            "content" => "bail|required",
            "image" => "bail|required",
            "categorie" => "bail|required"
        ]);

        $id =  Article::create([
            "title" => $request->title,
            "subtitle" => "",
            "image" => $request->image,
            "content" => $request->content,
            "postBy" => Auth::user()->id,
            "categorie_id" => $request->categorie
        ]);

        return redirect()->route('article.edit', ['id' => $id])->with('message','Bien enregistré');;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article=Article::findOrFail($id);
        $categories = Categorie::all();
        $images = Image::all();
        return view('article.edit',compact("article","categories","images"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated= $request->validate([
            "title" => "bail|required",
            "content" => "bail|required",
            "image" => "bail|required",
            "categorie" => "bail|required"
        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $request->image;
        $article->categorie_id = $request->categorie;

        $article->update();
        return redirect()->back()->with('message','Bien enregistré');
    }

    public function publish(Request $request, $id)
    {

        $article = Article::find($id);
        $article->published = true;
        $article->update();
        return redirect()->back()->with('message','Bien publié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('message','Bien supprimé');

    }
}

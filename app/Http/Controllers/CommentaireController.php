<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request, $id) {
        $request->validate([
            'nom' => ['required', 'string', 'min:3', 'max:30'],
            'comment' => ['required', 'string'],
        ]);

        $article = Article::find($id);

        if($article != null) {
            Commentaire::create([
                'article_id' => $id,
                'author' => $request['nom'],
                'comment' => $request['comment'],
            ]);
            return redirect()->route('article',['id'=>$id])->with('success', 'Commentaire ajouté !');
        } else {
            return redirect()->route('webmagazine')
            ->with('error', "L'article que vous recherché n'existe plus.
            Il a peut-être été supprimé ou n'a peut-être jamais existé");
        }


        // $commentaire = Commentaire;
    }
}

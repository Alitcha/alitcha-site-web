<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'content',
        'image',
        'postBy',
        'categorie_id',
        'nb_like',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'postBy');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function totalCommentaires()
    {
        return Commentaire::all()->where('article_id', $this->id)->count();
    }

    public function commentaires()
    {
        return Commentaire::where('article_id', $this->id)->orderBy('id', 'desc')->get();
    }

    public function articlesSimilaires()
    {
        $article = Article::where('categorie_id', $this->categorie_id)->orderBy('id', 'desc')->take(4)->get();
        if(count($article) == 0) {
            $article = Article::orderBy('id', 'desc')->take(4)->get();
        }

        return $article;
    }

}

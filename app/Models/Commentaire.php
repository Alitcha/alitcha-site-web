<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'author',
        'comment',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'postBy');
    }
}

<?php

namespace App\Models;

use App\Models\Article;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        return $this->roles()->where('name',$role)->exists();
    }

    public function isRoot()
    {
        return $this->hasRole("root");
    }

    public function isAdmin()
    {
        return $this->hasRole("admin") or $this->hasRole("root");
    }
    public function isEditor()
    {
        return $this->hasRole("editor");
    }

    public function role(){
        return $this->isRoot() ? 'root' : (
         $this->isAdmin()?'admin': (
              $this->isEditor()?'editor':''
         )
        ); 
    }
}

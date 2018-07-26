<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = ['title','content','post_category_id','user_id'];

    public function category()
    {   
        return $this->belongsTo('\App\PostCategory');
    }

    public function author()
    {
        return $this->belongsTo('\App\User');
    }

    public function comments()
    {
        return $this->hasMany('\App\Comment');
    }
}
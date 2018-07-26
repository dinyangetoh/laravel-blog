<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['comment','user_id'];

    public function author()
    {
        return $this->belongsTo('\App\User');
    }

    public function post()
    {
        return $this->hasMany('\App\Post');
    }
}
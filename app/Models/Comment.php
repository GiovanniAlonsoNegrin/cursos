<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Inverse one to many relationship
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Polymorphic relationship
    public function commentable(){
        return $this->morphTo();
    }

    //One to many polymorphic relationship
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}

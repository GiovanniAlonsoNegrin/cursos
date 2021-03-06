<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const LIKE = 1;
    const DISLIKE = 2;

    //Inverse one to many relationship
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Polymorphic relationship
    public function reactionable(){
        return $this->morphTo();
    }
}

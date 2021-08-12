<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    //One to one relationship
    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    //Relationship one to many inverse
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    //Many to many relationship
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //One to one polymorphic relationship
    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //One to many polymorphic relationship
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

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
}

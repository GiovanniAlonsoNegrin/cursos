<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //One to many relationship
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }

    //Relationship one to many inverse
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}

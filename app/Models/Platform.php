<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    //One to many relationship
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
}

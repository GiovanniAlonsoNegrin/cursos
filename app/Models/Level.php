<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    //One to many relationship
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}

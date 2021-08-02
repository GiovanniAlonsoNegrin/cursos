<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    //Relationship one to many inverse
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}

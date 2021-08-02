<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    //Relationship one to one inverse
    public function lesson(){
        return $this->belongsTo('App\Models\lesson');
    }
}

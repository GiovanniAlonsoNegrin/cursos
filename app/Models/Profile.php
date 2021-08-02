<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //Relationship one to one inverse
    public function user(){
        return $this->blongsTo('App\Models\User');
    }
}

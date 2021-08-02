<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Polymorphic relationship
    public function resourceable(){
        return $this->morphTo();
    }
}

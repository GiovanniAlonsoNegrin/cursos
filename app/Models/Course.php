<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    const ERASER = 1;
    const REVISE = 2;
    const PUBLISHED = 3;

    public function getRatingAttribute(){
        //reviews_count is generate into of protected $withCount property
        if ($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    //Query Scopes

    public function scopeCategory($query, $category_id){
        if ($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if ($level_id){
            return $query->where('level_id', $level_id);
        }
    }

    public function getRouteKeyName(){
        return "slug";
    }

    //Relationship one to many
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }
    public function sections(){
        return $this->hasMany('App\Models\Section');
    }

    //Relationship one to many inverse
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    //Many to many relationship
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    //One to one polymorphic relationship
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Through relationship
    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}

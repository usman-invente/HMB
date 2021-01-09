<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function  getRouteKeyName()
    {
        return 'slug'; // db column name
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function lesson(){
        return $this->hasOne(Lesson::class);
    }

}

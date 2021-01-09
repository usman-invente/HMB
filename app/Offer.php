<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function  getRouteKeyName()
    {
        return 'slug'; // db column name
    }
}

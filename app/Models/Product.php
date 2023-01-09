<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function colors() {
        return $this->hasMany('App\Models\Color');
    }

    public function sizes() {
        return $this->hasMany('App\Models\Size');
    }

    public function category() {
        return $this->hasMany('App\Models\Category');
    }

    public function favorite() {
        return $this->hasMany('App\Models\Favorite');
    }

}

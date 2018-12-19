<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function banners(){
        return $this->hasMany(Banners::class);
    }
}

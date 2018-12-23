<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TabloideImages extends Model
{
    protected $fillable = ['path', 'tabloide_id'];

    public function tabloide(){
        return $this->belongsTo(Tabloide::class);
    }
}

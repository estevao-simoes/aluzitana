<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tabloide extends Model
{
    protected $dates = ['start_date', 'end_date'];
    
    protected $fillable = ['start_date', 'end_date'];

    public function images(){
        return $this->hasMany(TabloideImages::class);
    }

    public function isActive(){
        return Carbon::now()->between($this->start_date, $this->end_date);
    }

    public function scopeActive($query){
        /**
         * Get the first tabloid that meets the date validations.
         * validation: todays date must be inside the tabloids range.
         * Knowing there are no intersectino of dates due to previous store validation, we grab only the first result;
         */
        return $query->where('start_date', '<=', Carbon::today()->format('Y-m-d'))->where('end_date', '>=', Carbon::today()->format('Y-m-d'))->get();
        // return $query->where('start_date', '<=', Carbon::today())->get();
    }
}

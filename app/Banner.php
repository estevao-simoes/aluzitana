<?php

namespace App;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
class Banner extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    protected $fillable = [
        'path', 'title', 'active', 'category', 'link', 'external_link'
    ];

    public function scopeHome($query){
        return $query->where('category', 2);
    }

    public function scopeAbout($query){
        return $query->where('category', 1);
    }

}

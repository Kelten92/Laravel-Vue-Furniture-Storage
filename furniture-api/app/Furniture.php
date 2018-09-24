<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'price', 'quantity', 'comments', 'color',
        'wood', 'image'
    ];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fridge extends Model
{
    // protected $fillable = [ //fillable means only these... also can use gaurded for the inverse
    //     'title','creator'
    // ];
    protected $guarded = [];

    public function items(){
        return $this->hasMany(Item::class);
    }
}

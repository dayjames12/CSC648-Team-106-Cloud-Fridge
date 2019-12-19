<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    /*
     * Scope a query to only include fridge items
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFridge($query)
    {
        $user_id = auth()->user()->id;

        return $query->where('user_id', '=', $user_id);
    }

    /*
     * Scope a query to only include grocery list items
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGroceryList($query)
    {
        return $query->where('item_list', '=', 'Grocery list');
    }
}

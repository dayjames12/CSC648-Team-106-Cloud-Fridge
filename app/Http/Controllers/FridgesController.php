<?php

namespace App\Http\Controllers;

use App\Fridge;

class FridgesController extends Controller
{
    public function test(){
        $fridges = Fridge::all();

        // return $fridges; //uncomment to print json of all fridge table

        return view('test', compact('fridges'));
    }
}

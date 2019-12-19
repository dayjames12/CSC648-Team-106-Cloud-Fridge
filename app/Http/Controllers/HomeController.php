<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = \App\Item::fridge()->get();
        $user_id = auth()->user()->id;
        // $items = DB::table('items')->where('user_id', $user_id)


        return view('home', ['items' => $items]);
    }
}

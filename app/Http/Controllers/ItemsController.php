<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function create()
    {
      return view('items/create');
    }

    public function store(Request $request)
    {
      $item = new Item;

      $item->name = $request->name;
      $item->quantity = $request->quantity;
      $item->expiration = $request->expiration;

      $item->save();

      return redirect('/home');
    }

    public function search(Request $request)
    {
      $search = $request->input('search');
      $items = Item::where('name', 'LIKE', '%'.$search.'%')->get();

      return view('home', ['items' => $items]);
    }

    public function destroy($id)
    {
      Item::find($id)->delete();

      return redirect('/home');
    }
}

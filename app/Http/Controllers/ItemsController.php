<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Fridge;

class ItemsController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function create(){
        return view('items/create');
    }

    public function show(Item $item){
        return view('items.show', compact('item'));
    }

    public function store(Request $request){
        $item = new Item;

        $item->fridge_id = Fridge::first()->id;
        $item->name = $request->name;
        $item->quantity = $request->quantity;
        $item->price = $request->price;
        $item->expiration_date = $request->expiration_date;
        $item->item_list = $request->item_list;

        $item->save();

        return redirect($request->origin);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $items = Item::where('name', 'LIKE', '%'.$search.'%')->get();

        return view('home', ['items' => $items]);
    }

    public function sort(Request $request)
    {
        if(isset($_POST['sort_by'])) {

            $sort = $_POST['sort_by'];

            if ($sort == '1') {
                $items = Item::all()->sortBy('name');
            }
            else if ($sort == '2') {
                $items = Item::all()->sortBy('quantity');
            }
            else if ($sort == '3') {
                $items = Item::all()->sortBy('expiration_date');
            }
        $sort = $request->sort_by;
        }// not sure if close bracket goes before or after previous line

        // if ($sort == '1') {
        //     $items = Item::all()->sortBy('name');
        // }
        // else if ($sort == '2') {
        //     $items = Item::all()->sortBy('expiration');
        // }
        // else if ($sort == '3') {
        //     $items = Item::all()->sortBy('quantity');
        // }

        return view('home', ['items' => $items]);
    }

    public function edit(Item $item){
        return view('items.edit', compact('item'));
    }

    public function update(Item $item){
        $item->update(request(['name','quantity','price','expiration_date']));
        $item->save();

        return redirect('items');
    }

    public function destroy($id){
        Item::find($id)->delete();

        return redirect('/home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

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
        return view('items.show', compact('items'));
    }

    public function store(Request $request){
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

    public function sort()
    {
        if(isset($_POST['sort-by'])) {

            $sort = $_POST['sort-by'];

            if ($sort == '1') {
                $items = Item::all()->sortBy('name');
            }
            else if ($sort == '2') {
                $items = Item::all();
            }
            else if ($sort == '3') {
                $items = Item::all();
            }
        }

        return view('home', ['items' => $items]);
    }

    public function edit(Item $item){
        return view('items.edit', comapct('items'));
    }

    public function update(Item $item){
        $item->update(request(['name','quantity','price']));
        $item->save();

        return redirect('items');
    }

    public function destroy($id){
        Item::find($id)->delete();

        return redirect('/home');
    }
}

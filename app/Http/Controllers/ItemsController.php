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

        $item->user_id = auth()->user()->id;
        $item->name = $request->name;
        $item->quantity = $request->quantity;
        $item->price = $request->price;
        $item->expiration_date = $request->expiration_date;
        $item->item_list = $request->item_list;

        $item->save();

        return redirect('home');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $items = Item::fridge()->where('name', 'LIKE', '%'.$search.'%')->get();
        $groceryItems = Item::groceryList()->get();

        return view('home', compact(['items','groceryItems']));
    }

    public function sort(Request $request)
    {
        if(isset($_POST['sort_by'])) {

            $sort = $_POST['sort_by'];

            if ($sort == '1') {
                $items = Item::fridge()->get()->sortBy('name');
            }
            else if ($sort == '2') {
                $items = Item::fridge()->get()->sortBy('expiration_date');
            }
            else if ($sort == '3') {
                $items = Item::fridge()->get()->sortBy('quantity');
            }
        }
        
        $groceryItems = Item::groceryList()->get();

        return view('home', compact(['items', 'groceryItems']));
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

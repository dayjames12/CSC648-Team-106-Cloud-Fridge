<?php

namespace App\Http\Controllers;

use App\Fridge;

class FridgesController extends Controller
{
    public function index(){
        $fridges = Fridge::all();

        return view('fridges.index', compact('fridges'));
    }

    public function create(){
        return view('fridges.create');
    }

    public function show(Fridge $fridge){
        return view('fridges.show', compact('fridge'));
    }

    public function store(){
        $attributes = request()->validate([
            'name' => ['required','min:3'],
            'owner' => ['required','min:3'],
            'user_id' => ['required', 'min:1']
        ]);

        Fridge::create($attributes);

        return redirect('/fridges');
    }

    public function edit(Fridge $fridge){
        return view('fridges.edit',compact('fridge'));
    }

    public function update(Fridge $fridge){
        $fridge->update(request(['name','owner','user_id']));

        $fridge->save();

        return redirect('/fridges');
    }

    public function destroy(Fridge $fridge){
        $fridge->delete();

        return redirect('/fridges');
    }
}

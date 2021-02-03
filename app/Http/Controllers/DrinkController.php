<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        //dd($drinks);
        return view('pages.drinks', compact('drinks'));
    }

    public function show($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink', compact('drink'));
    }

    public function create() {
        return view('pages.drink-create');
    }

    public function store(Request $request) {

        
        $newDrink = new Drink;

        $newDrink -> name = $request -> get('name');
        $newDrink -> alchol_content = $request -> get('alchol_content');
        $newDrink -> price = $request -> get('price');

        $newDrink -> save();

        return redirect() -> route('drinks-index');
        
        //Drink::create($request -> all());
        //return redirect() -> route('drinks-index');
        //oppure
        //return redirect() -> route('drink-show', $drink -> id);
    }

    public function edit($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.drink-edit', compact('drink'));
    }

    public function update(Request $request, $id) {
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());

        return redirect() -> route('drinks-index');
    }


    public function delete($id) {
        $drink = Drink::findOrFail($id);
        $drink -> delete();

        return redirect() -> route('drinks-index');
    }




}
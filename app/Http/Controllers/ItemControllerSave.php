<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;



class ItemController extends Controller
{
    public function create()
    {
        return view('inventory.create');
    }

    public function index()
    {
        // $items = new Item();
        // $all = Item::all();
        // return $all;
        return view('inventory.index', [
            "items" => Item::all()
        ]);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('inventory.show', compact("item"));
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view("inventory.edit", compact('item'));
    }

    public function update($id, Request $request)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();
        return redirect()->route('item.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:50|unique:items,name",
            "price" => "required|numeric|gte:50",
            "stock" => "required|numeric|gt:3"
        ]);
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;

        $item->save();
        return redirect()->route('item.index');

        //need to declare filliable at model
        // $item = Item::create([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock
        // ]);

        // $item = Item::create($request->all());
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}

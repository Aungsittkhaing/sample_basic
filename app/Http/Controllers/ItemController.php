<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

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

    public function destory($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}

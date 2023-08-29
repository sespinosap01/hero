<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index', ['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->saveItem($request, null);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $item = Item::find($id);

        return view('admin.items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return $this->saveItem($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);

        $filePath = public_path() . '/images/items/' . $item->img_path;
        \File::delete($filePath);

        $item ->delete();

        return redirect()->route('item.index');  
      }

    public function saveItem(Request $request, $id){
        if($id){
            $item = Item::find($id);
        }else{
            $item = new Item();      
        }

        $item->name = $request->input('name');
        $item->hp = $request->input('hp');
        $item->atq = $request->input('atq');
        $item->def = $request->input('def');
        $item->luck = $request->input('luck');
        $item->cost = $request->input('cost');

        if($request->hasFile('img_path')){
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/images/items', $name);

            $item->img_path = $name;
        }
    
        $item->save();
        return redirect()->route('item.index');
    }

}

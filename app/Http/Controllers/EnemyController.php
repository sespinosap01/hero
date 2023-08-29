<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enemy;

class EnemyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enemies = Enemy::all();

        return view('admin.enemies.index', ['enemies'=>$enemies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.enemies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->saveEnemy($request, null);
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
    public function edit(string $id)
    {
        $enemy = Enemy::find($id);

        return view('admin.enemies.edit', ['enemy' => $enemy]); 
       }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enemy = Enemy::find($id);


        return $this->saveEnemy($request, $id);  
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enemy = Enemy::find($id);

        $filePath = public_path() . '/images/enemies/' . $enemy->img_path;
        \File::delete($filePath);

        $enemy ->delete();

        return redirect()->route('enemy.index');  
      }

    public function saveEnemy(Request $request, $id){
        if($id){
            $enemy = Enemy::find($id);
        }else{
            $enemy = new Enemy();
        }

        $enemy->name = $request->input('name');
        $enemy->hp = $request->input('hp');
        $enemy->atq = $request->input('atq');
        $enemy->def = $request->input('def');
        $enemy->coins = $request->input('coins');
        $enemy->xp = $request->input('xp');

        if($request->hasFile('img_path')){
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/images/enemies', $name);

            $enemy->img_path = $name;
        }

        $enemy->save();
        return redirect()->route('enemy.index');
    }
}

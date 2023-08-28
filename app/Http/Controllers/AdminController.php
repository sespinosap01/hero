<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enemy;
use App\Models\Hero;
use App\Models\Item;

class AdminController extends Controller
{
    public function index(){
        $heroCounter= Hero::count();
        $itemCounter= Item::count();
        $enemyCounter= Enemy::count();

        $report = [
            ['name' => "Heroe", 'counter' => $heroCounter, 'route' => 'heroes.index', 'class' => 'btn-primary'],
            ['name' => "Items", 'counter' => $itemCounter, 'route' => 'item.index', 'class' => 'btn-warning'],
            ['name' => "Enemigos", 'counter' => $enemyCounter, 'route' => 'enemy.index', 'class' => 'btn-danger']

        ];

        return view('admin.index', ['report' => $report]);
    }
}

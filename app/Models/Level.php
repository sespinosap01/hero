<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    use HasFactory;


    public function heroes(){
        return $this->hasMany("App\Models\Hero");
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public $recipes = [
        ['id' => 1, 'name' => 'pizza', 'description' => '...'],
        ['id' => 2, 'name' => 'pizza', 'description' => '...'],
        ['id' => 3, 'name' => 'pizza', 'description' => '...'],
        ['id' => 4, 'name' => 'pizza', 'description' => '...'],
        ['id' => 5, 'name' => 'pizza', 'description' => '...'],
        ['id' => 6, 'name' => 'pizza', 'description' => '...'],
        ['id' => 7, 'name' => 'pizza', 'description' => '...'],
        ['id' => 8, 'name' => 'pizza', 'description' => '...'],
    ];

    public function index (){
        return view('homepage', ['recipes' => $this->recipes]);
    }

    public function show($id){
        foreach ($this->recipes as $recipe) {
            if ($id == $recipe) {
                return view('recipes-details', ['recipes' => $recipe]);
            }
        }
    }
}

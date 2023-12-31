<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public $recipes = [
        ['id' => 1, 'name' => 'pizza margherita', 'photo' => "https://www.marcobianchi.blog/wp-content/uploads/2023/01/pizza-scaled.jpg", 'category' => 'salt'],
        ['id' => 2, 'name' => 'carbonara', 'photo' => "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/03/Carbonara-ricetta-5328.jpg", 'category' => 'salt'],
        ['id' => 3, 'name' => 'pasta al pesto', 'photo' => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/AdobeStock_235021478-1200x900.jpg", 'category' => 'salt'],
        ['id' => 4, 'name' => 'pesce', 'photo' => "https://ricetta.it/Uploads/Imgs/10-ricette-facili-per-cucinare-il-pesce.jpg", 'category' => 'salt'],
        ['id' => 5, 'name' => 'pollo', 'photo' => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Pollo_e_patate_al_forno_2-1200x675.jpg", 'category' => 'salt'],
        ['id' => 6, 'name' => 'torta di mele', 'photo' => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2019/08/torta-di-mele-semplice-SITO-copertina.jpg", 'category' => 'sweet'],
        ['id' => 7, 'name' => 'tacos', 'photo' => "https://primochef.it/wp-content/uploads/2023/03/SH_tacos_con_carne.jpg.webp", 'category' => 'salt'],
        ['id' => 9, 'name' => 'frittata', 'photo' => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/08/frittata-di-pane/_jcr_content/header-par/image-single.img.jpg/1533141529496.jpg", 'category' => 'salt'],
        ['id' => 10, 'name' => 'crostata', 'photo' => "https://www.giallozafferano.it/images/157-15765/Crostata-di-frutta-estiva_780x520_wm.jpg", 'category' => 'salt'],
        ['id' => 11, 'name' => 'crepes', 'photo' => "https://hips.hearstapps.com/hmg-prod/images/crepes-index-64347419e3c7a.jpg?crop=0.6666666666666666xw:1xh;center,top&resize=1200:*", 'category' => 'salt'],
        ['id' => 12, 'name' => 'dorayaki', 'photo' => "https://www.misya.info/wp-content/uploads/2014/07/Dorayaki.jpg", 'category' => 'salt'],
    ];

    public function index (){
        return view('homepage', ['recipes' => $this->recipes]);
    }

    public function show($id){
        foreach ($this->recipes as $recipe) {
            // remember to pass the key of the variable
            if ($id == $recipe['id']) {
                return view('recipes-details', ['recipes' => $recipe]);
            }
        }
    }

    public function filter($category){
        $categories = [];

        foreach ($this->recipes as $recipe) {
            if ($category == $recipe['category'] ) {
                $categories [] = $recipe;
            }
        }

        return view('category', ['category' => $categories]);
    }
}

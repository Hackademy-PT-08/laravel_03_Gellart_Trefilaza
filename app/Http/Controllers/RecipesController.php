<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public $recipes = [
        ['id' => 1, 'name' => 'pizza margherita', 'photo' => "https://www.marcobianchi.blog/wp-content/uploads/2023/01/pizza-scaled.jpg"],
        ['id' => 2, 'name' => 'carbonara', 'photo' => "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/03/Carbonara-ricetta-5328.jpg"],
        ['id' => 3, 'name' => 'pasta al pesto', 'photo' => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/AdobeStock_235021478-1200x900.jpg"],
        ['id' => 4, 'name' => 'pesce', 'photo' => "https://ricetta.it/Uploads/Imgs/10-ricette-facili-per-cucinare-il-pesce.jpg"],
        ['id' => 5, 'name' => 'pollo', 'photo' => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Pollo_e_patate_al_forno_2-1200x675.jpg"],
        ['id' => 6, 'name' => 'torta di mele', 'photo' => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2019/08/torta-di-mele-semplice-SITO-copertina.jpg"],
        ['id' => 7, 'name' => 'tacos', 'photo' => "https://primochef.it/wp-content/uploads/2023/03/SH_tacos_con_carne.jpg.webp"],
        ['id' => 8, 'name' => 'frittata', 'photo' => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/08/frittata-di-pane/_jcr_content/header-par/image-single.img.jpg/1533141529496.jpg"],
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
}

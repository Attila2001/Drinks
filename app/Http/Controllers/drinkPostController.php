<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\drinkPost;

class drinkPostController extends Controller
{
    public function index() {
        //összes bejegyzés megjelenítése
        $posts = drinkPost::all();
        return view('drinks.index',[
            'posts' => $posts,
        ] );
        }
        public function create() {
        //form megjelenítése egy új bejegyzéshez
        }
        public function store( Request $request ) {
        //Új bejegyzés tárolása az adatbázisban
        }
        public function show( DrinkPost $drinkPost ) {
        //Létező bejegyzés mutatása
            return view ('drinks.show',[
                'post'=> $drinkPost,
            ]);
            
        }
        public function edit( DrinkPost $drinkPost ) {
        //Létező bejegyzés editálása
        }
        public function update( Request $request,
        DrinkPost $drinkPost ) {
        
        //Editált bejegyzés mentése
        }
        public function remove( DrinkPost $drinkPost ) {
        //bejegyzés törlése
        }
}

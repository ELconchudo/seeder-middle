<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $poke = Pokedex::paginate();

        return view('pokedex.user-pokedexes', compact('pokedexes'))
            ->with('i', (request()->input('page', 1) - 1) * $poke->perPage());
    }
}
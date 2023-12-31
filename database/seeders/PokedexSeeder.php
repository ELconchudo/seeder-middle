<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PokedexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = ['fuego', 'agua', 'eléctrico'];
        $tamaños = ['grande', 'mediano', 'pequeño'];
        $nombresPokemon = ['Pikachu', 'Charmander', 'Squirtle', 'Bulbasaur', 'Jigglypuff', 'Eevee', 'Mewtwo', 'Gyarados', 'Snorlax', 'Magikarp'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('pokedexes')->insert([
                'Nombre' => $nombresPokemon[array_rand($nombresPokemon)],
                'Tipo' => $tipos[array_rand($tipos)],
                'Tamaño' => $tamaños[array_rand($tamaños)],
                'Peso' => rand(1, 100) + (rand(1, 9) / 10),
            ]);
        }
    }
}

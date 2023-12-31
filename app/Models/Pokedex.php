<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pokedex
 *
 * @property $id
 * @property $Nombre
 * @property $Tipo
 * @property $Tamaño
 * @property $Peso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pokedex extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Tipo' => 'required',
		'Tamaño' => 'required',
		'Peso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Tipo','Tamaño','Peso'];



}

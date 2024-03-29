<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    
    static $rules = [
		'equipo' => 'required',
    'partido' => 'required',
		'gallo1_anillo' => 'required',
		'peso1' => 'required',
    'puntos1' => 'required',
		'gallo2_anillo' => 'required',
		'peso2' => 'required',
    'puntos2' => 'required',
		'gallo3_anillo' => 'required',
		'peso3' => 'required',
    'puntos3' => 'required',
		'gallo4_anillo' => 'required',
		'peso4' => 'required',
    'puntos4' => 'required',
    'puntos5' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo','partido','gallo1_anillo','peso1','puntos1','gallo2_anillo','peso2','puntos2','gallo3_anillo','peso3','puntos3','gallo4_anillo','peso4','puntos4','gallo5_anillo','peso5','puntos5','puntaje_total'];



}

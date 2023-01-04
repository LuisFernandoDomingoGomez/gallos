<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ronda5pelea
 *
 * @property $id
 * @property $peleador1
 * @property $peleador2
 * @property $created_at
 * @property $updated_at
 *
 * @property Gallo1 $gallo1
 * @property Gallo2 $gallo2
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ronda5pelea extends Model
{
    
    static $rules = [
      
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo1','peleador1','peso1',
                           'equipo2','peleador2','peso2'];

}

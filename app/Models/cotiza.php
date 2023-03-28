<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotiza
 *
 * @property $id
 * @property $Nombres
 * @property $Numero
 * @property $Correo
 * @property $Servicio
 * @property $Terreno
 * @property $Presupuesto
 * @property $Tiempo
 * @property $Mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cotiza extends Model
{
    
    static $rules = [
		'Nombres' => 'required',
		'Numero' => 'required',
		'Correo' => 'required',
		'Servicio' => 'required',
		'Terreno' => 'required',
		'Presupuesto' => 'required',
		'Tiempo' => 'required',
		'Mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Numero','Correo','Servicio','Terreno','Presupuesto','Tiempo','Mensaje'];



}

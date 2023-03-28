<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @property $id
 * @property $Imagen
 * @property $Nombre
 * @property $Descripcion
 * @property $Duracion
 * @property $Cliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Project extends Model
{
    
    static $rules = [
		'Imagen' => 'required',
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Duracion' => 'required',
		'Cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Imagen','Nombre','Descripcion','Duracion','Cliente'];



}

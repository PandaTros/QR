<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 *
 * @property $id
 * @property $Pregunta
 * @property $Respuesta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Question extends Model
{
    
    static $rules = [
		'Pregunta' => 'required',
		'Respuesta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Pregunta','Respuesta'];



}

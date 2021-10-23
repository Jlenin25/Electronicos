<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidencia
 *
 * @property $id
 * @property $id_inci
 * @property $nombre
 * @property $tipo
 * @property $categoria
 * @property $id_emp
 * @property $id_clie
 * @property $id_prov
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidencia extends Model
{
    
    static $rules = [
		'id_inci' => 'required',
		'nombre' => 'required',
		'tipo' => 'required',
		'categoria' => 'required',
		'id_emp' => 'required',
		'id_clie' => 'required',
		'id_prov' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_inci','nombre','tipo','categoria','id_emp','id_clie','id_prov','id_estado'];



}

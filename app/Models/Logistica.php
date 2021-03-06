<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Logistica
 *
 * @property $id
 * @property $id_log
 * @property $id_emp
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Logistica extends Model
{
    
    static $rules = [
		'id_log' => 'required',
		'id_emp' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_log','id_emp','id_estado'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operacione
 *
 * @property $id
 * @property $id_oper
 * @property $id_emp
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operacione extends Model
{
    
    static $rules = [
		'id_oper' => 'required',
		'id_emp' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_oper','id_emp','id_estado'];



}

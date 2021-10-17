<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expira
 *
 * @property $id
 * @property $dias
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expira extends Model
{
    
    static $rules = [
		'dias' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dias'];



}

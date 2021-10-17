<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Moneda
 *
 * @property $id
 * @property $monedas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Moneda extends Model
{
    
    static $rules = [
		'monedas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monedas'];



}

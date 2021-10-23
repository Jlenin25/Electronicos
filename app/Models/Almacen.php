<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacen
 *
 * @property $id
 * @property $codigo
 * @property $producto
 * @property $imagen
 * @property $descripcion
 * @property $stock_minimo
 * @property $stock_maximo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Almacen extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'producto' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'stock_minimo' => 'required',
		'stock_maximo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','producto','imagen','descripcion','stock_minimo','stock_maximo'];



}

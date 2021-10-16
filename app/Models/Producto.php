<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $detalle
 * @property $cantidad
 * @property $descripcion
 * @property $stock
 * @property $id_categoria
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    static $rules = [
		'nombre' => 'required',
    'imagen' => 'required',
		'precio' => 'required',
		'detalle' => 'required',
		'cantidad' => 'required',
		'descripcion' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'imagen',
      'precio',
      'detalle',
      'cantidad',
      'descripcion',
      'stock',
      'id_categoria',
      'id_proveedor'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'id_proveedor');
    }

}

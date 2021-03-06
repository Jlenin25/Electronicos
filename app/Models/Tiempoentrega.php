<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiempoentrega
 *
 * @property $id
 * @property $dias
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiempoentrega extends Model
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

    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_tiempoentrega', 'id');
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadocliente
 *
 * @property $id
 * @property $situacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadocliente extends Model
{
    
    static $rules = [
		'situacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['situacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'id_estadocliente', 'id');
    }
    

}

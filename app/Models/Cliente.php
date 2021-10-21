<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $ruc
 * @property $direccion
 * @property $celular1
 * @property $email1
 * @property $paginaweb
 * @property $estado
 * @property $razonsocial
 * @property $contacto
 * @property $celular2
 * @property $email2
 * @property $area
 * @property $asignado
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'ruc' => 'required',
		'direccion' => 'required',
		'celular1' => 'required',
		'email1' => 'required',
		'paginaweb' => 'required',
		'estado' => 'required',
		'razonsocial' => 'required',
		'contacto' => 'required',
		'celular2' => 'required',
		'email2' => 'required',
		'area' => 'required',
		'asignado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruc','direccion','celular1','email1','paginaweb','estado','razonsocial','contacto','celular2','email2','area','asignado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_cliente', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $ruc
 * @property $direccion
 * @property $celular1
 * @property $email1
 * @property $paginaweb
 * @property $id_estadocliente
 * @property $razonsocial
 * @property $contaco
 * @property $celular2
 * @property $email2
 * @property $id_area
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Estadocliente $estadocliente
 * @property Producto[] $productos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'ruc' => 'required',
		'direccion' => 'required',
		'celular1' => 'required',
		'email1' => 'required',
		'paginaweb' => 'required',
		'razonsocial' => 'required',
		'contaco' => 'required',
		'celular2' => 'required',
		'email2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruc','direccion','celular1','email1','paginaweb','id_estadocliente','razonsocial','contaco','celular2','email2','id_area','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'id_area');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadocliente()
    {
        return $this->hasOne('App\Models\Estadocliente', 'id', 'id_estadocliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_proveedor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    

}

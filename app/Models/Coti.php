<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coti
 *
 * @property $id
 * @property $id_cliente
 * @property $id_asignado
 * @property $id_expira
 * @property $id_moneda
 * @property $id_tiempoentrega
 * @property $id_formapago
 * @property $id_estado
 * @property $id_direccion
 * @property $id_condiciones_generale
 * @property $id_piepagina
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignado $asignado
 * @property Cliente $cliente
 * @property CondicionesGenerale $condicionesGenerale
 * @property Direccion $direccion
 * @property Estado $estado
 * @property Expira $expira
 * @property Formapago $formapago
 * @property Moneda $moneda
 * @property Piepagina $piepagina
 * @property Tiempoentrega $tiempoentrega
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coti extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_asignado','id_expira','id_moneda','id_tiempoentrega','id_formapago','id_estado','id_direccion','id_condiciones_generale','id_piepagina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asignado()
    {
        return $this->hasOne('App\Models\Asignado', 'id', 'id_asignado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condicionesGenerale()
    {
        return $this->hasOne('App\Models\CondicionesGenerale', 'id', 'id_condiciones_generale');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function direccion()
    {
        return $this->hasOne('App\Models\Direccion', 'id', 'id_direccion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expira()
    {
        return $this->hasOne('App\Models\Expira', 'id', 'id_expira');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formapago()
    {
        return $this->hasOne('App\Models\Formapago', 'id', 'id_formapago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function moneda()
    {
        return $this->hasOne('App\Models\Moneda', 'id', 'id_moneda');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function piepagina()
    {
        return $this->hasOne('App\Models\Piepagina', 'id', 'id_piepagina');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiempoentrega()
    {
        return $this->hasOne('App\Models\Tiempoentrega', 'id', 'id_tiempoentrega');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formapago
 *
 * @property $id
 * @property $pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formapago extends Model
{
    
    static $rules = [
		'pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_formapago', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formapago
 *
 * @property $id
 * @property $efectivo
 * @property $credito
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
		'efectivo' => 'required',
		'credito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['efectivo','credito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_formapago', 'id');
    }
    

}

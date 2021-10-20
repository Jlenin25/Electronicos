<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 *
 * @property $id
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Direccion extends Model
{
    
    static $rules = [
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_direccion', 'id');
    }
    

}

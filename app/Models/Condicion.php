<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condicion
 *
 * @property $id
 * @property $condicionesgenerales
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Condicion extends Model
{
    
    static $rules = [
		'condicionesgenerales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['condicionesgenerales'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_condicions', 'id');
    }
    

}

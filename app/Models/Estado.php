<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $situacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
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
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_estado', 'id');
    }
    

}

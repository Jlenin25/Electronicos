<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignado
 *
 * @property $id
 * @property $name_asignado
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignado extends Model
{
    
    static $rules = [
		'name_asignado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_asignado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_asignado', 'id');
    }
    

}

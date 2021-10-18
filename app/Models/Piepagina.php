<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piepagina
 *
 * @property $id
 * @property $cod_piedepagina
 * @property $name_piedepagina
 * @property $created_at
 * @property $updated_at
 *
 * @property Coti[] $cotis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piepagina extends Model
{
    
    static $rules = [
		'cod_piedepagina' => 'required',
		'name_piedepagina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_piedepagina','name_piedepagina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_piepagina', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piepagina
 *
 * @property $id
 * @property $piedepagina
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
		'piedepagina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piedepagina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotis()
    {
        return $this->hasMany('App\Models\Coti', 'id_piepagina', 'id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dashboard
 *
 * @property $id
 * @property $id_das
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dashboard extends Model
{
    
    static $rules = [
		'id_das' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_das'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    use HasFactory;

    static $rules = [
		'id_proveedor' => 'required'
    ];

    protected $fillable = [
        'id_proveedor'
    ];

    public function cotizacion()
    {
        return $this->hasMany('App\Models\User', 'id_user', 'id');
    }
}
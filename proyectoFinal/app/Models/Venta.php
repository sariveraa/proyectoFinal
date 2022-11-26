<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    static $rules = [
        'identidad' => 'required',
		'codigo' => 'required',
    ];

    protected $fillable = ['identidad','codigo'];

}

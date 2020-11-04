<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientuser extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'birth',
        'email',
        'tel',
        'address',
        'city',
        'state'
    ];
}

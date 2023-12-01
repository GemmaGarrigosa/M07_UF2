<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnat extends Model
{
    use HasFactory;
    protected $table = 'alumnats'; //nom de la taula a la bbdd que hem indicat a la migració

    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [];
}

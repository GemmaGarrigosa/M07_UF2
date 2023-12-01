<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;
    protected $table = 'professorats'; //nom de la taula a la bbdd que hem indicat a la migració

    protected $fillable = [ //camps que volem omplir automàticament
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [];
}

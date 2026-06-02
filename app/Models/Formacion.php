<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    //
    protected $table = 'formacions';


protected $filliable = [

    'personal_id',
    'nombre',
    'institucion',
    'nivel',
    'fecha_graduacion',
    'archivo',

];




public function personal(){


    return $this->belongsTo(Personal::class);

}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paralelo extends Model
{
    //

    protected $table = 'paralelos';

    protected $filiiable = [

        'nombre',
        'grado_id'
    ];


        public function grado(){


        return $this->belongsTo(Grado::class);

    
        }




}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestions';


    protected $fillable = [

    'nombre',
    // 'fecha_inicio',
    // 'fecha_fin',
    // 'estado',

    ];


        public function scopeActive($query) {

        return $query->where('estado', 1);


        }

        public function scopeInactive($query) {

        return $query->where('estado', 0);


        }

        public function periodos(){

                return $this->hasMany(Periodo::class);



        }

}

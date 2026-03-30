<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('grados')->onDelete('cascade');    

            





//      int [ref: > user.id]
//     nombre varchar 
//     nivel_id int [ref: >grados.id]
//     apellidos varchar
   
//     tipo varchar
//     ci varchar

//     fecha_nacimiento date

//     direccion varchar
//     telefono varchar



// profesion varchar



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};

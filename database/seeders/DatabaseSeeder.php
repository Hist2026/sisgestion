<?php

namespace Database\Seeders;
use App\Models\Configuracion;
use App\Models\User;
use App\Models\Gestion;
use App\Models\Periodo;

use App\Models\Nivel;
use App\Models\Grado;
use App\Models\Paralelo;
use App\Models\Turno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'ejemplot@gmail.com',
            'password' => Hash::make('12345678'),
        ]);


Configuracion::create([

        'nombre'=> 'UUEE',
        'descripcion' => 'unidad particular',
        'direccion' => 'zona mirtaflores',
        'telefono' => '156484',
        'divisa' =>  'BS',
        'correo' => 'ejemplo@gmail.com',
        'web' => 'fsdfsdfs',
        'logo' => 'uploads/logos/1774319732_ChatGPT Image 17 mar 2026, 22_38_44.png',

]);


    Gestion::create(['nombre' => '2024',]);
 Gestion::create(['nombre' => '2025',]);
  Gestion::create(['nombre' => '2026',]);
   Gestion::create(['nombre' => '2027',]);
   
    Periodo::create(['nombre' => '1er Trimestre', 'gestion_id' => '1']);
    Periodo::create(['nombre' => '2do Trimestre', 'gestion_id' => '1']);

Periodo::create(['nombre' => '3er Trimestre', 'gestion_id' => '2']);
Periodo::create(['nombre' => '3er Trimestre', 'gestion_id' => '2']);



    Nivel::create(['nombre' => 'INICIAL']);
    Nivel::create(['nombre' => 'PRIMARIA']);   
Nivel::create(['nombre' => 'SECUNDARIA']);

    Grado::create(['nombre' => '1ero Inicial', 'nivel_id' => '1']);
    Grado::create(['nombre' => '2do inicial', 'nivel_id' => '1']);

        Grado::create(['nombre' => '1ero Primaria', 'nivel_id' => '2']);

        
         Paralelo::create(['nombre' => 'A', 'grado_id' => '1']);
          Paralelo::create(['nombre' => 'B', 'grado_id' => '2']);
 Paralelo::create(['nombre' => 'C', 'grado_id' => '3']);
 Paralelo::create(['nombre' => 'B', 'grado_id' => '1']);
 Paralelo::create(['nombre' => 'E', 'grado_id' => '2']);
 Paralelo::create(['nombre' => 'F', 'grado_id' => '3']);
 Paralelo::create(['nombre' => 'G', 'grado_id' => '1']);

 

Turno::create(['nombre' => 'MAÑANA']);
Turno::create(['nombre' => 'TARDE']);



    }
}

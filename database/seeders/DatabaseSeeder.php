<?php

namespace Database\Seeders;
use App\Models\Configuracion;
use App\Models\User;
use App\Models\Gestion;
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


    Gestion::create([
'nombre' => '2024',
'nombre' => '2025',
'nombre' => '2026',
'nombre' => '2027',


    ]);


    }
}

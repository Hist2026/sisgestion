<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Role::create(['name' => 'ADMINISTRADOR']);
        Role::create(['name' => 'DIRECTORA/O GENERAL']);
        
          Role::create(['name' => 'DOCENTE']);
            Role::create(['name' => 'ESTUDIANTE']);
              Role::create(['name' => 'DIRECTOR ACADEMICO']);
                Role::create(['name' => 'CAJERO/A']);
                  Role::create(['name' => 'SECRETARIO/O']);
                    Role::create(['name' => 'REGENTE']);

    }
}

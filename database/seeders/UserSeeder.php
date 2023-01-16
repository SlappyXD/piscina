<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\RoleSeeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Usuario Administrador */
       User::create([
        'name' => 'Mishaelrv',
        'email' => 'mijharv@gmail.com',
        'password' => bcrypt('12345678')
       ])->assignRole('Admin');


        /* Usuario Secretaria */
        User::create([
            'name' => 'PachecoG',
            'email' => 'pacheco@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Secretaria'); 

        /* Usuario Profesor1 */
          User::create([
            'name' => 'Josue Eduardo',
            'email' => 'josueEdu@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Profesor de Nataciòn'); 

        /* Usuario Profesor2 */
         User::create([
            'name' => 'Chavez Flores',
            'email' => 'chavecito@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Profesor de Nataciòn'); 

         /* Usuario Gerente Comercial */
         User::create([
            'name' => 'David Edinson',
            'email' => 'davidEd@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Gerente Comercial'); 
        
        /* Usuarios Aleatorios */
        User::factory(5)->create();  


    }
    }

   

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        /*
        /* Llamada a ROLESEEDER  */
        $this -> call(RoleSeeder::class);

        /*Usuario Administrador */
        $this -> call(UserSeeder::class);
        

    }
}

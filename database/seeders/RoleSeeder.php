<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        /* --------------------------- Creacion de Roles ---------------------------------- */

        /* Rol1 - > Admin */
        $role1 = Role::create(['name'=>'Admin']);        
        /* Rol2 - > Secretaria */
        $role2 = Role::create(['name'=>'Secretaria']);
        /* Rol3 - > Profesor */
        $role3 = Role::create(['name'=>'Profesor de Nataciòn']);
        /* Rol4 - > Gerente Comercial */
        $role4 = Role::create(['name'=>'Gerente Comercial']);
        

        /* -------------------------- Creacion de Permisos ---------------------------------- */

        /* Permiso para la vista Principal */
        Permission::create(['name'=>'home'])->syncRoles([$role1,$role2,$role3,$role4]);

        /* Permisos para Usuarios */
        Permission::create(['name'=>'usuarios.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuarios.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuarios.destroy'])->syncRoles([$role1]);
        
        /* Permisos para Alumnos  */
        Permission::create(['name'=>'alumno.index'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name'=>'alumno.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'alumno.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'alumno.destroy'])->syncRoles([$role1,$role2]);

        /* Permisos para Profesores */
        Permission::create(['name'=>'profesor.index'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name'=>'profesor.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'profesor.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'profesor.destroy'])->syncRoles([$role1,$role2]);

        /* Permisos para Ingreso de Horarios Disp. del Profesor */
        /* faltaaaaaaaaaaaaaaaaaa */

        /* Permisos para Horarios */
        Permission::create(['name'=>'horario.index'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name'=>'horario.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'horario.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'horario.destroy'])->syncRoles([$role1,$role2]); 

        /* Permisos para Programacion */
        Permission::create(['name'=>'programacion.index'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name'=>'programacion.edit'])->syncRoles([$role1,$role2]);
      /*   Permission::create(['name'=>'programacion.update'])->syncRoles([$role1,$role2]); */
        Permission::create(['name'=>'programacion.nivel'])->syncRoles([$role1,$role2]);

        /* Permisos para Matriculas */
        Permission::create(['name'=>'matricula.index'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name'=>'matricula.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'matricula.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'matricula.destroy'])->syncRoles([$role1,$role2]);

        /* Permisos para Reportes Variados */
        Permission::create(['name'=>'reportes.index'])->syncRoles([$role1,$role4]);

    }

}

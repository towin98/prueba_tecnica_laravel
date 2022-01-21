<?php

namespace Database\Seeders;

use App\Models\Permiso;
use App\Models\Rol;
use App\Models\roles_has_permisos;
use Illuminate\Database\Seeder;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [1 => 'Administrador', 2 => 'Revisor', 3 => 'Editor'];
        foreach ($roles as $key => $rol) {
            Rol::create([
                'id' => $key,
                'nombre' => $rol
            ]);
        }

        $permisos = [1 => 'Editar', 2 => 'Ver', 3 => 'Eliminar', 4 => 'Crear'];
        foreach ($permisos as $key => $permiso) {
            Permiso::create([
                'id' => $key,
                'nombre' => $permiso
            ]);
        }

        // Permisos que tiene el Administrador.
        foreach ($permisos as $key => $permiso) {
            roles_has_permisos::create([ 'id_rol' => 1, 'id_permiso' => $key ]);
        }

        // Permisos que tiene el revisor
        roles_has_permisos::create([ 'id_rol' => 2, 'id_permiso' => 1 ]);
        roles_has_permisos::create([ 'id_rol' => 2, 'id_permiso' => 2 ]);
        roles_has_permisos::create([ 'id_rol' => 2, 'id_permiso' => 4 ]);
    }
}

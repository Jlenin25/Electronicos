<?php

namespace Database\Seeders;

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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Trabajador']);

        /*Roles de tabla dashboard*/
        Permission::create(['name' => 'dashboard.index',
                            'description' => 'ver lista de dashboard'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'dashboard.create',
                            'description' => 'crear dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'dashboard.edit',
                            'description' => 'editar dashboard'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'dashboard.destroy',
                            'description' => 'eliminar dashboard'])->syncRoles([$role1]);

        /*Roles de tabla usuarios*/
        Permission::create(['name' => 'users.index',
                            'description' => 'ver lista de usuarios'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.create',
                            'description' => 'crear usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit',
                            'description' => 'editar usuarios'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.destroy',
                            'description' => 'eliminar usuarios'])->syncRoles([$role1]);

        /*Roles de tabla proveedores*/
        Permission::create(['name' => 'proveedores.index',
                            'description' => 'ver lista de proveedores'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'proveedores.create',
                            'description' => 'crear proveedores'])->syncRoles([$role1]);
        Permission::create(['name' => 'proveedores.edit',
                            'description' => 'editar proveedores'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'proveedores.destroy',
                            'description' => 'eliminar proveedores'])->syncRoles([$role1]);

        /*Roles de tabla logistica*/
        Permission::create(['name' => 'logistica.index',
                            'description' => 'ver lista de logistica'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'logistica.create',
                            'description' => 'crear logistica'])->syncRoles([$role1]);
        Permission::create(['name' => 'logistica.edit',
                            'description' => 'editar logistica'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'logistica.destroy',
                            'description' => 'eliminar logistica'])->syncRoles([$role1]);

        /*Roles de tabla almacen*/
        Permission::create(['name' => 'almacen.index',
                            'description' => 'ver lista de almacen'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'almacen.create',
                            'description' => 'crear almacen'])->syncRoles([$role1]);
        Permission::create(['name' => 'almacen.edit',
                            'description' => 'editar almacen'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'almacen.destroy',
                            'description' => 'eliminar almacen'])->syncRoles([$role1]);

        /*Roles de tabla operaciones*/
        Permission::create(['name' => 'operaciones.index',
                            'description' => 'ver lista de operaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'operaciones.create',
                            'description' => 'crear operaciones'])->syncRoles([$role1]);
        Permission::create(['name' => 'operaciones.edit',
                            'description' => 'editar operaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'operaciones.destroy',
                            'description' => 'eliminar operaciones'])->syncRoles([$role1]);


        /*Roles de tabla categorias*/
        Permission::create(['name' => 'categorias.index',
                            'description' => 'ver catergorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'categorias.create',
                            'description' => 'crear categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'categorias.edit',
                            'description' => 'editar categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'categorias.destroy',
                            'description' => 'eliminar categorias'])->syncRoles([$role1]);


        /*Roles de tabla productos*/
        Permission::create(['name' => 'productos.index',
                            'description' => 'ver productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'productos.create',
                            'description' => 'crear productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'productos.edit',
                            'description' => 'editar productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'productos.destroy',
                            'description' => 'eliminar productos'])->syncRoles([$role1]);

        /*Roles de tabla incidencias*/
        Permission::create(['name' => 'incidencias.index',
                            'description' => 'ver incidencias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'incidencias.create',
                            'description' => 'crear incidencias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'incidencias.edit',
                            'description' => 'editar incidencias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'incidencias.destroy',
                            'description' => 'eliminar incidencias'])->syncRoles([$role1]);


        /*Roles de tabla lista de roles*/
        Permission::create(['name' => 'roles.index',
                            'description' => 'ver roles'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'roles.create',
                            'description' => 'crear roles'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'roles.edit',
                            'description' => 'editar roles'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'eliminar roles'])->syncRoles([$role1]);

    }
}

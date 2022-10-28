<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importatr modelos
use App\Models\Empleado;
use App\Models\User;
// importando la libreria de roles
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
// libreria de Str para crear random()
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //hola soy la funcion principal aqui puedo llamara a varias funciones
    {
        //vamos a llamar a la funcion permisos donde estan alojados nuestros roles
        $this->permisos(); //hola soy una funcion me estas llamando?
        $this->CargaUser();
    }
    public function permisos(){

        // $role1 = Role::create(['name' => 'Super-admin']);
        // $role2 = Role::create(['name' => 'trabajador']);
        // $role3 = Role::create(['name' => 'cliente']);

        // //crea los permisos
        // Permission::create(['name' => 'cliente.index'])->syncRoles([ $role2]); // Ayuda a asignar mas de dos roles
        // Permission::create(['name' => 'cliente.create'])->syncRoles([$role2]);
        // Permission::create(['name' => 'cliente.edit'])->syncRoles([$role2]);
        // Permission::create(['name' => 'cliente.destroy'])->syncRoles([$role2]);

        // Permission::create(['name' => 'empleado.index'])->assignRole($role1); //assignRole solo permite asignar un ROL
        // Permission::create(['name' => 'empleado.create'])->assignRole($role1);
        // Permission::create(['name' => 'empleado.edit'])->assignRole($role1);
        // Permission::create(['name' => 'empleado.destroy'])->assignRole($role1);

        //primero voy a crear los nombres de mis roles
        $dev            = Role::create(['name' => 'dev']);
        $Admin          = Role::create(['name' => 'Administrador']);
        $ventas         = Role::create(['name' => 'ventas']);
        $ferreteria     = Role::create(['name' => 'ferreteria']);
        $repuestos      = Role::create(['name' => 'repuestos']);

        //luego voy a crear mis permisos: y cada permiso se le asigna un rol
        ////////////ADMIN
        Permission::create(['name' => 'admin'])->syncRoles([$dev,$Admin]);
        ////////////ROLES
        Permission::create(['name' => 'roles.index'])->syncRoles([$dev]);
        Permission::create(['name' => 'roles.creatit'])->syncRoles([$dev]);
        Permission::create(['name' => 'roles.destroy'])->syncRoles([$dev]);
        Permission::create(['name' => 'roles.edte'])->syncRoles([$dev]);
        ////////////EMPLEADOS
        Permission::create(['name' => 'empleados.index'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'empleados.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'empleados.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'empleados.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'empleados.pdf'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////PRODUCTOS
        Permission::create(['name' => 'productos.index'])->syncRoles([$dev,$Admin,$ventas,$ferreteria,$repuestos]);
        Permission::create(['name' => 'productos.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'productos.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'productos.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////CLIENTES
        Permission::create(['name' => 'cliente.index'])->syncRoles([$dev,$Admin,$ventas,$ferreteria,$repuestos]);
        Permission::create(['name' => 'cliente.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cliente.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cliente.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cliente.bitacora'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////DASHBOARD
        Permission::create(['name' => 'dashboard.index'])->syncRoles([$dev,$Admin,$ventas,$ferreteria,$repuestos]);
        Permission::create(['name' => 'dashboard.ventasdias'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'dashboard.ventasmes'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'dashboard.pagos'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'dashboard.cobros'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////NAVEGADOR
        Permission::create(['name' => 'navegador.buscador'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'navegador.dark'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'navegador.logout'])->syncRoles([$dev,$Admin,$ventas,$ferreteria,$repuestos]);
        ////////////VENTAS
        Permission::create(['name' => 'ventas.index'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'ventas.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'ventas.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'ventas.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////COTIZACION
        Permission::create(['name' => 'cotizacion.index'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cotizacion.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cotizacion.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'cotizacion.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////PROVEEDORES
        Permission::create(['name' => 'proveedores.index'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'proveedores.create'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'proveedores.edit'])->syncRoles([$dev,$Admin,$ventas]);
        Permission::create(['name' => 'proveedores.destroy'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////REPORTES
        Permission::create(['name' => 'reportes.index'])->syncRoles([$dev,$Admin,$ventas]);
        ////////////PRUEBAS
        Permission::create(['name' => 'pruebas'])->syncRoles([$dev]);

    }

    public function CargaUser()
    {
        $user = new User();
        $user->name = 'Micaela';
        $user->email = 'micaela@correo.com';
        $user->password =  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token =  Str::random(10);
        $user->assignRole('dev');
        //  $user->fecha_cambio_contra = date('Y-m-d');
        $user->save();

        $user = new User();
        $user->name = 'Fadua';
        $user->email = 'fadua@correo.com';
        $user->password =  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token =  Str::random(10);
        $user->assignRole('dev');
        //  $user->fecha_cambio_contra = date('Y-m-d');
        $user->save();

        $r = new Empleado();
        $r->nombre = 'Juan';
        $r->paterno = 'Padilla';
        $r->materno = 'Villarroel';
        $r->telefono =  70297978;
        $r->direccion =  'calle siempre viva';
        // $r->id_ambiente =  70297978;
        // $r->id_turno =  70297978;
        $r->id_usuario = '1';
        $r->save();
    }

}

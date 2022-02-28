<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name ='admin';
        $role->description='Adminitrador';
        $role->save();
        $role = new Role();
        $role->name ='usuario';
        $role->description='Cliente';
        $role->save();
        $role = new Role();
        $role->name ='encargado';
        $role->description='Encargado Tienda1';
        $role->save();
    }
}

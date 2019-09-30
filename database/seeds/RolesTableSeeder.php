<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Administrateur']);
        $role = Role::create(['name' => 'Modérateur']);
        $role = Role::create(['name' => 'Utilisateur']);
    }
}

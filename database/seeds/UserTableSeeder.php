<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_administrator = Role::where('name', 'Administrateur')->first();
        $role_moderator = Role::where('name', 'Modérateur')->first();
        $role_user = Role::where('name', 'Utilisateur')->first();


        factory(App\User::class, 10)->create()->each(function ($user) use ($role_administrator) {
            $user->assignRole($role_administrator);
          });
        
        factory(App\User::class, 20)->create()->each(function ($user) use ($role_moderator) {
            $user->assignRole($role_moderator);
          });
        

        factory(App\User::class, 70)->create()->each(function ($user) use ($role_user) {
            $user->assignRole($role_user);
          });
    }
}
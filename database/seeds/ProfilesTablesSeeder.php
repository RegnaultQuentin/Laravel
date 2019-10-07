<?php

use Illuminate\Database\Seeder;
use App\User;

class ProfilesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user){
            $user->profiles()->save(factory(App\Profile::class)->make());
        });
    }
}

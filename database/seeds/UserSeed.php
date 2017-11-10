<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        $user->assign('administrator');

        /*$tanki = User::create([
            'name' => 'tanki',
            'email' => 'tanki@admin.com',
            'password' => bcrypt('password')
        ]);
        $tanki->assign('admin');*/
    }
}

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

        $opt = User::create([
            'name' => 'optometrist',
            'email' => 'optometrist@admin.com',
            'password' => bcrypt('password')
        ]);
        $opt->assign('optometrist');

        $sales = User::create([
            'name' => 'sales',
            'email' => 'sales@admin.com',
            'password' => bcrypt('password')
        ]);
        $sales->assign('sales');
    }
}

<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //administrator
        Bouncer::allow('administrator')->to('users_manage');
        Bouncer::allow('administrator')->to('customers_manage');
        Bouncer::allow('administrator')->to('records_manage');
        Bouncer::allow('administrator')->to('view_records_manage');

        //optometrist
        Bouncer::allow('optometrist')->to('customers_manage');
        Bouncer::allow('optometrist')->to('records_manage');
        Bouncer::allow('optometrist')->to('view_records_manage');

        //sales
        Bouncer::allow('sales')->to('view_records_manage');
        
    }
}

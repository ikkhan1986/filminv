<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Admin::create([
            'name'      => 'Super Admin',
            'email'     => 'super_admin@inv.com',
            'password'  => bcrypt(12345678)
        ]);

        $admin->attachRole('super_admin');
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Can view and edit users',
        ]);
    
        DB::table('roles')->insert([
            'name' => 'employee',
            'display_name' => 'Employee',
            'description' => 'Can add books',
        ]);

        DB::table('roles')->insert([
            'name' => 'member',
            'display_name' => 'Member',
            'description' => 'Can borrow books',
        ]);
    }
}

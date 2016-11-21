<?php

use Illuminate\Database\Seeder;

class MembershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '5',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '6',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '7',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '8',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '9',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '10',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'days_membership' => '30',
            'user_id' => '11',
        ]);
    }
}

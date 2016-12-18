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
            'end_date' => Carbon\Carbon::parse('2016-11-10')->addMonth(1),
            'user_id' => '5',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-10-10',
            'end_date' => '2016-11-10',
            'user_id' => '5',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-10',
            'end_date' => '2017-01-10',
            'user_id' => '5',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '6',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '7',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '8',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '9',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '10',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-11-10',
            'end_date' => '2016-12-10',
            'user_id' => '11',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '12',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '13',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '14',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '15',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '16',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '17',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '18',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '19',
        ]);

        DB::table('memberships')->insert([
            'start_date' => '2016-12-02',
            'end_date' => '2017-01-02',
            'user_id' => '20',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book_user')->insert([
            'book_id' => '1',
            'user_id' => '5',
            'date_loaned' => '2016-11-15',
            'date_return' => '2016-12-15',
        ]);

        DB::table('book_user')->insert([
            'book_id' => '1',
            'user_id' => '6',
            'date_loaned' => '2016-11-15',
            'date_return' => '2016-12-15',
        ]);

        DB::table('book_user')->insert([
            'book_id' => '1',
            'user_id' => '7',
            'date_loaned' => '2016-11-15',
            'date_return' => '2016-12-15',
        ]);

        DB::table('book_user')->insert([
            'book_id' => '2',
            'user_id' => '5',
            'date_loaned' => '2016-11-15',
            'date_return' => '2016-12-15',
            'date_returned' => '2016-11-25',
        ]);

        DB::table('book_user')->insert([
            'book_id' => '2',
            'user_id' => '6',
            'date_loaned' => '2016-12-01',
            'date_return' => '2017-01-01',
        ]);

        DB::table('book_user')->insert([
            'book_id' => '3',
            'user_id' => '7',
            'date_loaned' => '2016-12-01',
            'date_return' => '2017-01-01',
        ]);
    }
}

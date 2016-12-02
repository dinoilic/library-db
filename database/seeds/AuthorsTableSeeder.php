<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert([
            'first_name' => 'Joanne',
            'last_name' => 'Rowling',
            'dob' => '1965-07-31',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'Agatha',
            'last_name' => 'Christie',
            'dob' => '1890-09-15',
            'dod' => '1976-01-12',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'Robert',
            'last_name' => 'Muchamore',
            'dob' => '1972-12-26',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'John',
            'last_name' => 'Green',
            'dob' => '1977-08-24',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'Miroslav',
            'last_name' => 'Krleža',
            'dob' => '1893-07-07',
            'dod' => '1981-12-29',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'George',
            'last_name' => 'Martin',
            'dob' => '1948-09-20',
        ]);

        DB::table('authors')->insert([
            'first_name' => 'John',
            'last_name' => 'Tolkien',
            'dob' => '1892-01-03',
            'dod' => '1973-09-02',
        ]);
    }
}

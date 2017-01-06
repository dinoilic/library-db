<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert([
            'name' => 'fiction',
            'display_name' => 'Fikcija',
        ]);

        DB::table('genres')->insert([
            'name' => 'comedy',
            'display_name' => 'Komedija',
        ]);

        DB::table('genres')->insert([
            'name' => 'drama',
            'display_name' => 'Drama',
        ]);

        DB::table('genres')->insert([
            'name' => 'crime',
            'display_name' => 'Kriminalistička drama',
        ]);

        DB::table('genres')->insert([
            'name' => 'fantasy',
            'display_name' => 'Fantastika',
        ]);

        DB::table('genres')->insert([
            'name' => 'horror',
            'display_name' => 'Horor',
        ]);

        DB::table('genres')->insert([
            'name' => 'science-fiction',
            'display_name' => 'Znanstvena fantastika',
        ]);

        DB::table('genres')->insert([
            'name' => 'realistic-fiction',
            'display_name' => 'Realistična fantastika',
        ]);

        DB::table('genres')->insert([
            'name' => 'short-story',
            'display_name' => 'Kratka priča',
        ]);

        DB::table('genres')->insert([
            'name' => 'contemporary',
            'display_name' => 'Moderna drama',
        ]);

        DB::table('genres')->insert([
            'name' => 'mystery',
            'display_name' => 'Misterija',
        ]);
    }
}

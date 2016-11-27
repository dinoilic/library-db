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
            'display_name' => 'Fiction',
        ]);

        DB::table('genres')->insert([
            'name' => 'comedy',
            'display_name' => 'Comedy',
        ]);

        DB::table('genres')->insert([
            'name' => 'drama',
            'display_name' => 'Drama',
        ]);

        DB::table('genres')->insert([
            'name' => 'crime',
            'display_name' => 'Crime/Detective',
        ]);

        DB::table('genres')->insert([
            'name' => 'fantasy',
            'display_name' => 'Fantasy',
        ]);

        DB::table('genres')->insert([
            'name' => 'horror',
            'display_name' => 'Horror',
        ]);

        DB::table('genres')->insert([
            'name' => 'science-fiction',
            'display_name' => 'Science Fiction',
        ]);

        DB::table('genres')->insert([
            'name' => 'realistic-fiction',
            'display_name' => 'Realistic Fiction',
        ]);

        DB::table('genres')->insert([
            'name' => 'short-story',
            'display_name' => 'Short Story',
        ]);

        DB::table('genres')->insert([
            'name' => 'contemporary',
            'display_name' => 'Contemporary',
        ]);

        DB::table('genres')->insert([
            'name' => 'mystery',
            'display_name' => 'Mystery',
        ]);
    }
}

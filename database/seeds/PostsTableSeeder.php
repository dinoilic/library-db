<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'post_title' => 'Vijest 1',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 2',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 3',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 4',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 5',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 6',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Vijest 7',
            'post_body' => 'Tekst',
            'author_id' => '1',
        ]);
    }
}

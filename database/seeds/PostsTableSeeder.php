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
    }
}

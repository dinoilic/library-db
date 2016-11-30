<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book 1
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Sorcerer\'s Stone',
            'isbn' => '9780439554930',
            'description' => 'Harry Potter\'s life is miserable. His parents are dead and he\'s stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he\'s a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry. After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry. Though Harry\'s first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it\'s his responsibility to prevent it from falling into evil hands. But doing so will bring him into contact with forces more terrifying than he ever could have imagined. Full of sympathetic characters, wildly imaginative situations, and countless exciting details, the first installment in the series assembles an unforgettable magical world and sets the stage for many high-stakes adventures to come.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '1',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '1',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '1',
        ]);

        // Book 2
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Chamber of Secrets',
            'isbn' => '9780439064866',
            'description' => 'The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he\'s packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike. And strike it does. For in Harry\'s second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor, Gilderoy Lockhart, a spirit named Moaning Myrtle who haunts the girls\' bathroom, and the unwanted attentions of Ron Weasley\'s younger sister, Ginny. But each of these seem minor annoyances when the real trouble begins, and someone, or something, starts turning Hogwarts students to stone. Could it be Draco Malfoy, a more poisonous rival than ever? Could it possibly be Hagrid, whose mysterious past is finally told? Or could it be the one everyone at Hogwarts most suspects: Harry Potter himself?',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '2',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '2',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '2',
        ]);

        // Book 3
        DB::table('books')->insert([
            'name' => 'The Casual Vacancy',
            'isbn' => '9780316228558',
            'description' => 'When Barry Fairbrother dies in his early forties, the town of Pagford is left in shock. Pagford is, seemingly, an English idyll, with a cobbled market square and an ancient abbey, but what lies behind the pretty façade is a town at war. Rich at war with poor, teenagers at war with their parents, wives at war with their husbands, teachers at war with their pupils ... Pagford is not what it first seems. And the empty seat left by Barry on the parish council soon becomes the catalyst for the biggest war the town has yet seen. Who will triumph in an election fraught with passion, duplicity and unexpected revelations?',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '3',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '3',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '10',
            'book_id' => '3',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '11',
            'book_id' => '3',
        ]);

        // Book 4
        DB::table('books')->insert([
            'name' => 'The Mysterious Affair at Styles',
            'isbn' => '9780060593582',
            'description' => 'Christie’s first published novel, The Mysterious Affair at Styles is notable for introducing many of the character types, plot twists, and red herrings that would become commonplace during the Golden Age of Detective Fiction. Set in a remote country manor with a small handful of suspects, The Mysterious Affair at Styles is the quintessential detective story and remains one of the most significant literary works in the mystery genre.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '2',
            'book_id' => '4',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '11',
            'book_id' => '4',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '4',
            'book_id' => '4',
        ]);
    }
}

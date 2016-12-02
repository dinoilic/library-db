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
            'name' => 'Harry Potter and the Prisoner of Azkaban',
            'isbn' => '9780439136365',
            'description' => 'Harry Potter is lucky to reach the age of thirteen, since he has already survived the murderous attacks of the feared Dark Lord on more than one occasion. But his hopes for a quiet term concentrating on Quidditch are dashed when a maniacal mass-murderer escapes from Azkaban, pursued by the soul-sucking Dementors who guard the prison. It\'s assumed that Hogwarts is the safest place for Harry to be. But is it a coincidence that he can feel eyes watching him in the dark, and should he be taking Professor Trelawney\'s ghoulish predictions seriously?',
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
            'genre_id' => '5',
            'book_id' => '3',
        ]);

        // Book 4
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Goblet of Fire',
            'isbn' => '9780439139601',
            'description' => 'Harry Potter is midway through both his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup with Hermione, Ron, and the Weasleys. He wants to dream about Cho Chang, his crush (and maybe do more than dream). He wants to find out about the mysterious event that supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn\'t happened for hundreds of years. He wants to be a normal, fourteen-year-old wizard. But unfortunately for Harry Potter, he\'s not normal - even by wizarding standards. And in his case, different can be deadly.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '4',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '4',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '4',
        ]);

        // Book 5
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Order of the Phoenix',
            'isbn' => '9780439358071',
            'description' => 'Harry Potter is due to start his fifth year at Hogwarts School of Witchcraft and Wizardry. His best friends Ron and Hermione have been very secretive all summer and he is desperate to get back to school and find out what has been going on. However, what Harry discovers is far more devastating than he could ever have expected. Suspense, secrets and thrilling action from the pen of J.K. Rowling ensure an electrifying adventure that is impossible to put down.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '5',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '5',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '5',
        ]);

        // Book 6
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Half-Blood Prince',
            'isbn' => '9780439785969',
            'description' => 'It is the middle of the summer, but there is an unseasonal mist pressing against the windowpanes. Harry Potter is waiting nervously in his bedroom at the Dursleys\' house in Privet Drive for a visit from Professor Dumbledore himself. One of the last times he saw the Headmaster was in a fierce one-to-one duel with Lord Voldemort, and Harry can\'t quite believe that Professor Dumbledore will actually appear at the Dursleys\' of all places. Why is the Professor coming to visit him now? What is it that cannot wait until Harry returns to Hogwarts in a few weeks\' time? Harry\'s sixth year at Hogwarts has already got off to an unusual start, as the worlds of Muggle and magic start to intertwine',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '6',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '6',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '6',
        ]);

        // Book 7
        DB::table('books')->insert([
            'name' => 'Harry Potter and the Deathly Hallows',
            'isbn' => '9780545010221',
            'description' => 'It\'s no longer safe for Harry at Hogwarts, so he and his best friends, Ron and Hermione, are on the run. Professor Dumbledore has given them clues about what they need to do to defeat the dark wizard, Lord Voldemort, once and for all, but it\'s up to them to figure out what these hints and suggestions really mean. Their cross-country odyssey has them searching desperately for the answers, while evading capture or death at every turn. At the same time, their friendship, fortitude, and sense of right and wrong are tested in ways they never could have imagined. The ultimate battle between good and evil that closes out this final chapter of the epic series takes place where Harry\'s Wizarding life began: at Hogwarts. The satisfying conclusion offers shocking last-minute twists, incredible acts of courage, powerful new forms of magic, and the resolution of many mysteries.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '7',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '7',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '7',
        ]);

        // Book 8
        DB::table('books')->insert([
            'name' => 'The Casual Vacancy',
            'isbn' => '9780316228558',
            'description' => 'When Barry Fairbrother dies in his early forties, the town of Pagford is left in shock. Pagford is, seemingly, an English idyll, with a cobbled market square and an ancient abbey, but what lies behind the pretty façade is a town at war. Rich at war with poor, teenagers at war with their parents, wives at war with their husbands, teachers at war with their pupils ... Pagford is not what it first seems. And the empty seat left by Barry on the parish council soon becomes the catalyst for the biggest war the town has yet seen. Who will triumph in an election fraught with passion, duplicity and unexpected revelations?',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '1',
            'book_id' => '8',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '1',
            'book_id' => '8',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '10',
            'book_id' => '8',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '11',
            'book_id' => '8',
        ]);

        // Book 9
        DB::table('books')->insert([
            'name' => 'The Mysterious Affair at Styles',
            'isbn' => '9780060593582',
            'description' => 'Christie’s first published novel, The Mysterious Affair at Styles is notable for introducing many of the character types, plot twists, and red herrings that would become commonplace during the Golden Age of Detective Fiction. Set in a remote country manor with a small handful of suspects, The Mysterious Affair at Styles is the quintessential detective story and remains one of the most significant literary works in the mystery genre.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '2',
            'book_id' => '9',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '11',
            'book_id' => '9',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '4',
            'book_id' => '9',
        ]);

        // Book 10
        DB::table('books')->insert([
            'name' => 'The Lord of the Rings:The Fellowship of the Ring',
            'isbn' => '9780618346257',
            'description' => 'Frodo Baggins knew the Ringwraiths were searching for him—and the Ring of Power he bore that would enable Sauron to destroy all that was good in Middle-earth. Now it was up to Frodo and his faithful servant Sam to carry the Ring to where it could be destroyed—in the very center of Sauron\'s dark kingdom.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '7',
            'book_id' => '10',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5', //treba promijenit genre_id
            'book_id' => '10',
        ]);

        // Book 11
        DB::table('books')->insert([
            'name' => 'The Lord of the Rings:The Two Towers',
            'isbn' => '9780618346264',
            'description' => 'The Fellowship was scattered. Some were bracing hopelessly for war against the ancient evil of Sauron. Some were contending with the treachery of the wizard Saruman. Only Frodo and Sam were left to take the accursed Ring of Power to be destroyed in Mordor–the dark Kingdom where Sauron was supreme. Their guide was Gollum, deceitful and lust-filled, slave to the corruption of the Ring. Thus continues the magnificent, bestselling tale of adventure begun in The Fellowship of the Ring, which reaches its soul-stirring climax in The Return of the King.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '7',
            'book_id' => '11',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '11',
        ]);

        // Book 12
        DB::table('books')->insert([
            'name' => 'The Lord of the Rings:The Return of the King',
            'isbn' => '9780345339737',
            'description' => 'The Companions of the Ring have become involved in separate adventures as the quest continues. Aragorn, revealed as the hidden heir of the ancient Kings of the West, joined with the Riders of Rohan against the forces of Isengard, and took part in the desperate victory of the Hornburg. Merry and Pippin, captured by Orcs, escaped into Fangorn Forest and there encountered the Ents. Gandalf returned, miraculously, and defeated the evil wizard, Saruman. Meanwhile, Sam and Frodo progressed towards Mordor to destroy the Ring, accompanied by SmEagol--Gollum, still obsessed by his  \'precious\'. After a battle with the giant spider, Shelob, Sam left his master for dead; but Frodo is still alive--in the hands of the Orcs. And all the time the armies of the Dark Lord are masing. J.R.R. Tolkien\'s great work of imaginative fiction has been labeled both a heroic romance and a classic fantasy fiction. By turns comic and homely, epic and diabolic, the narrative moves through countless changes of scene and character in an imaginary world which is totally convincing in its detail.',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '7',
            'book_id' => '12',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '12',
        ]);

        // Book 13
        DB::table('books')->insert([
            'name' => 'The Hobbit',
            'isbn' => '9780618260300',
            'description' => 'In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort. Written for J.R.R. Tolkien’s own children, The Hobbit met with instant critical acclaim when it was first published in 1937. Now recognized as a timeless classic, this introduction to the hobbit Bilbo Baggins, the wizard Gandalf, Gollum, and the spectacular world of Middle-earth recounts of the adventures of a reluctant hero, a powerful and dangerous ring, and the cruel dragon Smaug the Magnificent. The text in this 372-page paperback edition is based on that first published in Great Britain by Collins Modern Classics (1998), and includes a note on the text by Douglas A. Anderson (2001). Unforgettable!',
        ]);

        DB::table('author_book')->insert([
            'author_id' => '7',
            'book_id' => '13',
        ]);

        DB::table('book_genre')->insert([
            'genre_id' => '5',
            'book_id' => '13',
        ]);
    }
}

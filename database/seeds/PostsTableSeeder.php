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
            'post_title' => 'Sretni blagdani',
            'post_body' => 'Svi zaposlenici knjižnice žele Vam ugodne blagdane i vidimo se u 2017. godini po starom radnom vremenu!',
            'author_id' => '1',
            'created_at' => Carbon\Carbon::parse('2016-12-30'),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Novo radno vrijeme',
            'post_body' => 'Za vrijeme školskih praznika knjižnica će raditi po novom random vremenu kojeg možete pogledati u nastavku!',
            'author_id' => '2',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subDays(5),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Posuđene knjige',
            'post_body' => 'Dodana je nova opcija s kojom možete provjeriti koje knjige imate posuđene i jesu li vraćene!',
            'author_id' => '2',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subDays(10),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'NOVO! Nova izdanja knjiga!',
            'post_body' => 'Poštovani korisnici knjižnice, u ponudi su nove knjige, a od najpoznatijih naslova izdvajamo "Demistificirani GeoDjango" i posebno izdanje knjige "Čudesne karte i kako se po njima snaći" autorice J. K. Rowling',
            'author_id' => '1',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subDays(20),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Najpopularnije knjige mjeseca',
            'post_body' => 'Na vhru početne stranice možete saznati koje tri knjige su se posebno svidjele korisnicima knjižnice u tekućem mjesecu!',
            'author_id' => '2',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subDays(40),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Pregled dostupnih knjiga',
            'post_body' => 'S današnjim danom u rad je puštena nova opcija kojom možete provjeriti postoji li knjiga koju želite u našoj ponudi.',
            'author_id' => '1',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subDays(45),
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Nova stranica knjižnice',
            'post_body' => 'Dragi korisnici knjižnice! Od sada nas možete pratiti na našem novom web sjedištu koje je pušteno u rad danas u probnom periodu od mjesec dana.',
            'author_id' => '1',
            'created_at' => Carbon\Carbon::parse('2016-12-30')->subMonth(50),
        ]);
    }
}

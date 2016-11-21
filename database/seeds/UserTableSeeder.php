<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first_name' => 'Nediljko',
            'last_name' => 'Novosel',
            'email' => 'nediljko.novosel@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Vjenceslav',
            'last_name' => 'Ivanec',
            'email' => 'vjenceslav.ivanec@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Zdravko',
            'last_name' => 'Ćosić',
            'email' => 'zdravko.cosic@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Kažimir',
            'last_name' => 'Bačić',
            'email' => 'kazimir.bacic@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Teha',
            'last_name' => 'Barić',
            'email' => 'teha.baric@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Sunčica',
            'last_name' => 'Milić',
            'email' => 'suncica.milic@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Dušanka',
            'last_name' => 'Vučković',
            'email' => 'dusanka.vuckovic@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Slavoljub',
            'last_name' => 'Poljak',
            'email' => 'slavoljub.poljak@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Štefica',
            'last_name' => 'Jurišić',
            'email' => 'stefica.jurisic@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Grubiša',
            'last_name' => 'Stipanov',
            'email' => 'grubisa.stipanov@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Božidarka',
            'last_name' => 'Dujmović',
            'email' => 'bozidarka.dujmovic@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}

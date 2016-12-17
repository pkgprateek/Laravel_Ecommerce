<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'    => 'glassoadmin',
            'email'       => 'admin@glasso.com',
            'password'    => Hash::make('12345678'),
            'verified'    => 1,
            'admin'       => 1,
        ]);

        DB::table('users')->insert([
            'username'    => 'test',
            'email'       => 'test@hotmail.com',
            'password'    => Hash::make('test'),
            'verified'    => 1,
            'admin'       => 1,
        ]);

        DB::table('users')->insert([
            'username'    => 'Sanket',
            'email'       => 'sanket@gmail.com',
            'password'    => Hash::make('d1erere66'),
            'verified'    => 1,
            'admin'       => 0,
        ]);

        DB::table('users')->insert([
            'username'    => 'Anubhav',
            'email'       => 'anibhav@gmail.com',
            'password'    => Hash::make(''),
            'verified'    => 1,
            'admin'       => 0,
        ]);

        DB::table('users')->insert([
            'username'    => 'jenny123',
            'email'       => 'jenney@hotmail.com',
            'password'    => Hash::make('tty31633'),
            'verified'    => 1,
            'admin'       => 0,
        ]);

        DB::table('users')->insert([
            'username'    => 'alexander_theGreat',
            'email'       => 'alexk@hotmail.com',
            'password'    => Hash::make('tyty33133'),
            'verified'    => 1,
            'admin'       => 0,
        ]);
    }
}

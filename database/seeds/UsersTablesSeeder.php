<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'Rodrigo Ruy Oliveira',
            'email'          => 'rro.oliveira@gmail.com',
            'password'       => Hash::make('123456'),
            'remember_token' => Str::random(10)
        ]);
    }
}

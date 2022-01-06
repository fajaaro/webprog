<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(CountrySeeder::class);
    }
}

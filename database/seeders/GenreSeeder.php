<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = ['Simulation', 'Puzzle', 'Sports', 'Action', 'Role-Playing', 'Strategy', 'Horror', 'Adventure'];

        foreach ($genres as $g) {
            $genre = new Genre();
            $genre->name = $g;
            $genre->save();
        }
    }
}

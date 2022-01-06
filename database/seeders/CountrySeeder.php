<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $jsonCountries = File::get(database_path('json/countries.json'));
        $countries = collect(json_decode($jsonCountries));

        foreach ($countries as $country) {
            $c = new Country();
            $c->name = ucwords($country->name);
            $c->code = strtoupper($country->code);
            $c->save();
        }
    }
}

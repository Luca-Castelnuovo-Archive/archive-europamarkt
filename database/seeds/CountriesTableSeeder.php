<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Country::create([
            'name' => 'The Netherlands',
            'code' => 'nl_NL',
        ]);

        Country::create([
            'name' => 'Belgium',
            'code' => 'nl_BE',
        ]);

        Country::create([
            'name' => 'France',
            'code' => 'fr_FR',
        ]);

        Country::create([
            'name' => 'Germany',
            'code' => 'de_DE',
        ]);
    }
}

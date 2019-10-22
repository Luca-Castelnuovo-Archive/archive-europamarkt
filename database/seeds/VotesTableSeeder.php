<?php

use App\Models\Vote;
use Illuminate\Database\Seeder;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Vote::create([
            'fingerprint' => '5MYTwf43NWnhowuivoTM',
            'country_code' => 'nl_BE',
        ]);

        Vote::create([
            'fingerprint' => '43NWnhowuivoTM5MYTwf',
            'country_code' => 'nl_NL',
        ]);

        Vote::create([
            'fingerprint' => '5MYTfw43NWnhowuivoTM',
            'country_code' => 'nl_NL',
        ]);

        Vote::create([
            'fingerprint' => '5MYTw439NWnhowuivoTM',
            'country_code' => 'nl_NL',
        ]);
    }
}

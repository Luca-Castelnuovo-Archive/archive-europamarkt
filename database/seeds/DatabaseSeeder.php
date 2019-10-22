<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call('CountriesTableSeeder');
        $this->call('VotesTableSeeder');
    }
}

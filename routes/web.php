<?php

use App\Models\Country;
use App\Models\Vote;
use Illuminate\Http\Request;

$router->group(['middleware' => 'ratelimit:120,60'], function () use ($router) {
    $router->get('', function () {
        $countries = Country::all();

        foreach ($countries as $country) {
            $votes = $country->votes()->get();
            $country->vote_count = count($votes);
        }

        return $countries;
    });

    $router->post('', function (Request $request) {
        $this->validate($request, [
            'fingerprint' => 'required|string|unique:votes,fingerprint',
            'country_code' => 'required|string|exists:countries,code',
        ]);

        Vote::create([
            'fingerprint' => $request->get('fingerprint'),
            'country_code' => $request->get('country_code'),
        ]);

        return 'vote created';
    });
});

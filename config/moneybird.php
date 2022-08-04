<?php

return [

    'redirect_uri' => env('MONEYBIRD_REDIRECT_URI', 'urn:ietf:wg:oauth:2.0:oob'),

    'client_id' => env('MONEYBIRD_CLIENT_ID'),

    'client_secret' => env('MONEYBIRD_CLIENT_SECRET'),

    'authorization_code' => env('MONEYBIRD_AUTHORIZATION_CODE'),

    'access_token' => env('MONEYBIRD_ACCESS_TOKEN'),

    'administration_id' => env('MONEYBIRD_ADMINISTRATION_ID'),

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '341307871528372', //Facebook API
        'client_secret' => '3f9cd514ef5bb1bdec74b7cf2512dfd4', //Facebook Secret
        'redirect' => 'https://cmsecom2.idtest.work/login/facebook/callback',
     ],

     'google' => [
        'client_id' => 'af54e6bae9a4edfc6cbb',
        'client_secret' => '95afc7b40e6aca6419a7623c34bb6d86cb2ac',
        'redirect' => 'http://laravel.localhost/login/github/callback',
     ],

     'line' => [
        'client_id' => '1655673015',
        'client_secret' =>'9df2e9c970c7d8d131cd22a6487bcee4',
        'redirect' => 'https://cmsecom2.idtest.work/login/line/callback',
    ],

];

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
        'client_id' => '347262810903545', //Facebook API
        'client_secret' => '88f99511d0ab8c754a91106b8c38b854', //Facebook Secret
        'redirect' => 'http://laravel.localhost/login/facebook/callback',
     ],

     'google' => [
        'client_id' => 'af54e6bae9a4edfc6cbb',
        'client_secret' => '95afc7b40e6aca6419a7623c34bb6d86cb2ac',
        'redirect' => 'http://laravel.localhost/login/github/callback',
     ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'facebook' => [
        'client_id' => '838761882978452',
        'client_secret' => '7ad3b789eb51de7404251cf310d10a8e',
        'redirect' => 'http://localhost/socialite/public/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '888631509360-2vnkqaotdah77j50mr4f4bdr54ot9fp6.apps.googleusercontent.com',
        'client_secret' => 'BBXq91DK9LpoIFNwHSC2xIkd',
        'redirect' => 'http://localhost/socialite/public/login/google/callback',
    ],


    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];

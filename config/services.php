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
        'domain'   => env(key: 'MAILGUN_DOMAIN'),
        'secret'   => env(key: 'MAILGUN_SECRET'),
        'endpoint' => env(key: 'MAILGUN_ENDPOINT', default: 'api.mailgun.net'),
        'scheme'   => 'https',
    ],

    'postmark' => [
        'token' => env(key: 'POSTMARK_TOKEN'),
    ],
];

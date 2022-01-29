<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Zoom Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may give zoom api credentials
    | This package use zoom JWT authentication
    | For more information to create check zoom documentation
    |
    */
    'zoom_api_key' => env('ZOOM_API_KEY', ''),
    'zoom_api_secret' => env('ZOOM_API_SECRET', ''),
    'zoom_api_email' => env('ZOOM_API_EMAIL', ''),
];

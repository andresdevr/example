<?php



return [


    /*
    |--------------------------------------------------------------------------
    | Endpoint
    |--------------------------------------------------------------------------
    |
    | This is the base uri where the syscom services 
    | makes request to get authorization and resources
    |
    */
    "endpoint" => env('SYSCOM_ENDPOINT', 'https://developers.syscom.mx'),

    /*
    |--------------------------------------------------------------------------
    | Client id
    |--------------------------------------------------------------------------
    |
    | This is the client id used to authorize the first 
    | request
    |
    */
    "client_id" => env('SYSCOM_CLIENT_ID'),


    /*
    |--------------------------------------------------------------------------
    | Client secret
    |--------------------------------------------------------------------------
    |
    | This is the client id used to authorize the first
    | request
    |
    */
    "client_secret" => env('SYSCOM_CLIENT_SECRET'),


    /*
    |--------------------------------------------------------------------------
    | Client secret
    |--------------------------------------------------------------------------
    |
    | this is the method through the package gain Access Tokens and 
    | by which you grant limited access to the
    | resources to another entity without exposing credentials. 
    |
    */
    "grant_type" => env('SYSCOM_GRANT_TYPE', 'client_credentials'),



    /*
    |--------------------------------------------------------------------------
    | Client secret
    |--------------------------------------------------------------------------
    |
    | this is the name where the syscom's token is
    | saved in the cache
    |
    */
    "cache_key" => env('SYSCOM_CACHE_KEY', 'syscom.token')


];
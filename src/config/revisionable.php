<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Revision Model
    |--------------------------------------------------------------------------
    */
    'model' => Venturecraft\Revisionable\Revision::class,

    'additional_fields' => [],

    'db_connection' => env('LOGS_DB_CONNECTION'),

];

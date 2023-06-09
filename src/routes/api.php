<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Book
    Route::apiResource('books', 'BookApiController');

    // PasienRumahSakit
    Route::apiResource('pasien_rumah_sakit', 'PasienRumahSakitApiController');
});

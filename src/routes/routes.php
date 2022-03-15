<?php

use \Illuminate\Support\Facades\Route;

Route::prefix('qyb')->namespace(__DIR__ . '../Controllers')->group(function () {

    Route::get('test', __DIR__ . '../Controllers/indexController@index');

});

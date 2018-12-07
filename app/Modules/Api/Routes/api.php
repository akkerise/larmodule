<?php
Route::group(['module'=>'Api', 'prefix' => 'api', 'namespace' => 'App\Modules\Api\Controllers'], function() {
        Route::get('', 'ApiController@index');
    }
);

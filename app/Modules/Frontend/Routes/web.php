<?php
Route::group(['module'=>'Frontend', 'namespace' => 'App\Modules\Frontend\Controllers'], function() {
        Route::get('/', 'FrontendController@index');
    }
);

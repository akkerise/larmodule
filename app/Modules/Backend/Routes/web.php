<?php
Route::group(['module'=>'Backend', 'prefix' => 'backend', 'namespace' => 'App\Modules\Backend\Controllers'], function() {
        Route::get('', 'BackendController@index');
    }
);

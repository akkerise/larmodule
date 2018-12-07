<?php
Route::group(['module'=>'Backend', 'namespace' => 'App\Modules\Backend\Controllers'], function() {
        Route::get('backend', 'BackendController@index');
    }
);

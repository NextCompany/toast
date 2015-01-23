<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin'], function() {

	Route::get('/', [
		'uses' => 'Nextcompany\Toast\DashboardController@index',
		'as'   => 'toast.admin.root'
	]);

});

?>
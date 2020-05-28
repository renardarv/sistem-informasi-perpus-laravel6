<?php

Route::get('/', 'HomeController@index')->name('dashboard'); // untuk menghilangkan Admin\\ pada Admin\\HomeController maka harus menambahkan "\Admin" pada mapAdminRoute function di traffic namespace di RouteServiceProvider


<?php

  // Language switch Route
  Route::get('locale/{locale}',function ($locale){ session()->put('locale', $locale); return redirect()->back(); })->name('locale');

  

  Auth::routes([
      // 'register' => false,
      // 'reset' => false,
      // 'verify' => false,
    ]);

  Route::get('/', 'HomeController@index')->name('home');


  Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {

      Route::get('/', 'HomeController@index')->name('home');

      Route::resource('content', 'ContentController');

  });


<?php

  // Language switch Route
  Route::get('locale/{locale}',function ($locale){ session()->put('locale', $locale); return redirect()->back(); })->name('locale');

  

  Auth::routes([
      // 'register' => false,
      // 'reset' => false,
      // 'verify' => false,
    ]);

  Route::get('/', 'HomeController@index')->name('home');

  // block about us
  Route::group(['namespace' => 'Frontend'], function () {
    Route::get('about-us', 'AboutUsController@index')->name('about-us');
    
    Route::get('contact-us', 'ContanUsController@index')->name('contact-us');

    Route::get('project_category', 'ProjectCategoryController@index')->name('project_category');
    Route::get('activity_category', 'ProjectCategoryController@index')->name('activity_category');
  
  });

  // block project
  Route::group(['prefix' => 'project', 'as' => 'project.','namespace' => 'Frontend'], function () {
    Route::get('mujammak', 'ProjectController@index')->name('mujammak');
    Route::get('halaqah', 'ProjectController@halaqah')->name('halaqah');
    Route::get('primary-school', 'ProjectController@primaryschool')->name('primary-school');
  });

  Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('main_menu', 'MainMenuController')->except(['show']);
    Route::resource('sub_menu', 'SubMenuController')->except(['show']);
    // Route::resource('extra_menu', 'ExtraMenuController');

    Route::resource('config', 'ConfigController');
    Route::resource('abou_us', 'AboutUsController');

    Route::resource('slide_show', 'SlideShowController')->except(['show']);
    Route::put('slide_show/{slide_show}/update_image', 'SlideShowController@update_image')->name('slide_show.update_image');

    Route::resource('documents', 'DocumentController')->except(['show']);

    Route::resource('sub_menu', 'SubMenuController')->except(['show']);
    Route::resource('partner', 'PartnerController')->except(['show']);

    Route::resource('project_category', 'ProjectCategoryController');
    Route::resource('project', 'ProjectController');
    Route::put('project/{project}/update_image', 'ProjectController@update_image')->name('project.update_image');

    Route::resource('activity_category', 'ActivityCategoryController');
    Route::resource('activity', 'ActivityController');
    Route::put('activity/{activity}/update_image', 'ActivityController@update_image')->name('activity.update_image');
    
    Route::resource('website-config', 'ConfigController');
    
    Route::get('donation', 'DonationController@index')->name('donation.index');
    Route::put('donation/update', 'DonationController@update')->name('donation.update');

  });


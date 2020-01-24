<?php

  // Language switch Route
  Route::get('locale/{locale}',function ($locale){ session()->put('locale', $locale); return redirect()->back(); })->name('locale');

  

  Auth::routes([
      // 'register' => false,
      // 'reset' => false,
      // 'verify' => false,
    ]);

  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/home', 'HomeController@index')->name('home');

  // block about us
  Route::group(['namespace' => 'Frontend'], function () {
    
    Route::get('about-us', 'AboutUsController@index')->name('about-us');
    
    Route::get('contact_us', 'ContanUsController@index')->name('contact-us');


    Route::get('document/{document}', 'DocumentController@show')->name('document.show');
  
  });

  // block project
  Route::group(['prefix' => 'project', 'as' => 'project.','namespace' => 'Frontend'], function () {
    Route::get('{project}', 'ProjectController@getProjectDetail')->name('detail');
    Route::get('project_category/{project_category}', 'ProjectController@project_category')->name('project_category');
  });

  // block Activity
  Route::group(['prefix' => 'activity', 'as' => 'activity.','namespace' => 'Frontend'], function () {
    Route::get('{activity}', 'activityController@getactivityDetail')->name('detail');
    Route::get('activity_category/{activity_category}', 'activityController@activity_category')->name('activity_category');
  });

  Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('main_menu', 'MainMenuController')->except(['show']);
    Route::resource('sub_menu', 'SubMenuController')->except(['show']);
    Route::resource('sub_sub_menu', 'SubSubMenuController')->except(['show']);
    // Route::resource('extra_menu', 'ExtraMenuController');

    Route::resource('config', 'ConfigController');

    Route::resource('slide_show', 'SlideShowController')->except(['show']);
    Route::put('slide_show/{slide_show}/update_image', 'SlideShowController@update_image')->name('slide_show.update_image');

    Route::resource('documents', 'DocumentController');

    Route::resource('sub_menu', 'SubMenuController')->except(['show']);
    Route::resource('partner', 'PartnerController')->except(['show']);

    Route::resource('project_category', 'ProjectCategoryController');
    Route::resource('project', 'ProjectController');
    Route::put('project/{project}/update_image', 'ProjectController@update_image')->name('project.update_image');

    Route::resource('activity_category', 'ActivityCategoryController');
    Route::resource('activity', 'ActivityController');
    Route::put('activity/{activity}/update_image', 'ActivityController@update_image')->name('activity.update_image');
    
    
    Route::resource('about_us', 'AboutUsController');

    Route::resource('website-config', 'ConfigController');
    Route::put('config/{config}/sidebar_right', 'ConfigController@Sidebar_Right')->name('config.sidebar_right');
    
    
    Route::get('donation', 'DonationController@index')->name('donation.index');
    Route::put('donation/update', 'DonationController@update')->name('donation.update');

        
    // Name Space admin/
    Route::put('user/updatePassword/{user}', 'UserController@updatePassword')->name('user.updatePassword');
    Route::put('user/updateInfo/{user}', 'UserController@updateInfo')->name('user.updateInfo');
    Route::put('user/updateImage/{user}', 'UserController@updateImage')->name('user.updateImage');
    Route::resource('user', 'UserController');
    Route::get('user/image/{user}', 'UserController@image')->name('user.image');
    Route::post('user/password_confirm', 'UserController@password_confirm')->name('user.password_confirm');

  });


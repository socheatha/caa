<?php

  // Language switch Route
  Route::get('locale/{locale}',function ($locale){ session()->put('locale', $locale); return redirect()->back(); })->name('locale');

  

  Auth::routes([
      // 'register' => false,
      // 'reset' => false,
      // 'verify' => false,
    ]);

  Route::get('/', 'HomeController@index2')->name('home');
  Route::get('/home-2', 'HomeController@index2')->name('home-2');

  // block about us
  Route::group(['namespace' => 'Frontend'], function () {
    Route::get('about-us', 'AboutUsController@index')->name('about-us');
    
    Route::get('contact-us', 'ContanUsController@index')->name('contact-us');
  
  });

  // block project
  Route::group(['prefix' => 'project', 'as' => 'project.','namespace' => 'Frontend'], function () {
    Route::get('mujammak', 'ProjectController@index')->name('mujammak');
    Route::get('halaqah', 'ProjectController@halaqah')->name('halaqah');
    Route::get('primary-school', 'ProjectController@primaryschool')->name('primary-school');
  });

  Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('main-menu', 'MainMenuController');
    Route::resource('sub-menu', 'SubMenuController');
    Route::resource('other-menu', 'OtherMenuController');

    Route::resource('config', 'ConfigController');
    Route::resource('abou-us', 'SubMenuController');
    Route::resource('slide-shows', 'SlideShowController');
    Route::resource('documents', 'SubMenuController');
    Route::resource('partners', 'PartnersController');

    Route::resource('project-categories', 'ProjectCategoryController');
    Route::resource('projects', 'ProjectsController');

    Route::resource('activity-categories', 'ActivityCategoryController');
    Route::resource('activities', 'ActivitiesController');


  });


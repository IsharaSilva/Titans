<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
// Unauthenticated group 
 

		 

		 
 	

	 

	 
 
    
    // Render search books panel
    Route::get('/book', array(
        'as' => 'search-book',
        'uses' => 'BooksController@searchBook'
    ));    
	


// Main books Controlller left public so that it could be used without logging in too
Route::resource('/books', 'BooksController');

 

	// Render Add Books panel
    Route::get('/add-books', array(
        'as' => 'add-books',
        'uses' => 'BooksController@renderAddBooks'
	));

	Route::get('/add-book-category', array(
        'as' => 'add-book-category',
        'uses' => 'BooksController@renderAddBookCategory'
	));
	
	Route::post('/bookcategory', 'BooksController@BookCategoryStore')->name('bookcategory.store');
	

	// Render All Books panel
    Route::get('/all-books', array(
        'as' => 'all-books',
        'uses' => 'BooksController@renderAllBooks'
	));
	
	Route::get('/bookBycategory/{cat_id}', array(
        'as' => 'bookBycategory',
        'uses' => 'BooksController@BookByCategory'
    ));
    Route::get('/registered-students', array(
        'as' => 'registered-students',
        'uses' => 'StudentController@renderStudents'
    ));

    // Render students approval panel
    Route::get('/students-for-approval', array(
        'as' => 'students-for-approval',
        'uses' => 'StudentController@renderApprovalStudents'
	));
	
	  // Render students approval panel
	  Route::get('/settings', array(
        'as' => 'settings',
        'uses' => 'StudentController@Setting'
	));
	
	  // Render students approval panel
	  Route::post('/setting', array(
        'as' => 'settings.store',
        'uses' => 'StudentController@StoreSetting'
    ));

    // Main students Controlller resource
	Route::resource('/student', 'StudentController');
	
	Route::post('/studentByattribute', array(
        'as' => 'studentByattribute',
        'uses' => 'StudentController@StudentByAttribute'
    ));

	 
<?php
/**
* Sites routes
*/


Route::group(['namespace' => 'Site'], function () {

// 	Route::get('/', function () {
//     return view('welcome');
// });

  /**
    *  Auth routes
    */
    Route::group(['prefix'=>'auth' , 'namespace' => 'Auth'],function(){

    	Route::get('/','AuthController@getIndex')
    	->name('site.auth.index');
    	Route::post('login','AuthController@postLogin')
    	->name('site.auth.login');
    	Route::post('register', 'AuthController@postRegister')
    	->name('site.auth.register');
    	Route::get('logout', 'AuthController@getLogout')
    	->name('site.auth.logout');
    	Route::get('forget-password','AuthController@getRecoverPassword')
    	->name('site.auth.forget-password');


    });


    /**
    *  Home routes
    */
    Route::get('/', 'HomeController@getIndex')->name('site.index');

    // /**
    // *  About routes
    // */
    // Route::group(['prefix'=>'about'],function(){
    //     Route::get('/', 'AboutController@getIndex')->name('site.about.index');
    // });

    // /**
    // *  Info routes
    // */
    // Route::group(['prefix'=>'info'],function(){
    //     Route::get('/{slug}', 'InfoController@getIndex')->name('site.infos.index');
    // });

    // /**
    // *  Search routes
    // */
    // Route::group(['prefix'=>'search'],function(){
    //     Route::get('/', 'SearchController@getIndex')->name('site.search.index');
    //     Route::get('/latest-offers', 'SearchController@getLatestOffers')->name('site.search.offers');
    // });



    // /**
    // *  Contact routes
    // */
    // Route::group(['prefix'=>'contact'],function(){
    //     Route::get('/', 'ContactController@getIndex')->name('site.contact.index');
    //     Route::post('/subscribe', 'ContactController@postSubscribe')->name('site.contact.subscribe');
    //     Route::post('/send', 'ContactController@postSend')->name('site.contact.send');
    // });


    /**
    *  Category routes
    */
    Route::group(['prefix'=>'category'],function(){
        Route::get('/{slug}', 'CategoryController@getIndex')->name('site.category.index');
    });


  /**
    *  course routes
    */
    Route::group(['prefix'=>'course'],function(){
        Route::get('/{slug}', 'CourseController@getIndex')->name('site.course.index');
        Route::get('/join/{id}', 'CourseController@getJoin');
        Route::post('/comment', 'CourseController@postComment');
    });



     Route::resource('instructor', 'Instructorontroller');
    Route::resource('article', 'ArticleController');

      /**
    *  Category routes
    */
    Route::group(['prefix'=>'instructor'],function(){
        Route::get('/{slug}', 'Instructorontroller@getIndex')->name('site.instructor.index');
        Route::post('/comment', 'Instructorontroller@postComment');
    });







});
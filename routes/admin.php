<?php
/**
* Admin Panel Routes
*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    /**
    * Authentication routes
    */
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/', 'AuthController@getIndex');
        Route::get('/login', 'AuthController@getIndex');
        Route::get('/logout', 'AuthController@getLogout');
        Route::get('/recover-password', 'AuthController@getRecoverPassword');
        Route::get('/change-password/{hash}', 'AuthController@getChangePassword');
        Route::post('/recover-password', 'AuthController@postRecoverPassword');
        Route::post('/change-password', 'AuthController@postChangePassword');
        Route::post('/login', 'AuthController@postLogin');
    });

    /**
    * Private Routes
    */
    Route::group(['middleware' => 'auth.admin'], function() {

        /**
        * Users Routes
        */
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UsersController@getIndex');
            Route::get('/profile', 'UsersController@getProfile');
            Route::get('/delete/{id?}', 'UsersController@getDelete');
            Route::post('/profile', 'UsersController@postProfile');
            Route::post('/add', 'UsersController@postAdd');
            Route::post('/info/{id}', 'UsersController@postInfo');
            Route::post('/edit', 'UsersController@postEdit');
        });

     /**
        * Users Routes
        */
        Route::group(['prefix' => 'instructor'], function () {
            Route::get('/', 'InstructorController@getIndex');
            Route::get('/profile', 'InstructorController@getProfile');
            Route::get('/delete/{id?}', 'InstructorController@getDelete');
            Route::post('/profile', 'InstructorController@postProfile');
            Route::post('/add', 'InstructorController@postAdd');
            Route::post('/info/{id}', 'InstructorController@postInfo');
            Route::post('/edit', 'InstructorController@postEdit');
        });

        /**
        * Category route
        */
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/{type}', 'CategoryController@getIndex')->name('admin.categories.index');
            Route::post('info/{id}', 'CategoryController@postInfo')->name('admin.categories.info');
            Route::post('/edit/{type}/{id}', 'CategoryController@postEdit')->name('admin.categories.edit');
            Route::post('/change/{type}/{id}', 'CategoryController@postChange')->name('admin.categories.change');
            Route::post('/add/{type}', 'CategoryController@postAdd')->name('admin.categories.add');
            Route::get('/delete/{id}','CategoryController@getDelete')->name('admin.categories.delete');
        });

        /**
        * cources Routes
        */
        Route::group(['prefix' => 'cources'], function () {
            Route::get('/', 'CourseController@getIndex');
            Route::get('/edit', 'CourseController@getEdit');
            Route::get('/delete/{id?}', 'CourseController@getDelete');
            Route::post('/edit', 'CourseController@postEdit');
            Route::get('/add', 'CourseController@getAdd')->name('admin.courses.add');
            Route::post('/add', 'CourseController@postAdd');
            Route::post('/info/{id}', 'CourseController@postInfo');
            Route::get('/edit', 'CourseController@getEdit');
            Route::post('/edit', 'CourseController@postEdit');
        });






            /**
        * Home Routes
        */
        Route::get('/', function() {
            return view('admin.pages.dashboard');
        });


        /**
        * Public Admin Panel Settings
        */
        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', 'SettingsController@getIndex');
            Route::post('/edit', 'SettingsController@postEdit');
        });


        /**
        * contacts routes
        */
        Route::group(['prefix' => 'contacts'], function () {
            Route::get('/', 'ContactController@getIndex')->name('admin.contacts.index');
            Route::get('view/{id}', 'ContactController@getView')->name('admin.contacts.view');
            Route::get('/main', 'ContactController@getMain')->name('admin.contacts.main');
            Route::post('/main', 'ContactController@postMain');
            Route::post('/send', 'ContactController@postSend')->name('admin.contacts.send');
            Route::post('/action/{action}', 'ContactController@postAction');
            Route::get('/delete/{id}', 'ContactController@getDelete')->name('admin.contacts.delete');
            Route::get('/filter/{filter}', 'ContactController@getFilter');
            Route::get('/search/{q?}', 'ContactController@getSearch');
        });







        
    });

});

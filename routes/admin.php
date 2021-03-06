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
                * lesson routes
                */
            Route::group(['prefix' => 'lesson'], function () {
                Route::get('/{id}','LessonController@getIndex')->name('admin.lesson.index');
                Route::get('/add/{course_id?}','LessonController@getAdd')->name('admin.lesson.addlesson');
                Route::post('add','LessonController@postAdd')->name('admin.lesson.postaddlesson');;
                Route::get('edit/{id}','LessonController@getEdit')->name('admin.lesson.edit');
                Route::post('edit/{id}','LessonController@postEdit');
                Route::post('/action/{action}', 'LessonController@postAction');
                Route::get('/delete/{id}','LessonController@getDelete')->name('admin.lesson.delete');
                Route::get('/filter/{filter}', 'LessonController@getFilter');
                Route::get('/search/{q?}', 'LessonController@getSearch');
            });

                /**
                * lesson routes
                */
            Route::group(['prefix' => 'test'], function () {
                Route::get('/{id}','TestController@getIndex')->name('admin.test.index');
                Route::get('/add/{course_id?}','TestController@getAdd')->name('admin.test.add');
                Route::post('add','TestController@postAdd')->name('admin.test.postaddTest');;
               
                Route::post('/action/{action}', 'TestController@postAction');
                Route::get('/delete/{id}','TestController@getDelete')->name('admin.test.delete');
                Route::get('/filter/{filter}', 'TestController@getFilter');
                Route::get('/search/{q?}', 'TestController@getSearch');

                Route::get('/info/{id}', 'TestController@postInfo');
                Route::post('/edit', 'TestController@postEdit')->name('admin.test.edit');

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
        // Route::group(['prefix' => 'categories'], function () {
        //     Route::get('/{type}', 'CategoryController@getIndex')->name('admin.categories.index');
        //     Route::post('info/{id}', 'CategoryController@postInfo')->name('admin.categories.info');
        //     Route::post('/edit/{type}/{id}', 'CategoryController@postEdit')->name('admin.categories.edit');
        //     Route::post('/change/{type}/{id}', 'CategoryController@postChange')->name('admin.categories.change');
        //     Route::post('/add/{type}', 'CategoryController@postAdd')->name('admin.categories.add');
        //     Route::get('/delete/{id}','CategoryController@getDelete')->name('admin.categories.delete');
        // });


           /**
        * Category route
        */
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/{type}', 'CourseCategoryController@getIndex')->name('admin.categories.index');
            Route::post('info/{id}', 'CourseCategoryController@postInfo')->name('admin.categories.info');
            Route::post('/edit/{type}/{id}', 'CourseCategoryController@postEdit')->name('admin.categories.edit');
            Route::post('/change/{type}/{id}', 'CourseCategoryController@postChange')->name('admin.categories.change');
            Route::post('/add/{type}', 'CourseCategoryController@postAdd')->name('admin.categories.add');
            Route::get('/delete/{id}','CourseCategoryController@getDelete')->name('admin.categories.delete');
        });

        /**
        * cources Routes
        */
        Route::group(['prefix' => 'cources'], function () {
            Route::get('/', 'CourseController@getIndex');
             Route::get('/order', 'CourseController@getOrder');
            Route::get('/edit', 'CourseController@getEdit');
            Route::get('/delete/{id?}', 'CourseController@getDelete');
            Route::get('/deleteOrder/{id?}', 'CourseController@getDeleteOrder');
            Route::get('/addOrder/{id}/{agree}', 'CourseController@getAddOrder');
            
            Route::post('/edit', 'CourseController@postEdit');
            Route::get('/add', 'CourseController@getAdd')->name('admin.courses.add');
            Route::post('/add', 'CourseController@postAdd');
            Route::get('/info/{id}', 'CourseController@postInfo');
            Route::get('/edit', 'CourseController@getEdit');
            Route::post('/edit', 'CourseController@postEdit');
        });


        /**
        * article routes
        */
        Route::group(['prefix' => 'article'], function () {
            Route::get('/', 'ArticleController@getIndex')->name('admin.article.index');
            Route::post('/add','ArticleController@postAdd');
            Route::get('edit/{id}','ArticleController@getEdit')->name('admin.article.edit');
            Route::post('/edit', 'ArticleController@postEdit');
            Route::post('/action/{action}', 'ArticleController@postAction');
            Route::post('info/{id}', 'ArticleController@postInfo')->name('admin.article.info');
            Route::get('/delete/{id}', 'ArticleController@getDelete')
            ->name('admin.ads.delete');
            Route::get('/filter/{filter}', 'ArticleController@getFilter');
            Route::get('/search/{q?}', 'ArticleController@getSearch');
        });

        /**
        * article routes
        */
        Route::group(['prefix' => 'new'], function () {
            Route::get('/', 'NewsController@getIndex')->name('admin.new.index');
            Route::post('/add','NewsController@postAdd');
            Route::get('edit/{id}','NewsController@getEdit')->name('admin.new.edit');
            Route::post('/edit', 'NewsController@postEdit');
            Route::post('info/{id}', 'NewsController@postInfo')->name('admin.new.info');
            Route::get('/delete/{id}', 'NewsController@getDelete')
            ->name('admin.ads.delete');

        });

        /**
        * slider route
        */
        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', 'SliderController@getIndex')->name('admin.slider.index');
            Route::get('edit/{id}', 'SliderController@getEdit')->name('admin.slider.edit');
            Route::post('edit', 'SliderController@postEdit');
            Route::get('add', 'SliderController@getAdd')->name('admin.slider.add');
            Route::post('add', 'SliderController@postAdd');
            Route::post('info/{id}', 'SliderController@postInfo')->name('admin.slider.info');
            Route::get('/delete/{id}','SliderController@getDelete')->name('admin.slider.delete');
        });

        /**
        * page route
        */
        Route::group(['prefix' => 'page'], function () {
            Route::get('/', 'PageController@getIndex')->name('admin.page.index');
            Route::get('edit/{id}', 'PageController@getEdit')->name('admin.page.edit');
            Route::post('edit', 'PageController@postEdit');
            Route::get('add', 'PageController@getAdd')->name('admin.page.add');
            Route::post('add', 'PageController@postAdd');
            Route::post('info/{id}', 'PageController@postInfo')->name('admin.page.info');
            Route::get('/delete/{id}','PageController@getDelete')->name('admin.page.delete');
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

        /**
        * subscribtions routes
        */
        Route::group(['prefix' => 'subscribtions'], function () {
            Route::get('/', 'SubscribtionController@getIndex')->name('admin.subscribtions.index');
            Route::get('view/{id}', 'SubscribtionController@getView')
            ->name('admin.subscribtions.view');
            Route::post('/send', 'SubscribtionController@postSend')
            ->name('admin.subscribtions.send');
            Route::post('/action/{action}', 'SubscribtionController@postAction');
            Route::get('/delete/{id}', 'SubscribtionController@getDelete')
            ->name('admin.subscribtions.delete');
            Route::get('/filter/{filter}', 'SubscribtionController@getFilter');
            Route::get('/search/{q?}', 'SubscribtionController@getSearch');
        });








    });

});

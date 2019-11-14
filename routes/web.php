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

Auth::routes();
Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'frontendController@index')->name('mainpage');
    Route::get('log', 'frontendController@login')->name('login_registation');
});
/*
|-----------------------------------------------------------------------------------
|  This is a Group Route For all Admin Operation , Such as Category ,SubCategory,Color,Brand
| //Added a prefix as 'admin'
| //Add a route name Extension as "  admin  " 
| // Add a Namespace " Admin "
| // Added Two Middleware 'auth' , 'admin'
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    // 'dashboardController' has an  Index Method That Indicate The After Login  / Home Page For  Admin 
    Route::get('dashboard', 'dashboardController@index')->name('dashboard');
    Route::group(['namespace' => 'Category'], function () {
        Route::resource('category', 'CategoryController');
        Route::group(['as'=>'category.'],function(){
            Route::get('/parmanent_delete/{id}','CategoryTwoController@parmanent_delete')->name('parmanent_delete');
            Route::get('/softDelete_list','CategoryTwoController@softDelete_list')->name('softdelete.list');
            Route::get('/restore/{id}','CategoryTwoController@restore_from_softdelete')->name('softdelete.restore');
            Route::delete('/delete_multiple','CategoryTwoController@delete_multiple')->name('delete_multiple');
            Route::get('/category_delete_single/{id}','CategoryTwoController@category_delete_single')->name('category_delete_single');


        });
    });
    Route::group(['namespace' => 'SubCategory' ], function () {
        Route::resource('subcategory', 'SubCategoryController');
        Route::group(['as'=>'SubCategory.' ],function(){
            Route::get('subcategory_parmanent_delete/{id}','SubCategoryTwoController@parmanent_delete')->name('parmanent_delete');
            Route::get('/subcategory_softDelete_list','SubCategoryTwoController@softDelete_list')->name('softdelete.list');
            Route::get('/subcategory_restore/{id}','SubCategoryTwoController@restore_from_softdelete')->name('softdelete.restore');
        });
    });
    Route::group(['namespace' => 'Brand' ], function () {
        Route::resource('brand', 'BrandController');
        Route::group(['as'=>'brand.' ],function(){
            Route::get('brand_parmanent_delete/{id}','BrandTwoController@parmanent_delete')->name('parmanent_delete');
            Route::get('/brand_softDelete_list','BrandTwoController@softDelete_list')->name('softdelete.list');
            Route::get('/brand_restore/{id}','BrandTwoController@restore_from_softdelete')->name('softdelete.restore');
        });
    });
    Route::group(['namespace' => 'Color' ], function () {
        Route::resource('color', 'ColorController');
        Route::group(['as'=>'color.' ],function(){
            Route::get('color_parmanent_delete/{id}','ColorTwoController@parmanent_delete')->name('parmanent_delete');
            Route::get('/color_softDelete_list','ColorTwoController@softDelete_list')->name('softdelete.list');
            Route::get('/color_restore/{id}','ColorTwoController@restore_from_softdelete')->name('softdelete.restore');
        });
    });
    Route::group(['namespace' => 'Size' ], function () {
        Route::resource('size', 'SizeController');
        Route::group(['as'=>'size.' ],function(){
            Route::get('size_parmanent_delete/{id}','SizeTwoController@parmanent_delete')->name('parmanent_delete');
            Route::get('/size_softDelete_list','SizeTwoController@softDelete_list')->name('softdelete.list');
            Route::get('/size_restore/{id}','SizeTwoController@restore_from_softdelete')->name('softdelete.restore');
        });
    });
});
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'dashboardController@index')->name('dashboard');
});

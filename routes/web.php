<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

// Route::get('/', 'HomeController@index')->name('index');
// Route::post('/formpost', 'HomeController@contactPost')->name('form.post');

Route::get('/token/{token}', 'Auth\VerificationController@verify')->name('user.verification');
Route::get('/logout','Auth\LoginController@logout')->name('logout');


Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.submit');


Route::group(['prefix' => 'admin','middleware' => ['auth:web']], function ()
{ 
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::prefix('profile')->group(function()
    {
        Route::get('/', array('as' => 'profile','uses' => 'ProfileController@profile'));
        Route::post('/basic', array('as' => 'updatebasic','uses' => 'ProfileController@updateBasic'));
        Route::post('/pass', array('as' => 'updatepass','uses' => 'ProfileController@updatePass'));
        Route::post('/company', array('as' => 'updatecom','uses' => 'ProfileController@updateCompany'));
    });

    Route::group(['prefix' => 'abouts'], function ()
    {
        Route::get('/', array('as' => 'abouts','uses' => 'AdminController@showAbouts'));
        Route::post('/list', array('as' => 'list.about','uses' => 'AdminController@listAbouts'));
        Route::post('/save', array('as' => 'save.about','uses' => 'AdminController@saveAbouts'));
        Route::post('/update', array('as' => 'update.about','uses' => 'AdminController@updateAbouts'));
        // Route::post('/sts', array('as' => 'sts.','uses' => 'CategoryController@statusCategory'));
         // Route::post('/del', array('as' => 'del.about','uses' => 'AdminController@delAbouts'));
    });

    //     Route::group(['prefix' => 'duties'], function ()
    // {
    //     Route::get('/', array('as' => 'duties','uses' => 'AdminController@showDuty'));
    //     Route::post('/list', array('as' => 'list.duty','uses' => 'AdminController@listDuty'));
    //     Route::post('/save', array('as' => 'save.duty','uses' => 'AdminController@saveDuty'));
    //     Route::post('/update', array('as' => 'update.duty','uses' => 'AdminController@updateDuty'));
    //     // Route::post('/sts', array('as' => 'sts.','uses' => 'CategoryController@statusCategory'));
    //      // Route::post('/del', array('as' => 'del.about','uses' => 'AdminController@delAbouts'));
    // });

    //     Route::group(['prefix' => 'services'], function ()
    // {
    //     Route::get('/', array('as' => 'services','uses' => 'AdminController@showService'));
    //     Route::post('/list', array('as' => 'list.service','uses' => 'AdminController@listService'));
    //     Route::post('/save', array('as' => 'save.service','uses' => 'AdminController@saveService'));
    //     Route::post('/update', array('as' => 'update.service','uses' => 'AdminController@updateService'));
    //     // Route::post('/sts', array('as' => 'sts.','uses' => 'CategoryController@statusCategory'));
    //      // Route::post('/del', array('as' => 'del.about','uses' => 'AdminController@delAbouts'));
    // });
    
       Route::group(['prefix' => 'headings'], function ()
    {
        Route::get('/', array('as' => 'headings','uses' => 'AdminController@showHeading'));
        Route::post('/list', array('as' => 'list.heading','uses' => 'AdminController@listHeading'));
        Route::post('/save', array('as' => 'save.heading','uses' => 'AdminController@saveHeading'));
        Route::post('/update', array('as' => 'update.heading','uses' => 'AdminController@updateHeading'));
        // Route::post('/sts', array('as' => 'sts.','uses' => 'CategoryController@statusCategory'));
         // Route::post('/del', array('as' => 'del.about','uses' => 'AdminController@delAbouts'));
    });

    // Route::group(['prefix' => 'categories'], function ()
    // {
    //     Route::get('/', array('as' => 'categories','uses' => 'CategoryController@showCategories'));
    //     Route::post('/list', array('as' => 'list.categories','uses' => 'CategoryController@listCategories'));
    //     Route::post('/save', array('as' => 'save.category','uses' => 'CategoryController@saveCategory'));
    //     Route::post('/update', array('as' => 'update.category','uses' => 'CategoryController@updateCategory'));
    //     Route::post('/sts', array('as' => 'sts.category','uses' => 'CategoryController@statusCategory'));
    //     Route::post('/del', array('as' => 'del.category','uses' => 'CategoryController@delCategory'));
    // });
    // Route::group(['prefix' => 'suppliers'], function ()
    // {
    //     Route::get('/', array('as' => 'suppliers','uses' => 'SupplierController@showSuppliers'));
    //     Route::post('/list', array('as' => 'list.suppliers','uses' => 'SupplierController@listSuppliers'));
    //     Route::post('/save', array('as' => 'save.supplier','uses' => 'SupplierController@saveSupplier'));
    //     Route::post('/update', array('as' => 'update.supplier','uses' => 'SupplierController@updateSupplier'));
    //     Route::post('/sts', array('as' => 'sts.supplier','uses' => 'SupplierController@statusSupplier'));
    //     Route::post('/del', array('as' => 'del.supplier','uses' => 'SupplierController@delSupplier'));
        
    // });

    // Route::group(['prefix' => 'contacts'], function ()
    // {
    //     Route::get('/', array('as' => 'contacts','uses' => 'AdminController@showContacts'));
    //     Route::post('/list', array('as' => 'list.contact','uses' => 'AdminController@listContact'));
    //     Route::post('/save', array('as' => 'save.contact','uses' => 'AdminController@saveContact'));
    //     Route::post('/update', array('as' => 'update.contact','uses' => 'AdminController@updateContact'));
    //     Route::post('/sts', array('as' => 'sts.contact','uses' => 'AdminController@statusContact'));
    //     Route::post('/del', array('as' => 'del.contact','uses' => 'AdminController@delContact'));
        
    // });


});



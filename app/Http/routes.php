<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return redirect('/v1');
});

Route::group(['namespace' => 'Api'], function ()
{
    // version 1
    Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function ()
    {
        // root route
        Route::get('/', ['as' => 'root_path', function ()
        {
            return response()->json([
                'message' => 'BizList API',
                'version' => '1.0',
                'status'  => 200
            ]);
        }]);
    });
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//
//Route::group(['middleware' => ['web']], function () {
//    //
//});

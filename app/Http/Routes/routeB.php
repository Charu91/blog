<?php ///namespace laravel\Http\Routes;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('blog',   ['as' => 'blog', 'uses' => 'BlogController@index']);
Route::post('blog1',  ['as' => 'blog_store1', 'uses' => 'BlogController@index']);

/*Route::post('api/blog', [
    'uses' => 'Api\BlogController@blog',
    'as' => 'blog',
    'middleware' => [],
    'where' => [],
    'domain' => env('WEBSITE_URL'),
]);

Route::post('api/blog1', [
    'uses' => 'Api\BlogController@index',
    'as' => 'index',
    'middleware' => [],
    'where' => [],
    'domain' => env('WEBSITE_URL'),
]);
*/
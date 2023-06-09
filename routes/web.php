<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('site.index');
// });

Route::match(['get', 'post'], '/', 'App\Http\Controllers\IndexController@index');

Route::get('/afuma/about', function () { return view('site.about'); });
Route::match(['get', 'post'], '/afuma/event', 'App\Http\Controllers\EvenementController@index');
Route::get('/afuma/spectacle', function () {return view('site.spectacle');}); 
Route::match(['get', 'post'], '/afuma/galerie', 'App\Http\Controllers\GalerieController@index');
Route::match(['get', 'post'], '/afuma/blog', 'App\Http\Controllers\BlogController@index');
Route::match(['get', 'post'], '/afuma/blog_detail/{id}', 'App\Http\Controllers\BlogController@detail');
Route::get('/afuma/presse', function () { return view('site.presse'); });
Route::get('/afuma/contact', function () {return view('site.contact');});
Route::get('/blog_detail', function () {return view('site.blog_detail');});
Route::get('/spectacle_detail', function () {return view('site.spectacle_detail');});

Route::match(['get', 'post'], '/login', 'App\Http\Controllers\AuthentificationController@login');
Route::match(['get', 'post'], '/mail/store', 'App\Http\Controllers\MailController@mailIndex')->name('sendMail');
Route::match(['get', 'post'], '/mail/togo', 'App\Http\Controllers\MailController@mailTogo')->name('sendMailTogo');
Route::match(['get', 'post'], '/mail/europe', 'App\Http\Controllers\MailController@mailEurope')->name('sendMailEurope');

Route::prefix('admin')->group(function () {

    Route::match(['get', 'post'], '/afuma', 'App\Http\Controllers\AuthentificationController@index');

    Route::match(['get', 'post'], '', 'App\Http\Controllers\AuthentificationController@login');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
        Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');  

        Route::match(['get', 'post'], '/evenements', 'App\Http\Controllers\EvenementController@show');
        Route::match(['get', 'post'], '/evenements/store', 'App\Http\Controllers\EvenementController@store');
        Route::match(['get', 'post'], '/evenements/edit/{id}', 'App\Http\Controllers\EvenementController@edit');
        Route::match(['get', 'post'], '/evenements/delete/{id}', 'App\Http\Controllers\EvenementController@delete');

        Route::match(['get', 'post'], '/galeries', 'App\Http\Controllers\GalerieController@show');
        Route::match(['get', 'post'], '/galeries/store', 'App\Http\Controllers\GalerieController@store');
        Route::match(['get', 'post'], '/galeries/edit/{id}', 'App\Http\Controllers\GalerieController@edit');
        Route::match(['get', 'post'], '/galeries/delete/{id}', 'App\Http\Controllers\GalerieController@delete');

        Route::match(['get', 'post'], '/blogs', 'App\Http\Controllers\BlogController@show');
        Route::match(['get', 'post'], '/blogs/store', 'App\Http\Controllers\BlogController@store');
        Route::match(['get', 'post'], '/blogs/edit/{id}', 'App\Http\Controllers\BlogController@edit');
        Route::match(['get', 'post'], '/blogs/delete/{id}', 'App\Http\Controllers\BlogController@delete');

        Route::match(['get', 'post'], '/tournes', 'App\Http\Controllers\TourneController@show');
        Route::match(['get', 'post'], '/tournes/store', 'App\Http\Controllers\TourneController@store');
        Route::match(['get', 'post'], '/tournes/edit/{id}', 'App\Http\Controllers\TourneController@edit');
        Route::match(['get', 'post'], '/tournes/delete/{id}', 'App\Http\Controllers\TourneController@delete');

      
        Route::match(['get', 'post'], '/users', 'App\Http\Controllers\UserController@show');
        Route::match(['get', 'post'], '/users/add', 'App\Http\Controllers\UserController@add');
        Route::match(['get', 'post'], '/users/edit/{id}', 'App\Http\Controllers\UserController@edit');
        Route::match(['get', 'post'], '/users/delete/{id}', 'App\Http\Controllers\UserController@delete');

        Route::match(['get', 'post'], '/roles', 'App\Http\Controllers\RoleController@show');
        Route::match(['get', 'post'], '/roles/store', 'App\Http\Controllers\RoleController@store');
        Route::match(['get', 'post'], '/roles/edit/{id}', 'App\Http\Controllers\RoleController@edit');
        Route::match(['get', 'post'], '/roles/delete/{id}', 'App\Http\Controllers\RoleController@delete');

        Route::match(['get', 'post'], '/permissions', 'App\Http\Controllers\PermissionController@show');
        Route::match(['get', 'post'], '/permissions/store', 'App\Http\Controllers\PermissionController@store');
        Route::match(['get', 'post'], '/permissions/edit/{id}', 'App\Http\Controllers\PermissionController@edit');
        Route::match(['get', 'post'], '/permissions/delete/{id}', 'App\Http\Controllers\PermissionController@delete');

        Route::post('/roles/{role}/permissions', 'App\Http\Controllers\RoleController@givePermission');
        Route::delete('/roles/{role}/permissions/{permission}', 'App\Http\Controllers\RoleController@revokePermission');

        Route::post('/permissions/{permission}/roles', 'App\Http\Controllers\PermissionController@assignRole');
        Route::delete('/permissions/{permission}/roles/{role}', 'App\Http\Controllers\PermissionController@removeRole');

        Route::post('/users/{user}/roles', 'App\Http\Controllers\UserController@assignRole');
        Route::delete('/users/{user}/roles/{role}', 'App\Http\Controllers\UserController@removeRole');

        Route::post('/users/{user}/permissions', 'App\Http\Controllers\UserController@givePermission');
        Route::delete('/users/{user}/permissions/{permission}', 'App\Http\Controllers\UserController@revokePermission');

    });
});
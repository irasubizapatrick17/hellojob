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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', ['uses' => 'landingpageController@index']);
    Route::get('/search_job_seeker',[
        'uses' =>'landingpageController@search_job_seeker',
        'as'   =>'users.explore'
    ]);
Route::get('/view/{id}','landingpageController@view')->name('view');


Auth::routes();

Route::get('/home', 'HomeController@Index');


Route::group(['middleware'=> 'auth'], function()
{
    Route::get('/jobseeker_dashboard', function()
    {

        return view('/users.jobseeker_dashboard');

    })->name('jobseeker_dashboard');

    //Route of admin dashboard

    Route::get('/employer_dashboard', function()
    {

        return view('/users.employer_dashboard');

    })->name('employer_dashboard');

    //Route of admin dashboard

    Route::get('/admin_dashboard', function()
    {

        return view('/users.admin-dashboard');

    })->name('admin_dashboard');


    Route::resource('/allusers','AllusersController');
    Route::post('deactivate','AllusersController@deactivate')->name('deactivate');
    Route::post('activate','AllusersController@activate')->name('activate');
    Route::resource('/my_cv','JobseekerController');
    Route::resource('Addprofile','AddProfileController');
    Route::resource('/company_profile','CompanyProfileController');
    Route::resource('company_jobseeker','Company_jobseekerController');
    Route::resource('/all_jobseeker','AlljobseekerController');
    Route::resource('/all_employers','AllemployerController');



});

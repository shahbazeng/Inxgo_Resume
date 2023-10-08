<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/admin', function () {
	return view('admin.index');  
});

Route::get('/admin/table', function () {
	return view('admin.table');  
});

Route::get('/', function () {
	return redirect()->away('/comingsoon');    
});
Route::get('/free-online-resume-builder', function () {   
	return view('landing_page');
})->name('main_index');


//Route::resource('user','UserController');



Auth::routes();
Route::get('test',function(){
    return view('pdf.index');
});
//user 
Route::get('user','UserController@index')->name('user');
Route::get('user/create','UserController@create')->name('user/create');
Route::post('user/store','UserController@store')->name('user/store');
Route::get('user/delete/{id}','UserController@destroy')->name('user/delete');
Route::get('user/update/{id}','UserController@edit')->name('user/edit');
Route::post('user/update/{id}','UserController@update')->name('user/update');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/free-online-resume-builder/home', 'BasicInfoController@create')->name('home');
Route::get('/free-online-resume-builder/resumes', 'HomeController@allresume')->name('resumes');
Route::get('/free-online-resume-builder/about', 'HomeController@aboutus')->name('about');
Route::get('/free-online-resume-builder/contact', 'HomeController@inxgocontact')->name('contact');
Route::post('/contact_store', 'HomeController@contactStore')->name('contact_store');

Route::post('/basic info store', 'BasicInfoController@store')->name('store');

//education
Route::get('/education_information','EducationController@create')->name('education_create');
Route::get('/education_summery','EducationController@index')->name('education_index');
Route::post('/education_store','EducationController@store')->name('education_store');
Route::get('/edu_delete/{id}','EducationController@destroy')->name('edu_delete');
Route::get('/update/{id}','EducationController@edit')->name('update');
Route::post('/update/{id}','EducationController@update')->name('update');

//references 
Route::get('references_summery_display','ReferencesController@index')->name('references_index');
Route::get('references_information_create','ReferencesController@create')->name('references_create');
Route::post('references_information_store','ReferencesController@store')->name('references_store');
Route::get('/references_delete/{id}','ReferencesController@destroy')->name('references_delete');
Route::get('/references_update/{id}','ReferencesController@edit')->name('edit');
Route::post('/references_update/{id}','ReferencesController@update')->name('update');
//work 
Route::get('work_summery_display','WorkController@index')->name('work_index');
Route::get('work_information_create','WorkController@create')->name('work_create');
Route::post('work_information_store','WorkController@store')->name('work_store');
Route::get('/work_delete/{id}','WorkController@destroy')->name('work_delete');
Route::get('/work_update/{id}','WorkController@edit')->name('edit');
Route::post('/work_update/{id}','WorkController@update')->name('update');

//certificate
Route::get('certificate_summery_display','CertificateController@index')->name('certificate_index');
Route::get('certificate_information_create','CertificateController@create')->name('certificate_create');
Route::post('certificate_information_store','CertificateController@store')->name('certificate_store');
Route::get('/delete/{id}','CertificateController@destroy')->name('delete');
Route::get('/certificate_update/{id}','CertificateController@edit')->name('edit');
Route::post('/certificate_update/{id}','CertificateController@update')->name('update');

//skill
Route::get('skills_summery_display','SkillController@index')->name('skills_index');
Route::get('skills_information_create','SkillController@create')->name('skills_create');
Route::post('skills_information_store','SkillController@store')->name('skills_store');
Route::get('/delete/{id}','SkillController@destroy')->name('delete');
Route::get('/skills_update/{id}','SkillController@edit')->name('edit');
Route::post('/skills_update/{id}','SkillController@update')->name('skills_update');
//Expertise
Route::get('ex_summery_display','ExpertController@index')->name('ex_index');
Route::get('ex_information_create','ExpertController@create')->name('ex_create');
Route::post('ex_information_store','ExpertController@store')->name('ex_store');
Route::get('/delete/{id}','ExpertController@destroy')->name('delete');
Route::get('/ex_update/{id}','ExpertController@edit')->name('edit');
Route::post('/ex_update/{id}','ExpertController@update')->name('ex_update');

//CA
Route::get('ca_summery_display','CareerObjectController@index')->name('ca_index');
Route::get('ca_information_create','CareerObjectController@create')->name('ca_create');
Route::post('ca_information_store','CareerObjectController@store')->name('ca_store');
Route::get('/ca_update/{id}','CareerObjectController@edit')->name('edit');
Route::post('/ca_update/{id}','CareerObjectController@update')->name('update');

//PDF
Route::get('pdf_display','PdfController@index')->name('pdf_index');
Route::get('pdf_display2','PdfController@index2')->name('pdf_index2');
Route::get('pdf_download2','PdfController@download2')->name('download2');
Route::get('pdf_display3','PdfController@index3')->name('pdf_index3');
Route::get('pdf_download3','PdfController@download3')->name('download3');
Route::get('pdf_download','PdfController@download')->name('download');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('migrate', function () {
     \Artisan::call('migrate');
    \Artisan::call('db:seed');
    dd("migrate run");

});
Route::get('cache', function () {
 \Artisan::call('cache:clear');
});
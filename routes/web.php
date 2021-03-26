<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

function current_page( $url = "/" ) {
	return strstr(request()->path(), $url);
	//return request()->path() == $url; 

}

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function(){
	return view('pages.blog');
});

Route::get('/blog-single', function(){
   return view('pages.blog-single');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/interior-designer', function () {
    return view('pages.interior-designer');
});

Route::get('/joinus', function () {
    return view('pages.joinus');
});

Route::get('/our-fees', function () {
    return view('pages.our-fees');
});

Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/project-single', function () {
    return view('pages.project-single');
});

Route::get('/ser-concept-designs', function () {
    return view('pages.ser-concept-designs');
});

Route::get('/ser-consulting', function () {
    return view('pages.ser-consulting');
});

Route::get('/ser-glass-wrought', function () {
    return view('pages.ser-glass-wrought');
});

Route::get('/ser-make-overs', function () {
    return view('pages.ser-make-overs');
});

Route::get('/project-designs', function () {
    return view('pages.project-designs');
});

Route::get('/ser-space-planning', function () {
    return view('pages.ser-space-planning');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/what-we-do', function () {
    return view('pages.what-we-do');
});

Route::get('/logins', function () {
    return view('pages.logins');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/userlist', function () {
    return view('pages.userlist');
});
Route::post('/User', 'User@loginsubmit');

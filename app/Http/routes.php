<?php

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

Route::get('/', 'HomeController@index');
Route::get('/admin/sign-in', 'AuthController@getLogin');
Route::post('/admin/do-sign-in', 'AuthController@postLogin');
Route::get('/admin/logout', 'AuthController@logout');

/*
/ Admin / Edit Headings
*/

Route::get('/admin/home', 'AdminController@getHeadings');

Route::post('/admin/home/homeSave', 'AdminController@saveHomeHeading');

Route::post('/admin/home/aboutSave', 'AdminController@saveAboutHeading');

Route::post('/admin/home/solutionSave', 'AdminController@saveSolutionHeading');

Route::post('/admin/home/servicesSave', 'AdminController@saveServicesHeading');

Route::post('/admin/home/videoSave', 'AdminController@saveVideoHeading');

Route::post('/admin/home/secondVideoSave', 'AdminController@saveSecondVideoHeading');

Route::post('/admin/home/teamSave', 'AdminController@saveTeamHeading');

Route::post('/admin/home/contactSave', 'AdminController@saveContactHeading');

Route::post('/admin/home/subheadingSave', 'AdminController@saveSubHeading');

/*
/ Admin / Edit About Slider
*/

Route::get('/admin/about-slider', 'AdminController@getAboutSlider');

Route::post('/admin/about-slider/create', 'AdminController@createAboutSliderObject');

Route::post('/admin/about-slider/update/{id}', 'AdminController@updateAboutSliderObject');

Route::post('/admin/about-slider/delete/{id}', 'AdminController@deleteAboutSliderObject');

/*
/ Admin / Edit Solutions
*/

Route::get('/admin/solutions', 'AdminController@getSolutions');

Route::post('/admin/solutions/create', 'AdminController@createSolutions');

Route::post('/admin/solutions/update/{id}', 'AdminController@updateSolutions');

Route::post('/admin/solutions/delete/{id}', 'AdminController@deleteSolutions');

/*
/ Admin / Edit Services
*/

Route::get('/admin/services', 'AdminController@getServices');

Route::post('/admin/services/create', 'AdminController@createService');

Route::post('/admin/services/update/{id}', 'AdminController@updateService');

Route::post('/admin/services/delete/{id}', 'AdminController@deleteService');

/*
/ Admin / Edit Events
*/

Route::get('/admin/events', 'AdminController@getEvents');

Route::get('/events/view/{id}', 'HomeController@viewEvent');

Route::post('/admin/events/post', 'AdminController@postEvents');

Route::get('/admin/events/post/{id}', 'AdminController@getEditEvents');

Route::post('/admin/events/post/{id}/update', 'AdminController@updateEvents');

Route::post('/admin/events/post/{id}/delete', 'AdminController@deleteEvents');

/*
/ Admin / Edit Videos
*/

Route::get('/admin/videos', 'AdminController@getVideos');
Route::post('/admin/videos/update', 'AdminController@updateVideos');

/*
/ Admin / Edit Team
*/

Route::get('/admin/team', 'AdminController@getTeam');

Route::post('/admin/team/create', 'AdminController@createTeamPerson');

Route::post('/admin/team/update', 'AdminController@updateTeamPerson');

Route::post('/admin/team/delete', 'AdminController@deleteTeamPerson');

/*
/ Admin / Edit images
*/

Route::get('/admin/images', 'AdminController@getImages');

Route::post('/admin/images/update', 'AdminController@updateImages');

/*
/ Admin / Edit contacts
*/

Route::get('/admin/contacts', 'AdminController@getContacts');
Route::post('/admin/contacts/updateFirstContact', 'AdminController@updateFirstContact');
Route::post('/admin/contacts/updateSecondContact', 'AdminController@updateSecondContact');
Route::post('/admin/contacts/updateThirdContact', 'AdminController@updateThirdContact');

/*
/ Admin / Blog
*/

Route::get('/blog', 'HomeController@getBlog');
Route::get('/admin/blog', 'AdminController@getEditBlog');
Route::post('/admin/blog/create', 'AdminController@createPost');
Route::get('/admin/blog/get-update/{id}', 'AdminController@getUpdatePost');
Route::post('/admin/blog/update/{id}', 'AdminController@updatePost');
Route::post('/admin/blog/delete/{id}', 'AdminController@deletePost');
Route::get('/admin/blog/post/{id}', 'HomeController@getPost');

/*
/ Email
*/

Route::post('/email-send', 'HomeController@sendEmail');

/*
/ Past events
*/

Route::get('/past-events', 'HomeController@getPastEvents');
Route::get('/admin/past-events', 'AdminController@getPastEvents');
Route::post('/admin/past-events/create', 'AdminController@createPastEvents');
Route::get('/admin/past-events/post/{id}', 'AdminController@showPastEvent');
Route::post('/admin/past-events/post/{id}/update', 'AdminController@updatePastEvents');
Route::post('/admin/past-events/post/{id}/delete', 'AdminController@deletePastEvents');

Route::get('/past-event/{id}', 'HomeController@lookPastEvent');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\OurServicesController;
use App\Http\Controllers\Admin\UserRegisterController;

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@about')->name('about_us');
Route::get('/our-team','Frontend\FrontendController@team')->name('our_team');
Route::get('/our-services','Frontend\FrontendController@service')->name('our_services');
Route::get('/about-chairman','Frontend\FrontendController@message')->name('about_chairman');
Route::get('/features','Frontend\FrontendController@objectives')->name('our_objectives');
Route::get('/gallery','Frontend\FrontendController@gallery')->name('our_gallery');
Route::get('/contact','Frontend\FrontendController@contact')->name('contact_us');
Route::post('/contact-submit','Frontend\FrontendController@mailSending');
Route::get('/my-document','Frontend\FrontendController@myDocument')->name('document');

// Route::get('admin/manager-dashboard', function () {
//          return view('manager.index');
//      });


Route::middleware(['auth', 'isAdmin'])->group(function () {

    //Admin | Dashboard
    Route::get('admin/','Admin\AdminController@index')->name('dashboard.index');

    //User Register
    Route::get('user-register/','Admin\UserRegisterController@index')->name('user.index');
    Route::get('user-register/edit/{id}','Admin\UserRegisterController@edit')->name('user.edit');
    Route::put('user-register/update/{id}','Admin\UserRegisterController@update')->name('user.update');
    Route::delete('user-register/delete/{id}','Admin\UserRegisterController@delete')->name('user.destroy');

    //About Us
    Route::get('about/','Admin\AboutusController@index')->name('about.index');
    Route::get('about/create','Admin\AboutusController@create')->name('about.create');
    Route::post('about/store','Admin\AboutusController@store')->name('about.store');
    Route::get('about/edit/{id}','Admin\AboutusController@edit')->name('about.edit');
    Route::put('about/update/{id}','Admin\AboutusController@update')->name('about.update');
    Route::delete('about/delete/{id}','Admin\AboutusController@delete')->name('about.destroy');

    //Our Services
    Route::get('services/','Admin\OurServicesController@index')->name('services.index');
    Route::get('services/create','Admin\OurServicesController@create')->name('services.create');
    Route::post('services/store','Admin\OurServicesController@store')->name('services.store');
    Route::get('services/edit/{id}','Admin\OurServicesController@edit')->name('services.edit');
    Route::put('services/update/{id}','Admin\OurServicesController@update')->name('services.update');
    Route::delete('services/delete/{id}','Admin\OurServicesController@delete')->name('services.destroy');

    //Our Objective
    Route::get('objective/','Admin\ObjectiveController@index')->name('objective.index');
    Route::get('objective/create','Admin\ObjectiveController@create')->name('objective.create');
    Route::post('objective/store','Admin\ObjectiveController@store')->name('objective.store');
    Route::get('objective/edit/{id}','Admin\ObjectiveController@edit')->name('objective.edit');
    Route::put('objective/update/{id}','Admin\ObjectiveController@update')->name('objective.update');
    Route::delete('objective/delete/{id}','Admin\ObjectiveController@delete')->name('objective.destroy');

    //Our Portfolio
    Route::get('portfolio/','Admin\PortfoliosController@index')->name('portfolio.index');
    Route::get('portfolio/create','Admin\PortfoliosController@create')->name('portfolio.create');
    Route::post('portfolio/store','Admin\PortfoliosController@store')->name('portfolio.store');
    Route::get('portfolio/edit/{id}','Admin\PortfoliosController@edit')->name('portfolio.edit');
    Route::put('portfolio/update/{id}','Admin\PortfoliosController@update')->name('portfolio.update');
    Route::delete('portfolio/delete/{id}','Admin\PortfoliosController@delete')->name('portfolio.destroy');

    //Our Activity
    Route::get('activity/','Admin\ActivityController@index')->name('activity.index');
    Route::get('activity/create','Admin\ActivityController@create')->name('activity.create');
    Route::post('activity/store','Admin\ActivityController@store')->name('activity.store');
    Route::get('activity/edit/{id}','Admin\ActivityController@edit')->name('activity.edit');
    Route::put('activity/update/{id}','Admin\ActivityController@update')->name('activity.update');
    Route::delete('activity/delete/{id}','Admin\ActivityController@delete')->name('activity.destroy');

    //Message from MD
    Route::get('message/','Admin\MessageController@index')->name('message.index');
    Route::get('message/create','Admin\MessageController@create')->name('message.create');
    Route::post('message/store','Admin\MessageController@store')->name('message.store');
    Route::get('message/edit/{id}','Admin\MessageController@edit')->name('message.edit');
    Route::put('message/update/{id}','Admin\MessageController@update')->name('message.update');
    Route::delete('message/delete/{id}','Admin\MessageController@delete')->name('message.destroy');

    //Our Team Member
    Route::get('team/','Admin\TeamController@index')->name('team.index');
    Route::get('team/create','Admin\TeamController@create')->name('team.create');
    Route::post('team/store','Admin\TeamController@store')->name('team.store');
    Route::get('team/edit/{id}','Admin\TeamController@edit')->name('team.edit');
    Route::put('team/update/{id}','Admin\TeamController@update')->name('team.update');
    Route::delete('team/delete/{id}','Admin\TeamController@delete')->name('team.destroy');

     //Header
    Route::get('header/','Admin\HeaderController@index')->name('header.index');
    Route::get('header/create','Admin\HeaderController@create')->name('header.create');
    Route::post('header/store','Admin\HeaderController@store')->name('header.store');
    Route::get('header/edit/{id}','Admin\HeaderController@edit')->name('header.edit');
    Route::put('header/update/{id}','Admin\HeaderController@update')->name('header.update');
    Route::delete('header/delete/{id}','Admin\HeaderController@delete')->name('header.destroy');

    //My Document
    Route::get('document/','Admin\DocumentController@index')->name('document.index');
    Route::get('document/create','Admin\DocumentController@create')->name('document.create');
    Route::post('document/store','Admin\DocumentController@store')->name('document.store');
    Route::get('document/edit/{id}','Admin\DocumentController@edit')->name('document.edit');
    Route::put('document/update/{id}','Admin\DocumentController@update')->name('document.update');
    Route::delete('document/delete/{id}','Admin\DocumentController@delete')->name('document.destroy');

    //Main Menu
    Route::get('menu/','Admin\MenuController@index')->name('menu.index');
    Route::get('menu/create','Admin\MenuController@create')->name('menu.create');
    Route::post('menu/store','Admin\MenuController@store')->name('menu.store');
    Route::get('menu/edit/{id}','Admin\MenuController@edit')->name('menu.edit');
    Route::put('menu/update/{id}','Admin\MenuController@update')->name('menu.update');
    Route::delete('menu/delete/{id}','Admin\MenuController@delete')->name('menu.destroy');

    //Submenu
    Route::get('submenu/','Admin\SubMenuController@index')->name('submenu.index');
    Route::get('submenu/create','Admin\SubMenuController@create')->name('submenu.create');
    Route::post('submenu/store','Admin\SubMenuController@store')->name('submenu.store');
    Route::get('submenu/edit/{id}','Admin\SubMenuController@edit')->name('submenu.edit');
    Route::put('submenu/update/{id}','Admin\SubMenuController@update')->name('submenu.update');
    Route::delete('submenu/delete/{id}','Admin\SubMenuController@delete')->name('submenu.destroy');


});

Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth','isManager'])->group(function(){
    Route::get('manager/dashboard','Manager\ManagerController@index');
    Route::get('manager/my-documents','Manager\ManagerController@myDocuments');

});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// ROUTES USER ADMIN
Route::get('/admin/settings', 'UserController@edit')->name('user.edit');
Route::post('admin/settings/update', 'UserController@update')->name('user.update');

// ROUTES EMPLOYEE
Route::get('/admin/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/admin/employees/create', 'EmployeeController@create')->name('employee.create');
Route::post('/admin/employees/store', 'EmployeeController@store')->name('employee.store');
Route::get('/admin/employees/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('/admin/employees/update/{id}', 'EmployeeController@update')->name('employee.update');
Route::get('/admin/employees/delete/{id}', 'EmployeeController@destroy')->name('employee.destroy');

// ROUTES COMPANY
Route::get('/admin/companies', 'CompanyController@index')->name('company.index');
Route::get('/admin/companies/create', 'CompanyController@create')->name('company.create');
Route::post('/admin/companies/store', 'CompanyController@store')->name('company.store');
Route::get('/admin/companies/edit/{id}', 'CompanyController@edit')->name('company.edit');
Route::post('/admin/companies/update/{id}', 'CompanyController@update')->name('company.update');
Route::get('/admin/companies/delete/{id}', 'CompanyController@destroy')->name('company.destroy');

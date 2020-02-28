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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', function(){
             if(Auth::user()->role_id ==1 ){
               return view('superadmin');
                }elseif(Auth::user()->role_id == 2){
                    return view('Entreprise.index');
                }
          })->name('index');

//});
Route::get('/index', 'EntrepriseController@index')->name('indexb');
Route::get('/employee', 'EmployeeController@index')->name('employee');
Route::get('/employee/create', 'EmployeeController@create')->name('Entreprise.Employeer.create');
Route::post('/employeestore', 'EmployeeController@store')->name('Entreprise.Employeer.store');
Route::get('/employeeEdit/{employee}/edit','EmployeeController@edit')->name('Entreprise.Employeer.edit');
Route::patch('/employeeupdate/{employee}','EmployeeController@update')->name('Entreprise.Employeer.update');
Route::delete('/employeedestroy/{employee}', 'EmployeeController@destroy')->name('Entreprise.Employeer.destroy');

Route::get('/user', 'EmployeeController@nombre')->name('nombre');
//projet
Route::get('/index', 'ProjetController@index')->name('project');
//client
Route::get('/client', 'ClientController@index')->name('client.index');
Route::get('/client/create', 'ClientController@create')->name('Entreprise.client.create');
Route::post('/clientstore', 'ClientController@store')->name('Entreprise.client.store');

//Route::get('/employee/employee', 'LoginController@EmployeeLogin')->name('employee');


/*Route::get('/register/employee', 'Auth\RegisterController@showEmployeeRegisterForm');
Route::post('/register/employee', 'Auth\RegisterController@createEmployee');*/

/*Route::get('/login/employee','Auth\LoginController@showEmployeeLoginForm')->name('employee.Login');
Route::post('/login/employee','Auth\LoginController@EmployeeLogin')->name('employee.login.submit');

Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.Login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
    Route::get('/employee', 'EmployeeController@index')->name('employee');
});*/

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





//   -   -   -   -   -   -   -    colera    -   -   -   -   -   -   -   //
Route::get('/colera', function () {
    return view('_colera.index');
});
Route::get('/fury-install', ['uses' => 'ColeraController@furyInstall', 'as' => 'fury-install']);
Route::get('/fury-uninstall', ['uses' => 'ColeraController@furyUninstall', 'as' => 'fury-uninstall']);
Route::get('/wrath-install', ['uses' => 'ColeraController@wrathInstall', 'as' => 'wrath-install']);
Route::get('/wrath-uninstall', ['uses' => 'ColeraController@wrathUninstall', 'as' => 'wrath-uninstall']);
//   -   -   -   -   -   -   -    colera    -   -   -   -   -   -   -   //



// -----------------------------------------------fury-----------------------------------------------//
Route::get('/fury', function () {
return view('_colera.fury.index');
});
Route::get('/fury/migration', ['uses' => 'FuryController@migration', 'as' => 'fury.migration']);
Route::get('/fury/generate/{id}', ['uses' => 'FuryController@generate', 'as' => 'fury.generate']);
Route::post('/fury/create', ['uses' => 'FuryController@create', 'as' => 'fury.create']);
// -----------------------------------------------//fury---------------------------------------------//

// -----------------------------------------------wrath-----------------------------------------------//
Route::get('/wrath', function () { return view('_wrath.index'); }); 
Route::get('acl/', ['uses' => 'WrathController@dashboard', 'as' => 'acl']);
Route::get('/acl/user/{id}', ['uses' => 'WrathController@user', 'as' => 'acl.user']);
Route::post('/acl/user-role-attach/', ['uses' => 'WrathController@userRoleAttach', 'as' => 'acl.user-role-attach']);
Route::post('/acl/user-role-dettach/', ['uses' => 'WrathController@userRoleDettach', 'as' => 'acl.user-role-dettach']);
Route::post('/acl/role-permission-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-permission-attach']);
Route::post('/acl/role-permission-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-permission-dettach']);
Route::get('/acl/role/{id}', ['uses' => 'WrathController@role', 'as' => 'acl.role']);
Route::post('/acl/role-role-attach/', ['uses' => 'WrathController@rolePermissionAttach', 'as' => 'acl.role-role-attach']);
Route::post('/acl/role-role-dettach/', ['uses' => 'WrathController@rolePermissionDettach', 'as' => 'acl.role-role-dettach']);
// -----------------------------------------------//wrath---------------------------------------------//




//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Role - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//
Route::get('/crud/role', ['uses' => 'RoleController@index', 'as' => 'cruds.role.index']);
Route::get('/crud/role/show/{id}', ['uses' => 'RoleController@show', 'as' => 'cruds.role.show']);
Route::get('/crud/role/create', ['uses' => 'RoleController@create', 'as' => 'cruds.role.create']);
Route::post('/crud/role/store', ['uses' => 'RoleController@store', 'as' => 'cruds.role.store']);
Route::get('/crud/role/edit/{id}', ['uses' => 'RoleController@edit', 'as' => 'cruds.role.edit']);
Route::put('/crud/role/update/{id}', ['uses' => 'RoleController@update', 'as' => 'cruds.role.update']);
Route::get('/crud/role/destroy/{id}', ['uses' => 'RoleController@destroy', 'as' => 'cruds.role.destroy']);
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - // Role - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//


//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Permission - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//
Route::get('/crud/permission', ['uses' => 'PermissionController@index', 'as' => 'cruds.permission.index']);
Route::get('/crud/permission/show/{id}', ['uses' => 'PermissionController@show', 'as' => 'cruds.permission.show']);
Route::get('/crud/permission/create', ['uses' => 'PermissionController@create', 'as' => 'cruds.permission.create']);
Route::post('/crud/permission/store', ['uses' => 'PermissionController@store', 'as' => 'cruds.permission.store']);
Route::get('/crud/permission/edit/{id}', ['uses' => 'PermissionController@edit', 'as' => 'cruds.permission.edit']);
Route::put('/crud/permission/update/{id}', ['uses' => 'PermissionController@update', 'as' => 'cruds.permission.update']);
Route::get('/crud/permission/destroy/{id}', ['uses' => 'PermissionController@destroy', 'as' => 'cruds.permission.destroy']);
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - // Permission - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -//


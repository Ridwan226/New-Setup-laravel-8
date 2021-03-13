<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionAndRoleController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('administrator')->group(function () {
  Route::group(['middleware' => ['role:admin']], function () { 
    Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('dashboard');
    
    // Permission dan Auth
    
    Route::prefix('roles')->group(function () { 
      Route::get('/', [PermissionAndRoleController::class, 'index']);
      Route::post('/addroles', [PermissionAndRoleController::class, 'addRoles']);
      Route::post('/editroles/{id}', [PermissionAndRoleController::class, 'editRoles']);
      Route::delete('/delroles/{id}', [PermissionAndRoleController::class, 'delRoles']);
    });
    
    Route::prefix('permission')->group(function () { 
      Route::get('/', [PermissionAndRoleController::class, 'viewPermission']);
      Route::post('/addpermission', [PermissionAndRoleController::class, 'addPermission']);
      Route::post('/editpermission/{id}', [PermissionAndRoleController::class, 'editPermission']);
      Route::delete('/delpermission/{id}', [PermissionAndRoleController::class, 'delPermission']);
    });
    
    
  });
});

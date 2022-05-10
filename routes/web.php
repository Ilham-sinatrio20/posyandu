<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Menu\MenuGroupController;
use App\Http\Controllers\Menu\MenuItemController;
use App\Http\Controllers\RoleAndPermission\AssignPermissionController;
use App\Http\Controllers\RoleAndPermission\AssignUserToRoleController;
use App\Http\Controllers\RoleAndPermission\ExportPermissionController;
use App\Http\Controllers\RoleAndPermission\ExportRoleController;
use App\Http\Controllers\RoleAndPermission\ImportPermissionController;
use App\Http\Controllers\RoleAndPermission\ImportRoleController;
use App\Http\Controllers\RoleAndPermission\PermissionController;
use App\Http\Controllers\RoleAndPermission\RoleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
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
    return view('auth/login');
});

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', function () {
        return view('home', ['users' => User::get(),]);
    });
    //user list

    Route::prefix('user-management')->group(function () {
        Route::resource('user', UserController::class);
        Route::post('import', [UserController::class, 'import'])->name('user.import');
        Route::get('export', [UserController::class, 'export'])->name('user.export');
        Route::get('demo', DemoController::class)->name('user.demo');
    });

    Route::prefix('menu-management')->group(function () {
        Route::resource('menu-group', MenuGroupController::class);
        Route::resource('menu-item', MenuItemController::class);
    });
    Route::group(['prefix' => 'role-and-permission'], function () {
        //role
        Route::resource('role', RoleController::class);
        Route::get('role/export', ExportRoleController::class)->name('role.export');
        Route::post('role/import', ImportRoleController::class)->name('role.import');

        //permission
        Route::resource('permission', PermissionController::class);
        Route::get('permission/export', ExportPermissionController::class)->name('permission.export');
        Route::post('permission/import', ImportPermissionController::class)->name('permission.import');

        //assign permission
        Route::get('assign', [AssignPermissionController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignPermissionController::class, 'create'])->name('assign.create');
        Route::get('assign/{role}/edit', [AssignPermissionController::class, 'edit'])->name('assign.edit');
        Route::put('assign/{role}', [AssignPermissionController::class, 'update'])->name('assign.update');
        Route::post('assign', [AssignPermissionController::class, 'store'])->name('assign.store');

        //assign user to role
        Route::get('assign-user', [AssignUserToRoleController::class, 'index'])->name('assign.user.index');
        Route::get('assign-user/create', [AssignUserToRoleController::class, 'create'])->name('assign.user.create');
        Route::post('assign-user', [AssignUserToRoleController::class, 'store'])->name('assign.user.store');
        Route::get('assing-user/{user}/edit', [AssignUserToRoleController::class, 'edit'])->name('assign.user.edit');
        Route::put('assign-user/{user}', [AssignUserToRoleController::class, 'update'])->name('assign.user.update');
    });
});

Route::get('/page', function(){
    return view('home.home');
});

Route::get('/page-red', function(){
    return view('home.home-red');
});

// admin
// roles 
Route::get('/role/create', function(){
    return view('admin.roles.create');
});

Route::get('/role', function(){
    $users = User::paginate(0);
    return view('admin.roles.index', compact('users'));
});

Route::get('/role/edit/{id}', function(){
    return view('admin.roles.edit');
});

// users
Route::get('/user/create', function(){
    return view('admin.users.create');
});

Route::get('/user', function(){
    $users = User::paginate(0);
    return view('admin.users.index', compact('users'));
});

Route::get('/user/edit/{id}', function(){
    $user = User::find(1);
    return view('admin.users.edit', compact('user'));
});

// vaccine
Route::get('/vaccine/create', function(){
    return view('admin.vaccines.create');
});

Route::get('/vaccine', function(){
    $users = User::paginate(0);
    return view('admin.vaccines.index', compact('users'));
});

Route::get('/vaccine/edit/{id}', function(){
    return view('admin.vaccines.edit');
});


// staff
Route::get('/baby/create', function(){
    return view('staff.babies.create');
});

Route::get('/baby', function(){
    $users = User::paginate(0);
    return view('staff.babies.index', compact('users'));
});

Route::get('/baby/edit/{id}', function(){
    return view('staff.babies.edit');
});

// imunization
Route::get('/imunization/create', function(){
    return view('staff.imunizations.create');
});

Route::get('/imunization', function(){
    $users = User::paginate(0);
    return view('staff.imunizations.index', compact('users'));
});

Route::get('/imunization/edit/{id}', function(){
    return view('staff.imunizations.edit');
});
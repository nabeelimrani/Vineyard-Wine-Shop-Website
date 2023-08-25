<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User login routes
Route::post('/user/login', [App\Http\Controllers\UserLoginController::class, 'login'])->name('user.login');

Route::get('/blog/table',[SettingController::class,'blogtable'])->name('blog.table');
Route::post('/delete/blog',[SettingController::class,'deleteblog']);
Route::post('/edit/blog',[SettingController::class,'blogedit']);
Route::post('/update/blog',[SettingController::class,'blogupdate'])->name('blog.update');


Route::get('/winecategory/table',[SettingController::class,'winecategorytable'])->name('winecategory.table');
Route::post('/delete/winecategory',[SettingController::class,'deletewinecategory']);
Route::post('/edit/winecategory',[SettingController::class,'winecategoryedit']);
Route::post('/update/winecategory',[SettingController::class,'winecategoryupdate'])->name('winecategory.update');


Route::get('/wine/table',[SettingController::class,'winetable'])->name('wine.table');
Route::post('/delete/wines',[SettingController::class,'deletewine']);
Route::post('/edit/wine',[SettingController::class,'wineedit']);
Route::post('/update/wine',[SettingController::class,'wineupdate'])->name('wine.update');


Route::get('/contact/table',[SettingController::class,'contacttable'])->name('contacttable');
Route::post('/change/status',[SettingController::class,'changestatus'])->name('changestatus');








Route::get('/', [SettingController::class, 'index']);
Route::get('/login',function(){
    return view('Front-End.login');
});

Route::get('/admin/dashboard', [SettingController::class, 'admin_dashboard'])->name('admin.dashboard');


Route::get('/aboutus', [SettingController::class, 'aboutus']);

Route::get('/contact', function () {
    return view('contactus');
});



Route::get('/shopdetail', function () {
    return view('shop-detail');
});





Route::get('/register', [SettingController::class, 'registerform']);


Route::get('/blogs', [SettingController::class, 'blogform']);


Route::get('/winecategories', [SettingController::class, 'winecategories']);

Route::get('/wine/form', [SettingController::class, 'wineformshow']);
Route::get('/wine', [SettingController::class, 'wineshow']);

Route::post('/settings/create', [SettingController::class, 'settingcreate'])->name('settings.create');
Route::post('/blogs/create', [SettingController::class, 'blogcreate'])->name('blog.create');

Route::get('/contact', [SettingController::class, 'contact']);



Route::get('/blog', [SettingController::class, 'blogshow']);
Route::get('/blog/detail/{id}', [SettingController::class, 'blogdetail']);

Route::post('/contact/form', [SettingController::class, 'contactform']);

Route::post('/wine/category/submit', [SettingController::class, 'winecategorycreate']);

Route::post('/wine/submit', [SettingController::class, 'winecreate']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

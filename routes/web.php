<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

route::get('/students', function(){
    return view('students'); 
});
route::get('/teacher', function(){
    return view('teacher'); 
});

Route::get('/',[HomeController::class, 'checkUserType'])->name('checkUserType');
Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');
Route::get('/user/dashboard', function () {
    return view('user-dashboard');
})->name('user.dashboard');
Route::get('/',[StudentController::class, 'index'])->name('index');
Route::post('/create',[StudentController::class, 'create'])->name('create');

Route::get('/',[TeacherController::class, 'index'])->name('index');
Route::post('/',[TeacherController::class, 'create'])->name('create');
Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [TeacherController::class, 'update'])->name('update');
Route::get('/delete/{id}', [TeacherController::class, 'destroy'])->name('destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

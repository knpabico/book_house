<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/redirect', function () {
    $role = auth()->user()->role;
    return match ($role) {
        'admin' => redirect()->route('admin.dashboard'),
        'staff' => redirect()->route('staff.dashboard'),
        default => redirect()->route('student.dashboard'),
    };
})->middleware(['auth']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //Book Management
    Route::get('/admin/create-book', [BookController::class, 'create_book'])->name('admin.create-book');
    Route::post('/admin/store-book', [BookController::class, 'store_book'])->name('admin.store-book');
    Route::get('/admin/edit-book/{book}', [BookController::class, 'edit_book'])->name('admin.edit-book');
    Route::put('/admin/update-book/{book}', [BookController::class, 'update_book'])->name('admin.update-book');
    Route::delete('/admin/delete-book/{book}', [BookController::class, 'delete_book'])->name('admin.delete-book');

    //User (Staff) Management
    Route::get('/admin/staff-list', [StaffController::class, 'staff_list'])->name('admin.staff-list');
    Route::get('/admin/create-staff', [StaffController::class, 'create_staff'])->name('admin.create-staff');
    Route::post('/admin/store-staff', [StaffController::class, 'store_staff'])->name('admin.store-staff');
    Route::get('/admin/edit-staff/{staff}', [StaffController::class, 'edit_staff'])->name('admin.edit-staff');
    Route::put('/admin/update-staff/{staff}', [StaffController::class, 'update_staff'])->name('admin.update-staff');
    Route::delete('/admin/delete-staff/{staff}', [StaffController::class, 'delete_staff'])->name('admin.delete-staff');

    //User (Student) Management
    Route::get('/admin/student-list', [StudentController::class, 'student_list'])->name('admin.student-list');
    Route::delete('/admin/delete-student/{student}', [StudentController::class, 'delete_student'])->name('admin.delete-student');

});

Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');

    //Book Management
    Route::get('/staff/edit-book/{book}', [BookController::class, 'staff_edit_book'])->name('staff.edit-book');
    Route::put('/staff/update-book/{book}', [BookController::class, 'staff_update_book'])->name('staff.update-book');

    Route::get('/staff/student-list', [StudentController::class, 'staff_student_list'])->name('staff.student-list');
});

Route::middleware(['auth', 'role:student'])->get('/student/dashboard', [BookController::class, 'student_view'])->name('student.dashboard');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
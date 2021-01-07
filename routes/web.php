<?php
# @Date:   2020-11-16T14:46:15+00:00
# @Last modified time: 2021-01-05T13:47:57+00:00



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Patient\VisitController as PatientVisitController;
use App\Http\Controllers\Admin\VisitController as AdminVisitController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\PatientController as AdminPatientController;

use App\Http\Controllers\Patient\HomeController as PatientHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Doctor\HomeController as DoctorHomeController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Auth::routes(['verify' => true]);
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/doctor/home', [DoctorHomeController::class, 'index'])->name('doctor.home');
Route::get('/patient/home', [PatientHomeController::class, 'index'])->name('patient.home');

Route::get('/patient/visits', [PatientVisitController::class, 'index'])->name('patient.visits.index');
Route::get('/patient/visits/{id}', [PatientVisitController::class, 'show'])->name('patient.visits.show');

Route::get('/admin/visits', [AdminVisitController::class, 'index'])->name('admin.visits.index');
Route::get('/admin/visits/create', [AdminVisitController::class, 'create'])->name('admin.visits.create');
Route::get('/admin/visits/{id}', [AdminVisitController::class, 'show'])->name('admin.visits.show');
Route::post('/admin/visits/store', [AdminVisitController::class, 'store'])->name('admin.visits.store');
Route::get('/admin/visits/{id}/edit', [AdminVisitController::class, 'edit'])->name('admin.visits.edit');
Route::put('/admin/visits/{id}', [AdminVisitController::class, 'update'])->name('admin.visits.update');
Route::delete('/admin/visits/{id}', [AdminVisitController::class, 'destroy'])->name('admin.visits.delete');

Route::get('/admin/doctors', [AdminDoctorController::class, 'index'])->name('admin.doctors.index');
Route::get('/admin/doctors/create', [AdminDoctorController::class, 'create'])->name('admin.doctors.create');
Route::get('/admin/doctors/{id}', [AdminDoctorController::class, 'show'])->name('admin.doctors.show');
Route::post('/admin/doctors/store', [AdminDoctorController::class, 'store'])->name('admin.doctors.store');
Route::get('/admin/doctors/{id}/edit', [AdminDoctorController::class, 'edit'])->name('admin.doctors.edit');
Route::put('/admin/doctors/{id}', [AdminDoctorController::class, 'update'])->name('admin.doctors.update');
Route::delete('/admin/doctors/{id}', [AdminDoctorController::class, 'destroy'])->name('admin.doctors.delete');

Route::get('/admin/patients', [AdminPatientController::class, 'index'])->name('admin.patients.index');
Route::get('/admin/patients/create', [AdminPatientController::class, 'create'])->name('admin.patients.create');
Route::get('/admin/patients/{id}', [AdminPatientController::class, 'show'])->name('admin.patients.show');
Route::post('/admin/patients/store', [AdminPatientController::class, 'store'])->name('admin.patients.store');
Route::get('/admin/patients/{id}/edit', [AdminPatientController::class, 'edit'])->name('admin.patients.edit');
Route::put('/admin/patients/{id}', [AdminPatientController::class, 'update'])->name('admin.patients.update');
Route::delete('/admin/patients/{id}', [AdminPatientController::class, 'destroy'])->name('admin.patients.delete');

<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Http\Controllers\AdminController;

// Public Landing Page
Route::get('/', function () {
    $projects = Project::where('is_featured', true)->orderBy('order_num')->get();
    return view('welcome', compact('projects'));
});

// Dynamic Sitemap XML
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml; charset=utf-8');
});

// Admin Authentication
Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->middleware('throttle:10,1')->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protected Admin Panel
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('home');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Projects (Önceki İşler & Portfolyo)
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('projects.store');
    Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'deleteProject'])->name('projects.delete');

    // Target Clients (Hedef Müşteri Listesi)
    Route::post('/clients', [AdminController::class, 'storeClient'])->name('clients.store');
    Route::put('/clients/{client}', [AdminController::class, 'updateClient'])->name('clients.update');
    Route::delete('/clients/{client}', [AdminController::class, 'deleteClient'])->name('clients.delete');

    // Instagram Leads (İncelenecek Instagram Hesapları)
    Route::post('/instagram', [AdminController::class, 'storeInstagram'])->name('instagram.store');
    Route::put('/instagram/{lead}', [AdminController::class, 'updateInstagram'])->name('instagram.update');
    Route::delete('/instagram/{lead}', [AdminController::class, 'deleteInstagram'])->name('instagram.delete');
});

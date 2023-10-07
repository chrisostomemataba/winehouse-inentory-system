<?php
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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Product Management
Route::resource('products', ProductController::class);

// Sales
Route::resource('sales', SalesController::class);

// Reports
Route::get('/generate-cash-account-pdf', [ReportsController::class, 'generateCashAccountPDF'])
    ->name('generate-cash-account-pdf');

Route::get('/generate-balance-sheet-pdf', [ReportsController::class, 'generateBalanceSheetPDF'])
    ->name('generate-balance-sheet-pdf');

// Routes to display the reports (add as needed)
Route::get('/cash-account-report', [ReportsController::class, 'cashAccountReport'])
    ->name('cash-account-report');

Route::get('/balance-sheet-report', [ReportsController::class, 'balanceSheetReport'])
    ->name('balance-sheet-report');

// Barcode Management
Route::get('/barcode', [BarcodeController::class, 'index'])->name('barcode.index');
Route::post('/barcode/add', [BarcodeController::class, 'addBarcode'])->name('barcode.add');

// User Profile
Route::get('/profile', [UserProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/change-password', [UserProfileController::class, 'changePassword'])->name('profile.change-password');
Route::post('/profile/update-password', [UserProfileController::class, 'updatePassword'])->name('profile.update-password');

// System Settings
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

// Authentication Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


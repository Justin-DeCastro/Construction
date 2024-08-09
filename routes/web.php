<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\InquireController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'services'])->name('service');
Route::get('booking', [HomeController::class, 'booking'])->name('booking');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('404page', [HomeController::class, 'errorpage'])->name('404page');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('consultation', [HomeController::class, 'consultation'])->name('consultation');
Route::get('design', [HomeController::class, 'design'])->name('design');
Route::get('build', [HomeController::class, 'build'])->name('build');
// Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('feedback', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('feedbackrating', [FeedbackController::class, 'store'])->name('feedbacks.store');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
//admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
Route::get('getappointment', [AdminController::class, 'appointment'])->name('getappointment');
Route::get('getquotation', [AdminController::class, 'getquotation'])->name('getquotation');
Route::get('getservices', [AdminController::class, 'getservices'])->name('getservices');
Route::post('/upload-company', [AdminServicesController::class, 'store'])->name('upload.company.details');
//quotation
Route::post('/submit-quote', [QuotationController::class, 'submitForm'])->name('quote.submit');

//appointment
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.submit');


Route::post('/inquire/submit', [InquireController::class, 'submit'])->name('inquire.submit');

//contact
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

//consultation
Route::post('/consultation-store', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('/design-store', [DesignController::class, 'store'])->name('design.store');
Route::post('/build-store', [BuildController::class, 'store'])->name('build.store');
Route::get('/getconsultation', [ConsultationController::class, 'index'])->name('getconsultation');

Route::get('/getdesign', [DesignController::class, 'index'])->name('getdesign');
Route::get('/getbuild', [BuildController::class, 'index'])->name('getbuild');
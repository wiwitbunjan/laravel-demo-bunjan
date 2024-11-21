<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WiwitsController;


Route::get('/dd', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('final_app.login');
})->name('login-form');

Route::get('/register-form', function() {
    return view('final_app.register');
})->name('register-form');

Route::middleware(['auth'])->group(function () {
    //admin routes
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {

        Route::get('/main-dashboard', function() {
            return view('final_app.dashboard');
        })->name('main-dashboard');
        
    });
    //registrar routes
    Route::middleware(['role:registrar'])->prefix('registrar')->name('registrar.')->group(function () {

        Route::get('/main-dashboard', function() {
            return view('final_app.dashboard');
        })->name('main-dashboard');
        
    });
    //faculty routes
    Route::middleware(['role:faculty'])->prefix('faculty')->name('faculty.')->group(function () {

        Route::get('/main-dashboard', function() {
            return view('final_app.dashboard');
        })->name('main-dashboard');
        
    });
});

















Route::get('home', [CalculatorController::class, 'showPage'])-> name('home');

Route::get('/addition', [CalculatorController::class, 'showAddition'])->name('addition');
Route::get('/subtraction', [CalculatorController::class, 'showSubtraction'])->name('subtraction');
Route::get('/multiplication', [CalculatorController::class, 'showMultiplication'])->name('multiply');
Route::get('/division', [CalculatorController::class, 'showDivision'])->name('division');

Route::get('/HomePage', [WiwitsController::class, 'ShowHomePage' ]);



Route::POST('/add', [CalculatorController::class, 'add'])->name('add');
Route::POST('/sub', [CalculatorController::class, 'sub'])->name('sub');
Route::POST('/multi', [CalculatorController::class, 'multi'])->name('multi');
Route::POST('/div', [CalculatorController::class, 'div'])->name('div');



Route::get('/showlogin', function () {
    return view('MymiddlewareDemo.login');
})->name('login_Form');

Route::post('/showlogin', function () {
    return view('MymiddlewareDemo.login');
})->middleware('login.middleware');


Route::get('/show/dashboard', function () {
    return view('MymiddlewareDemo.dashboard ');
})->name('gotodashboard');




Route::get('/dashboard', function () {
    return view('dashboard');
     })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

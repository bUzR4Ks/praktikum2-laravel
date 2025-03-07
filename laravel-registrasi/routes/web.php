<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::post('/submit', [RegisterController::class, 'submit']);
Route::view('/register', 'register');
?>
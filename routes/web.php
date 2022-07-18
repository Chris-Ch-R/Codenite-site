<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/question', function () {
        return view('question');
    })->name('question');

    // Route::get('question', [\App\Http\Controllers\QuestionController::class, 'create'])->name("question-collection");
    Route::get('question/{collection}', [\App\Http\Controllers\QuestionController::class, 'qCollection'])->name("question-collection");
    Route::get('question/{collection}/{id}', [\App\Http\Controllers\QuestionController::class, 'qData'])->name("question-data");
    Route::get('question-add/{collection}', [\App\Http\Controllers\QuestionController::class, 'create'])->name("question-add");
    Route::post('question/store/{collection}', [\App\Http\Controllers\QuestionController::class, 'store'])->name("question-store");
    Route::get('question/delete/question/{id}', [\App\Http\Controllers\QuestionController::class, 'destroy'])->name("question-delete");
    Route::get('question-edit/{id}', [\App\Http\Controllers\QuestionController::class, 'edit'])->name("question-edit");
    Route::post('question-update/{id}', [\App\Http\Controllers\QuestionController::class, 'update'])->name("question-update");




});
require __DIR__.'/auth.php';

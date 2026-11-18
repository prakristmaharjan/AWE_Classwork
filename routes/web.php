<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BookController;
use App\Models\Book;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return "Coming soon";
});

Route::get('/test', [TestController::class, 'index']);
Route::get('/test1', [TestController::class, 'testing']);

// Getting data from the Database and using it in the blade
Route::get("/books",[BookController::class, "index"]);
Route::get("/addbook",[BookController::class, "create"]);
Route::post("/addbook",[BookController::class, "store"]);
// route wildcards
Route::delete('/books/{id}/delete',[BookController::class, "destroy"]);

Route::get("/books/{id}",[BookController::class,"show"]);   
Route::get("/books/{id}/edit",[BookController::class,"edit"]);   

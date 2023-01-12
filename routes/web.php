<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

/**
 * GET - Request a resource
 * POST - create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 * OPTIONS - Ask the server which verbs are allowed
 */

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/1', [PostsController::class, 'show']);

// POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

// PUT or PATCH
Route::get('/blog/edit/1', [PostsController::class, 'edit']);
Route::post('/blog/1', [PostsController::class, 'update']);

// DELETE
Route::delete('/blog/1', [PostsController::class, 'destroy']);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

// Return view
// Route::view('/blog', 'blog.index', ['name' => 'Coding with maMan the big D-David']);

//Route::resource('blog', PostsController::class);

//route for the invoke method
Route::get('/', HomeController::class);
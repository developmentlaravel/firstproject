<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Route::mediaLibrary();

Route::get('/', [App\Http\Controllers\ListarticlesController::class,'index'])->name('listarticles.welcome');
Route::get('/listarticles/{id}', [App\Http\Controllers\ListarticlesController::class,'show'])->name('listarticles.show');


Auth::routes();


Route::post('/tokens/create' , function(Request $request)
{
$tokens = $request->user()->createToken($request->token_name);


return ['token' => $token->plainTextToken];

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware('auth:sanctum')->get('/articles', [App\Http\Controllers\ArticlesController::class,'index'])->name('articles.index')->middleware('auth:sanctum');
Route::get('/articles', [App\Http\Controllers\ArticlesController::class,'index'])->name('articles.index');

Route::POST('/articles', [App\Http\Controllers\ArticlesController::class,'store'])->name('articles');
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class,'create']);
// Route::get('/articles/{id}', [App\Http\Controllers\ArticlesController::class,'show'])->name('articles.show');



Route::POST('/comments', [App\Http\Controllers\CommentsController::class,'store'])->name('comments');
Route::POST('/commentslike', [App\Http\Controllers\CommentsController::class,'like'])->name('commentlike');
// Route::POST('/commentsdislike', [App\Http\Controllers\CommentsController::class,'dislike'])->name('');




Route::get('/singlepage' , [App\Http\Controllers\ArticlesController::class , 'view']);

// Route::post('/likecomment/{comment}', [App\Http\Controllers\CommentsController::class,'likeComment']);
// Route::post('/dislikecomment/{comment}', [App\Http\Controllers\CommentsController::class,'disLikeComment']);
// Route::post('/my_likes', [App\Http\Controllers\CommentsController::class,'myLikes']);

// Route::post('/comments', [App\Http\Controllers\CommentsController::class,'save_likedislike']);

// Route::get('/comments/{id}',[App\Http\Controllers\CommentsController::class,'show'])->name('comments.show');

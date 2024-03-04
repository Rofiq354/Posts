<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('pages.category.index', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'category' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('pages.blog.index', [
        'title' => 'Post By Category : ' .$category->name,
        'active' => 'posts',
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});

Route::get('/authors/', function(){
    return view('pages.author.index', [
        'title' => 'Author Posts',
        'users' => User::all()
    ]);
});

Route::get('/authors/{author}', function(User $author){
    $authore = User::with('posts')->get();
    return view('pages.blog.index', [
        'title' => 'Post By Author : ' .$author->name,
        'active' => 'posts',
        'posts' => $author->posts,
        'authore' => $author
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [DashboardController::class, 'dashboard'])->middleware('auth');

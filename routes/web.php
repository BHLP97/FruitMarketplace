<?php
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\RegisterController; 
use App\Http\Controllers\WebController; 
use App\Http\Controllers\MenuController; 
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signin', [LoginController::class, 'showUserLoginForm'])->name('frontend.login-view');
Route::post('/signincred', [LoginController::class, 'userLogin'])->name('frontend.login');
Route::get('/register', [RegisterController::class, 'showUserRegisterForm'])->name('frontend.register-view');
Route::post('/registercred', [RegisterController::class, 'userRegister'])->name('frontend.register');

Route::get('/admin-signin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin-signincred',[LoginController::class,'adminLogin'])->name('admin.login');
Route::get('/admin-register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin-registercred',[RegisterController::class,'adminRegister'])->name('admin.register');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu');
        Route::get('/create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::get('/destroy/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('/{model_type}/', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/{model_type}/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/{model_type}/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{model_type}/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/{model_type}/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/{model_type}/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/store', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::post('/update/{id}', [PostController::class, 'update'])->name('admin.post.update');
        Route::get('/destroy/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });
    Route::prefix('rating')->group(function () {
        Route::get('/', [RatingController::class, 'index'])->name('admin.rating');
        Route::get('/create', [RatingController::class, 'create'])->name('admin.rating.create');
        Route::post('/store', [RatingController::class, 'store'])->name('admin.rating.store');
        Route::get('/edit/{id}', [RatingController::class, 'edit'])->name('admin.rating.edit');
        Route::post('/update/{id}', [RatingController::class, 'update'])->name('admin.rating.update');
        Route::get('/destroy/{id}', [RatingController::class, 'destroy'])->name('admin.rating.destroy');
    });
    Route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('admin.comment');
        Route::get('/create', [CommentController::class, 'create'])->name('admin.comment.create');
        Route::post('/store', [CommentController::class, 'store'])->name('admin.comment.store');
        Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.comment.edit');
        Route::post('/update/{id}', [CommentController::class, 'update'])->name('admin.comment.update');
        Route::get('/destroy/{id}', [CommentController::class, 'destroy'])->name('admin.comment.destroy');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
    Route::prefix('admin')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.admin');
        Route::get('/create', [UserController::class, 'create'])->name('admin.admin.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.admin.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.admin.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.admin.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('admin.admin.destroy');
    });
    Route::prefix('config')->group(function () {
        Route::get('/', [ConfigController::class, 'index'])->name('admin.config');
        Route::get('/create', [ConfigController::class, 'create'])->name('admin.config.create');
        Route::post('/store', [ConfigController::class, 'store'])->name('admin.config.store');
        Route::get('/edit/{id}', [ConfigController::class, 'edit'])->name('admin.config.edit');
        Route::post('/update/{id}', [ConfigController::class, 'update'])->name('admin.config.update');
        Route::get('/destroy/{id}', [ConfigController::class, 'destroy'])->name('admin.config.destroy');
    });
});

Auth::routes();

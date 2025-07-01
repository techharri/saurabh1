<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ArticleController;
// use App\Models\articles\article;
use App\Models\student;
use App\Models\banner;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::redirect('/gallery', '/');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'enquiry']);
Route::post('/contact', [HomeController::class, 'EnquiryStore']);
Route::get('/admin/students', [HomeController::class, 'EnquiryList']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/imageupload', [ArticleController::class, 'imageUpload'])->name('admin.image.upload');
Route::get('/article', [ArticleController::class, 'articlecategory'])->name('article.categories');
Route::get('/article/{name}', [ArticleController::class, 'CategoryView'])->name('article.category.show');




// model
// Route::get('/article', function ()  {
    //     $article=article::all();
    //     echo "<pre>";
    //     print_r($article->toArray());
    // });
// Admin
// Route::get('/admin', [DashboardController::class, 'dashboard']);
// Route::get('/admin/banner', [BannerController::class, 'BannerList']);
// Route::get('/admin/articlecat', [ArticleController::class, 'ArticleCatList']);
// Route::get('/admin/articlecat/del/{id}', [ArticleController::class, 'ArticleCatDel'])->name('admin.articlecatdel');
// Route::get('/admin/articlecat/create', [ArticleController::class, 'ArticleCatCreate'])->name('admin.articlecatcreate');
// Route::get('/admin/article', [ArticleController::class, 'ArticleList'])->name('admin.article_list');
// Route::get('/admin/article/create', [ArticleController::class, 'ArticleCreate'])->name('admin.articlecreate');
// Route::post('/admin/article/store', [ArticleController::class, 'ArticleStore'])->name('admin.articlestore');
// Route::get('/admin/article/edit/{id}', [ArticleController::class, 'ArticleEdit'])->name('admin.articleedit');
// Route::put('/admin/article/update/{id}', [ArticleController::class, 'ArticleUpdate'])->name('admin.article_update');
// Route::get('/admin/article/del/{id}', [ArticleController::class, 'ArticleDel'])->name('admin.articledel');

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('banner', [BannerController::class, 'BannerList'])->name('admin.bannerlist');
    Route::get('articlecat', [ArticleController::class, 'ArticleCatList'])->name('admin.articlecat');
    Route::get('articlecat/del/{id}', [ArticleController::class, 'ArticleCatDel'])->name('admin.articlecatdel');
    Route::get('articlecat/create', [ArticleController::class, 'ArticleCatCreate'])->name('admin.articlecatcreate');
    Route::get('article', [ArticleController::class, 'ArticleList'])->name('admin.article_list');
    Route::get('article/create', [ArticleController::class, 'ArticleCreate'])->name('admin.articlecreate');
    Route::post('article/store', [ArticleController::class, 'ArticleStore'])->name('admin.articlestore');
    Route::get('article/edit/{id}', [ArticleController::class, 'ArticleEdit'])->name('admin.articleedit');
    Route::put('article/update/{id}', [ArticleController::class, 'ArticleUpdate'])->name('admin.article_update');
    Route::get('article/del/{id}', [ArticleController::class, 'ArticleDel'])->name('admin.articledel');
    Route::get('file', [ArticleController::class, 'FileLink'])->name('admin.file');
    Route::post('file', [ArticleController::class, 'store'])->name('admin.file');
});


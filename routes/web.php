<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticlesController;
use \App\Http\Controllers\AjaxController;
use \App\Http\Controllers\CommentsController;


//Главная страница
Route::get('/', [ArticlesController::class,'index'])->name('index');
//Все статьи
Route::get('/articles', [ArticlesController::class,'allArticles'])->name('articles');
//Одна статья
Route::get('/articles/{slug}', [ArticlesController::class,'oneArticle'])->name('oneArticle');

//Счетчик посещений
Route::post('/ajaxview/{slug}', [AjaxController::class,'incrementView'])->name('incrementView');
//Счетчик лайков
Route::post('/ajaxlike/{slug}', [AjaxController::class,'incrementLike'])->name('incrementLike');
//Комментарии
Route::post('/сomment/{slug}', [CommentsController::class,'comment'])->name('comment');

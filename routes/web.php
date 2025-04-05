<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BlogController,
    LoginController,
    RegisterController,
    AboutController,
    PublishController,
    ArticleController,
};
use App\Http\Middleware\CheckPublishPageAccessAlowed;

Route::get("/", [BlogController::class, "blog"])->name("blog");
Route::get("/login", [LoginController::class, "login"])->name("login");
Route::post("/login", [LoginController::class, "auth"])->name("login.auth");
Route::post("/logout", [LoginController::class, "logout"])->name("logout");
Route::get("/register", [RegisterController::class, "register"])->name("register");
Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::get("/about", [AboutController::class, "about"])->name("about");
Route::get("/publish", [PublishController::class, "publish"])->name("publish")->middleware(CheckPublishPageAccessAlowed::class);
Route::post("/publish", [PublishController::class, "store"])->name("publish.store")->middleware(CheckPublishPageAccessAlowed::class);
Route::get("articles/{slug}", [ArticleController::class, "show"])->name("article.show");
Route::post("articles/{slug}", [ArticleController::class, "store"])->name("article.store");

<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    require __DIR__.'/v1/posts.php';
    require __DIR__.'/v1/auth.php';
});
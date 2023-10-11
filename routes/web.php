<?php

use Nicelizhi\Message\Http\Controllers\MessageController;

Route::get('laravel-admin-message', MessageController::class.'@index');
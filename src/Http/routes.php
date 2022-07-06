<?php

use Fitop\TagsInput\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('tags-input', Controllers\TagsInputController::class.'@index');
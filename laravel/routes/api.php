<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseCategoryController;
use App\Http\Controllers\Api\CourseController;

Route::apiResource('categories', CourseCategoryController::class);
Route::apiResource('courses', CourseController::class);

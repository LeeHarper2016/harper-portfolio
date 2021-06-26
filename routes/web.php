<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TextComponentController;

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

Route::get('/', [HomeController::class, 'view']);

Route::post('/login', [AuthController::class, 'logInUser']);

Route::post('/component/text', [TextComponentController::class, 'store']);

Route::post('/positions', [PositionController::class, 'store']);

Route::post('/skills', [SkillController::class, 'store']);

Route::get('/api/positions', [PositionController::class, 'viewJson']);
Route::get('/api/skills', [SkillController::class, 'viewJson']);
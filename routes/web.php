<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

Route::post('/login', [AuthController::class, 'logInUser'])->middleware(['throttle:login']);
Route::get('/logout', [AuthController::class, 'logOutUser']);

Route::post('/component/text', [TextComponentController::class, 'store'])->middleware(['can:create,App\Models\TextComponent']);
Route::patch('/component/text/{component}', [TextComponentController::class, 'update'])->middleware(['can:update,component']);

Route::post('/positions', [PositionController::class, 'store'])->middleware(['can:create,App\Models\Position']);

Route::post('/skills', [SkillController::class, 'store'])->middleware(['can:create,App\Models\Skill']);;
Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->middleware(['can:delete,skill']);;

Route::post('/contact', [ContactController::class, 'sendMail'])->middleware('throttle:contact');

Route::get('/api/positions', [PositionController::class, 'viewJson'])->middleware(['can:viewAny,App\Models\Position']);;
Route::get('/api/skills', [SkillController::class, 'viewJson'])->middleware(['can:viewAny,App\Models\Skill']);;
<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminComentarioController;
use App\Http\Controllers\Admin\AdminJuegoController;
use App\Http\Controllers\Admin\AdminJuegoFavController;
use App\Http\Controllers\Admin\AdminNoticiaController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;


//Aplicación Admin


//HomeController routing
Route::middleware('admin')->get('/admin', [AdminHomeController::class, 'index']);


//AdminAuthController routing
Route::middleware('admin')->get('/admin/logout', [AdminAuthController::class, 'logout']);


//AdminUserController routing
Route::middleware('admin')->get('admin/usuarios', [AdminUserController::class, 'index']);
Route::middleware('admin')->get('admin/user/add', [AdminUserController::class, 'create']);
Route::middleware('admin')->post('admin/user/add', [AdminUserController::class, 'add']);
Route::middleware('admin')->get('admin/user/{user}', [AdminUserController::class, 'show']);
Route::middleware('admin')->get('admin/user/edit/{user}', [AdminUserController::class, 'edit']);
Route::middleware('admin')->post('admin/user/edit/{user}', [AdminUserController::class, 'editar']);
Route::middleware('admin')->delete('admin/user/delete/{user}', [AdminUserController::class, 'delete']);


//AdminNoticiaController routing
Route::middleware('admin')->get('admin/news', [AdminNoticiaController::class, 'index']);
Route::middleware('admin')->get('admin/new/add', [AdminNoticiaController::class, 'create']);
Route::middleware('admin')->post('admin/new/add', [AdminNoticiaController::class, 'add']);
Route::middleware('admin')->get('admin/new/{new}', [AdminNoticiaController::class, 'show']);
Route::middleware('admin')->get('admin/new/edit/{new}', [AdminNoticiaController::class, 'edit']);
Route::middleware('admin')->post('admin/new/edit/{new}', [AdminNoticiaController::class, 'editar']);
Route::middleware('admin')->delete('admin/new/delete/{new}', [AdminNoticiaController::class, 'delete']);


//AdminJuegoController routing
Route::middleware('admin')->get('admin/games', [AdminJuegoController::class, 'index']);
Route::middleware('admin')->get('admin/game/add', [AdminJuegoController::class, 'create']);
Route::middleware('admin')->post('admin/game/add', [AdminJuegoController::class, 'add']);
Route::middleware('admin')->get('admin/game/{game}', [AdminJuegoController::class, 'show']);
Route::middleware('admin')->get('admin/game/edit/{game}', [AdminJuegoController::class, 'edit']);
Route::middleware('admin')->post('admin/game/edit/{game}', [AdminJuegoController::class, 'editar']);
Route::middleware('admin')->delete('admin/game/delete/{game}', [AdminJuegoController::class, 'delete']);

//AdminComentarioController routing
Route::middleware('admin')->get('admin/user/comments/{user}', [AdminComentarioController::class, 'index']);
Route::middleware('admin')->get('admin/comment/add', [AdminComentarioController::class, 'create']);
Route::middleware('admin')->post('admin/comment/add', [AdminComentarioController::class, 'add']);
Route::middleware('admin')->get('admin/comment/{comentario}', [AdminComentarioController::class, 'show'])->name("admincomment.show");
Route::middleware('admin')->get('admin/comment/edit/{comentario}', [AdminComentarioController::class, 'edit']);
Route::middleware('admin')->post('admin/comment/edit/{comentario}', [AdminComentarioController::class, 'editar'])->name("admincomment.editar");;
Route::middleware('admin')->delete('admin/comment/delete/{comentario}', [AdminComentarioController::class, 'delete']);

//AdminJuegoUserController routing
Route::middleware('admin')->get('admin/user/gamesfav/{user}', [AdminJuegoFavController::class, 'index']);
Route::middleware('admin')->get('admin/gamefav/add', [AdminJuegoFavController::class, 'create']);
Route::middleware('admin')->post('admin/gamefav/add', [AdminJuegoFavController::class, 'add']);
Route::middleware('admin')->get('admin/gamefav/{juego}', [AdminJuegoFavController::class, 'show'])->name("adminjuego_fav.show");
Route::middleware('admin')->get('admin/gamefav/edit/{juego}', [AdminJuegoFavController::class, 'edit']);
Route::middleware('admin')->post('admin/gamefav/edit/{juego}', [AdminJuegoFavController::class, 'editar'])->name("adminjuego_fav.editar");;
Route::middleware('admin')->delete('admin/gamefav/delete/{juego}', [AdminJuegoFavController::class, 'delete']);

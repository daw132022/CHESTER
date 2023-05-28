<?php


use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/




Route::get('/', [PagesController::class, 'home']);
Route::get('/carta', [PagesController::class, 'carta']);
Route::get('/contacto', [PagesController::class, 'contacto']);


//UserController routing


Route::middleware('auth')->group(function () {
    // Route::post('comentarios', [UserController::class, 'addComment'])->name('comentarios.add');
    Route::post('noticia/add-comment', [UserController::class, 'addComment'])->name('noticia.add-comment');
    Route::get('perfil/{user}', [UserController::class, 'perfil'])->name('perfil');
    Route::get('perfil/edit/{user}', [UserController::class, 'edit']);
    Route::post('perfil/edit/{user}', [UserController::class, 'editar']);

});


/*Route::post('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/users', [UserController::class, 'listUser'])->middleware(['auth']);
Route::get('user/{user}/comentarios', [UserController::class, 'listComentario'])->middleware(['auth']);
Route::get('user/{user}/juegos', [UserController::class, 'listJuegos_favs'])->middleware(['auth']);
Route::put('user/{user}', [UserController::class, 'update_user'])->middleware(['auth']);
Route::delete('user/{user}', [UserController::class, 'delete_user'])->middleware(['auth']);
Route::put('user/{user}/comentario/{comentario}', [UserController::class, 'update_comentario_user'])->middleware(['auth']);
Route::delete('user/{user}/comentario/{comentario}', [UserController::class, 'delete_comentario_user'])->middleware(['auth']);*/


//ComentarioController routing

//Route::post('comentario',  [ComentarioController::class, 'store']);
Route::post('comentarios', [ComentarioController::class, 'store']);
Route::get('/comentarios/{comentario}/edit', [ComentarioController::class, 'edit'])->name('comentarios.edit');
Route::put('/comentarios/{id}', [ComentarioController::class, 'update'])->name('comentarios.update');
Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentarios.destroy');


//NoticiaController routing

Route::get('noticias/search', [NoticiaController::class, 'search']);
Route::post('noticia', [NoticiaController::class, 'store']);
Route::get('noticias',  [NoticiaController::class, 'listNoticias']);
Route::get('noticia/show/{noticia}', [NoticiaController::class, 'show']);




//JuegoController routing

Route::get('juegos/search', [JuegoController::class, 'search']);
Route::post('juego', [JuegoController::class, 'store']);
Route::get('juegos', [JuegoController::class, 'listJuegos']);
Route::get('juego/show/{juego}', [JuegoController::class, 'show']);
Route::get('juego/show/{juego}', [JuegoController::class, 'show']);
Route::get('juego/favorito/{juego}', [JuegoController::class, 'marcarFavorito']);





require __DIR__.'/auth.php';

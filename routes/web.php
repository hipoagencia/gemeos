<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebsiteController;

/*
|--------------------------------------------------------------------------
| Rotas do site sem estar logado
|--------------------------------------------------------------------------
*/

//Route::get('/', [WebsiteController::class, 'blog'])->name('web.home');

//Route::get('/', function(){
//    return view('web.index');
//});

Route::get('/', [WebsiteController::class, 'home'])->name('web.index');

Route::get('/inicio', [WebsiteController::class, 'index'])->name('web.home');

Route::get('/veiculos/{category?}/{min?}/{max?}', [WebsiteController::class, 'stock'])->name('web.stock');
Route::get('/veiculo/{slug}', [WebsiteController::class, 'stockOpen'])->name('web.stockOpen');
Route::get('/impressao/{slug}', [WebsiteController::class, 'stockPrint'])->name('web.stockPrint');

Route::get('/sobre', [WebsiteController::class, 'about'])->name('web.about');
Route::get('/unidade', [WebsiteController::class, 'units'])->name('web.units');
Route::get('/fale-conosco', [WebsiteController::class, 'contact'])->name('web.contact');





/*
|--------------------------------------------------------------------------
| Rotas de Cadastro, login e Esqueci a Senha
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/loginRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas de Usuários Logados
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/userLoggedRoutes.php');


/*
|--------------------------------------------------------------------------
| Rotas Administrativas
|--------------------------------------------------------------------------
*/

Route::group([], __DIR__.'/adminRoutes.php');


/*
|--------------------------------------------------------------------------
| Rota de Sistema (não modificar)
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'is_admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


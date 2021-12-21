<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebsiteController;

/*
|--------------------------------------------------------------------------
| Rotas do site sem estar logado
|--------------------------------------------------------------------------
*/

Route::get('/', [WebsiteController::class, 'blog'])->name('web.home');

Route::get('/teste', function () {
    return view('web.teste');
})->name('web.teste');

Route::get('/blog', function () {
    return view('web.blog');
})->name('web.blog');

//Rotas BLOG
Route::get('blog', [WebsiteController::class, 'blog'])->name('web.blog');
Route::get('artigo/{category}/{slug}', [WebsiteController::class, 'post'])->name('web.post');
Route::get('blog/{category}', [WebsiteController::class, 'blog'])->name('web.category');

//Rotas Imóvel
Route::get('imovel/{propertycode}/{slug}', [WebsiteController::class, 'property'])->name('web.property');

//Rota Newsletter
Route::post('newsletter-store', [\App\Http\Controllers\Web\NewsletterController::class, 'store'])->name('newsletter.store');








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


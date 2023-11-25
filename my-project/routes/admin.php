
<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminController; // cridem al controlador d'Admin


    Route::middleware(['admin_db'])-> group(function(){
        Route::get('/centres', [AdminController::class,'centres'])-> name('centres'); // li posem com a nom centres per si en un futur s'ha de canviar
        Route::get('/alumnat',[AdminController::class,'alumnat'])-> name('alumnat');
        Route::get('/professorat',[AdminController::class,'professorat'])->name('professorat');
        Route::post('/admin_view', [AdminController::class,'usuaris'])-> name('admin_view'); //ruta per entrar a la view des del formulari
        Route::get('/admin_view', [AdminController::class,'usuarisget'])-> name('admin_view');
        
    });


?>
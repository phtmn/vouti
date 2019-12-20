<?php

/**
 * Cabo Area
 */
Route::prefix('painel/cabo-eleitoral')->group(function() {

  /**
   * Public Routes
   */
  Route::middleware('guest.cabo')->group(function() {
    // Login
    Route::get('/acessar', 'Cabo\Session\SessionController@showLoginForm')->name('cabo.session.login');
    Route::post('/acessar', 'Cabo\Session\SessionController@authenticate')->name('cabo.session.authenticate');

    // // Reset Password
    Route::get('/esqueci-minha-senha', 'Cabo\Session\ForgotPasswordController@showLinkRequestForm')->name('cabo.password.forgot');
    Route::post('/esqueci-minha-senha', 'Cabo\Session\ForgotPasswordController@sendResetLinkEmail')->name('cabo.password.processForgot');

  });

  /**
   * Protected Routes
   */ 

   // colocar o namespace - cabo
  Route::middleware(['auth.cabo:cabo'])->group(function(){

    // Logout
    Route::get('/sair', 'Cabo\Session\SessionController@logout')->name('cabo.session.logout');

    // Dashboard
    Route::get('/', 'Cabo\DashboardController@index')->name('dashboard.index');

    // Eleitor
    Route::get('/eleitor', 'Cabo\EleitorController@index')->name('eleitor.index');
    Route::get('/eleitor/create', 'Cabo\EleitorController@create')->name('eleitor.create');    
    Route::post('/eleitor','Cabo\EleitorController@store')->name('eleitor.store');
    Route::get('/eleitor/{id}/edit', 'Cabo\EleitorController@edit')->name('eleitor.edit');
    Route::put('/eleitor/{id}', 'Cabo\EleitorController@update')->name('eleitor.update');
    Route::delete('/eleitor/{id}', 'Cabo\EleitorController@destroy')->name('eleitor.destroy');


    // Locais de Votação = \pontar para o mesmo controller do admin?
    Route::get('/local_votacao', 'Cabo\LocalVotacaoController@index')->name('local_votacao.index');
    Route::get('/local_votacao/create', 'Cabo\LocalVotacaoController@create')->name('local_votacao.create');


    Route::post('/local_votacao','Cabo\LocalVotacaoController@store')->name('local_votacao.store');
    Route::get('/local_votacao/{id}/edit', 'Cabo\LocalVotacaoController@edit')->name('local_votacao.edit');
    Route::put('/local_votacao/{id}', 'Cabo\LocalVotacaoController@update')->name('local_votacao.update');
    Route::delete('/local_votacao/{id}', 'Cabo\LocalVotacaoController@destroy')->name('local_votacao.destroy');


    });

});

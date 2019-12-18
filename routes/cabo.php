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
    Route::name('cabo.session.login')->get('/acessar', 'Cabo\Session\SessionController@showLoginForm');
    Route::name('cabo.session.authenticate')->post('/acessar', 'Cabo\Session\SessionController@authenticate');

    // // Reset Password
    Route::name('cabo.password.forgot')->get('/esqueci-minha-senha', 'Cabo\Session\ForgotPasswordController@showLinkRequestForm');
    Route::name('cabo.password.processForgot')->post('/esqueci-minha-senha', 'Cabo\Session\ForgotPasswordController@sendResetLinkEmail');

  });

  /**
   * Protected Routes
   */
  Route::middleware(['auth.cabo:cabo'])->group(function(){

    // Logout
    Route::get('/sair', 'Cabo\Session\SessionController@logout')->name('cabo.session.logout');

    // Dashboard
    Route::get('/', 'Cabo\DashboardController@index')->name('dashboard.index');

    // Eleitor
    Route::get('/eleitor', 'Cabo\EleitorController@index')->name('eleitor.index');
    Route::get('/eleitor/create', 'Cabo\EleitorController@create')->name('eleitor.create');    
    Route::post('/eleitor','Cabo\EleitorController@store')->name('eleitor.store');


    // Locais de Votação = \pontar para o mesmo controller do admin?
    Route::get('/local_votacao', 'Cabo\Eleitor\LocalVotacaoController@index')->name('local_votacao.index');
    Route::get('/local_votacao/create', 'Cabo\Eleitor\LocalVotacaoController@create')->name('local_votacao.create');


    });

});

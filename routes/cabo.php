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
    Route::name('cabo.session.logout')->get('/sair', 'Cabo\Session\SessionController@logout');

    // Dashboard
    Route::name('cabo.dashboard.index')->get('/', 'Cabo\Dashboard\DashboardController@index');

    });

});

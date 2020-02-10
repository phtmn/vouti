<?php

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/home', 'HomeController@index')->name('home'); //apagar
// Route::view('/contato', 'site.paginas.contato')->name('contato'); //apagar

Route::group(['prefix'=>'painel','namespace'=>'Site'],function(){
    
    Route::get('/','DashboardController@painel')->name('painel');
    
    // Route::group(['middleware'=>'can:empresa'],function(){
    //     // Route::resource('empresa-trabalhadores','TrabalhadorController');
    //     // Route::resource('empresa-ocorrencias','OcorrenciaController');
    //     // Route::get('segunda-via','EmpresaController@segundaVia')->name('segundaVia');
    //     // Route::get('/boleto/{id}','EmpresaController@segundaViaBoleto')->name('segundaViaBoleto');
    //     // Route::get('empresa-trabalhadores/{id}/create', 'TrabalhadorController@create')->name('site.trabalhador.create');
    // });
    
});


Route::group(['middleware'=> ['auth', 'check.permission'],'prefix'=>'admin','namespace'=>'Admin'],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');    
    
    Route::get('campanha','CampanhaController@index')->name('campanha.index');
    Route::get('campanha/create','CampanhaController@create')->name('campanha.create');
    Route::post('campanha','CampanhaController@store')->name('campanha.store');
    Route::get('campanha/{id}/edit', 'CampanhaController@edit')->name('campanha.edit');
    Route::put('campanha/{id}', 'CampanhaController@update')->name('campanha.update');
    Route::delete('campanha/{id}', 'CampanhaController@destroy')->name('campanha.destroy');

    Route::get('candidato','CandidatoController@index')->name('candidato.index');
    Route::get('candidato/create','CandidatoController@create')->name('candidato.create');
    Route::post('candidato','CandidatoController@store')->name('candidato.store');
    Route::get('candidato/{id}/edit', 'CandidatoController@edit')->name('candidato.edit');
    Route::put('candidato/{id}', 'CandidatoController@update')->name('candidato.update');
    Route::delete('candidato/{id}', 'CandidatoController@destroy')->name('candidato.destroy');

    Route::get('cabo_eleitoral','CaboEleitoralController@index')->name('cabo_eleitoral.index');
    Route::get('cabo_eleitoral/create','CaboEleitoralController@create')->name('cabo_eleitoral.create');
    Route::post('cabo_eleitoral','CaboEleitoralController@store')->name('cabo_eleitoral.store');
    Route::get('cabo_eleitoral/{id}/edit', 'CaboEleitoralController@edit')->name('cabo_eleitoral.edit');
    Route::put('cabo_eleitoral/{id}', 'CaboEleitoralController@update')->name('cabo_eleitoral.update');
    Route::delete('cabo_eleitoral/{id}', 'CaboEleitoralController@destroy')->name('cabo_eleitoral.destroy');    


    Route::get('local_votacao','LocalVotacaoController@index')->name('local_votacao.index');
});





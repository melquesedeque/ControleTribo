<?php

// User
Route::get('/', 'UserController@telaLogin')->name('telaLogin');
Route::post('/Autenticar-login', 'UserController@autenticarLogin')->name('loginAutenticar');
Route::get('/Deslogar', 'UserController@deslogar')->name('deslogar');

// Tribo
Route::get('/form-tribo', 'TriboController@telaCadastro')->name('telaCadastro');
Route::post('/CadastrarTribo', 'TriboController@cadastroTribo')->name('CadastroTribo');
Route::get('/TelaEditar/{idTribo}', 'TriboController@telaEditar')->name('telaEditar');
Route::post('/EditarTribo/{idTribo}', 'TriboController@editarTribo')->name('editarTribo');
Route::get('/DeletarTribo/{idTribo}', 'TriboController@deletarTribo')->name('deletarTribo');

// Consultas
Route::get('/Consultas', 'ConsultarTriboController@telaConsultas')->name('telaConsultas');
Route::get('/PesquisarIgreja', 'ConsultarTriboController@pesquisarIgreja')->name('pesquisarIgreja');

//Dashboard
Route::get('/PainelControler', 'DashboardController@telaPainel')->name('telaPainel');
Route::get('/Calcular', 'DashboardController@calcular')->name('calcular');

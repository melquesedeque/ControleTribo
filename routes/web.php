<?php

// User
Route::get('/', 'UserController@telaLogin')->name('telaLogin');
Route::post('/autenticar-login', 'UserController@autenticarLogin')->name('loginAutenticar');
Route::get('/deslogar', 'UserController@deslogar')->name('deslogar');

// Tribo
Route::get('/form-tribo', 'TriboController@telaCadastro')->name('telaCadastro');
Route::post('/CadastrarTribo', 'TriboController@cadastroTribo')->name('CadastroTribo');
Route::get('/TelaEditar/{idTribo}', 'TriboController@telaEditar')->name('telaEditar');
Route::post('/EditarTribo/{idTribo}', 'TriboController@editarTribo')->name('editarTribo');
Route::get('/DeletarTribo/{idTribo}', 'TriboController@deletarTribo')->name('deletarTribo');

// Consultas
Route::get('/consultas', 'ConsultarTriboController@telaConsultas')->name('telaConsultas');
Route::get('/pesquisarIgreja', 'ConsultarTriboController@pesquisarIgreja')->name('pesquisarIgreja');
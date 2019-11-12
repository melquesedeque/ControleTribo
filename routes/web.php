<?php

// User
Route::get('/', 'UserController@telaLogin')->name('telaLogin');
Route::post('/autenticar-login', 'UserController@autenticarLogin')->name('loginAutenticar');
Route::get('/deslogar', 'UserController@deslogar')->name('deslogar');

// Tribo
Route::get('/form-tribo', 'TriboController@telaCadastro')->name('telaCadastro');
Route::post('/cadastrar-tribo', 'TriboController@cadastroTribo')->name('CadastroTribo');
Route::get('/triboEditar/{idTribo}', 'TriboController@telaEditar')->name('telaEditar');

// Consultas
Route::get('/consultas', 'ConsultarTriboController@telaConsultas')->name('telaConsultas');
Route::get('/pesquisarIgreja', 'ConsultarTriboController@pesquisarIgreja')->name('pesquisarIgreja');
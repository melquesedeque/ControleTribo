<?php

Route::get('/', 'UserController@telaLogin')->name('telaLogin');
Route::post('/autenticar-login', 'UserController@autenticarLogin')->name('loginAutenticar');
Route::get('/deslogar', 'UserController@deslogar')->name('deslogar');

Route::get('/form-tribo', 'TriboController@telaCadastro')->name('telaCadastro');
Route::post('/cadastrar-tribo', 'TriboController@cadastroTribo')->name('CadastroTribo');
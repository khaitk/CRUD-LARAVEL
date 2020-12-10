<?php

Route::get('/', 'UploadImage@index');
Route::post('fileupload','UploadImage@fileupload');
Route::get('show', 'UploadImage@show');
Route::get('delete/{id}', 'UploadImage@destroy');
Route::get('update/{id}', 'UploadImage@showupdate');
Route::post('edit/{id}', 'UploadImage@edit');
Route::get('/search', 'UploadImage@search');

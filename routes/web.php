<?php
//Esta dirige a la pagina home y la vista se llama home
Route::view('/','home')->name('home');
//Esta dirige a la pagina quienes-somos que carga la vista about llamada about
Route::view('/quienes-somos','about')->name('about');

Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

//Route::get('/portafolio' , 'ProjectController@index')->name('projects.index');
//Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//Route::post('/portafolio' , 'ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

//Esta dirige a la vista contacto llamada contact
Route::view('/contacto','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');



Auth::routes(['register'=> false]);



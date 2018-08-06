<?php





Route::get('/',function(){
	return view('welcome');
})->name('index');



Route::get('/foo',function(){
	return view('foo');
})->name('foo');

Route::get('/bar',function(){
	return view('bar');
})->name('bar');


Route::get('/basic-arithmetic/{operator?}/{number1?}/{number2?}', function($operator=null,$number1=null,$number2=null){
	

	return view('/basic-arithmetic',
					array(

							'number1' => $number1,
							'number2' => $number2,
							'operator' => $operator
						 )
			  );

})->name('basic-arithmetic');

Route::get('/dasdasddsda',function(){
	return view('dasdasddsda');
})->name('dasdasddsda');


Route::get('/middleware/{age}',function($age){
	return view('age', array('age'=>$age));
});

Route::get('/pages/contact', 'PagesController@contactPage');



Route::get('/pages/middleware/{age}', 'PagesController@middlewareAgePage');


Route::get('pages/shoutout/{text}', 'PagesController@shoutoutPage')->name('shoutout');

Route::get('/crushes', 'CrushesController@index')
->name('crushes.index');


Route::get('/crushes/create', 'CrushesController@create')->name('crushes.create');


Route::post('/crushes/store', 'CrushesController@store')->name('crushes.store');


Route::get('/crushes/{id}/edit', 'CrushesController@edit')->name('crushes.id.edit');

Route::post('/crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');

Route::get('/crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');
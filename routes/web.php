<?php





Route::get('/home',function(){
	return view('home');
})->name('home');



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

Route::get('/crushes', 'CrushesController@index');
<?php


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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{

	//
    public function __contstruct()
	{
		$this->middleware('sample') ->only('misddlewaresamplePage');
	}

    
    public function middlewaresamplePage(Request $request)
    {
    	$sample = $request ->sample;
    	
    	
    	$colors = array(
						"red"   => "for passion",
						"green" => "color of nature",
						"blue"  => "it is the color of the sky",
						"white" => "pureness",
						"black" => "being bold",
						"silver" => "authentic",
						"yellow" => "warmth"

					);

    	return view('new_sample',array('sample' => $sample,'colors' => $colors ));
    }
}
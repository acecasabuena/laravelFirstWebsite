<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoutoutController extends Controller
{
    //
    public function __contstruct()
	{
		$this->middleware('shoutout') ->only('misddlewareshoutoutPage');
	}

    
    public function middlewareshoutoutPage(Request $request)
    {
    	$shoutout = $request ->shoutout;
    	
    	
    	$colors = array(
						"red"   => "for passion",
						"green" => "color of nature",
						"blue"  => "it is the color of the sky",
						"white" => "pureness",
						"black" => "being bold",
						"silver" => "authentic",
						"yellow" => "warmth"

					);

    	return view('new_shoutout',array('shoutout' => $shoutout,'colors' => $colors ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;

class welcomeController extends Controller
{
    function sendMessage(Request $request)
    {    	  
    	$secret = '6LekghMTAAAAAO9LeK19tw3PkDTGcKv4n3KgURTS';
    	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
    	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    	if ($resp->isSuccess())
    	{
    		if($request->ajax()) 
			{
		        $data = $request->input('email');
		        return response()->json(['email'=>'dasdasdsda']);
		    }
    	}
   		else
   			echo 'fail';
    }
}

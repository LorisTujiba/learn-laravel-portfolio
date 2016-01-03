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
    	$response = $request->input('gresponse');
    	$recaptcha = new \ReCaptcha\ReCaptcha($secret);    	
    	$resp = $recaptcha->verify($response, $_SERVER['REMOTE_ADDR']);
    	//$resp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    	if($resp->isSuccess())  
    	{
    		$newMessage = new Message();
    		$newMessage->email = $response = $request->input('email');
    		$newMessage->message = $response = $request->input('message');
    		$newMessage->save();
    		return response()->json(['notice'=>"success"]);    	
    	}
   		else
   			return response()->json(['notice'=>"fail"]);  
    }
}

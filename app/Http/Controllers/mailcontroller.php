<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\TestmAil;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    
    public function sendmail(){
    	
    	$details=[

    		'title'=>'Mail from sarmaya.com',
    		'body'=>'this is for testing email'

    	];

    	Mail::to('musayeb.afzali1998@gmail.com')->send(new TestmAil($details));
    	return 'email send Successfull';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortController extends Controller
{
	//
	function index()
	{
		return view('home');
	}
	function bio()
	{
		return view('bio')
	}
	function projects()
	{	
		return view('projects')
	}
	function contactme()
	{
		return view('contactme')
	}


}

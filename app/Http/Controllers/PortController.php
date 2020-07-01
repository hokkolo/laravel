<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use Crypt;
class PortController extends Controller
{
	//
	function index()
	{
		return view('home');
	}
	function bio()
	{
		return view('bio');
	}
	function projects()
	{	
		return view('projects');
	}
	function contactme()
	{
		return view('contactme');
	}
	function login()
	{
		return view('login');
	}
	function register(Request $req)
	{
	//	return $req->input();
	$user= new User;
	$user->name=$req->input('name');
	$user->email=$req->input('email');
	$user->password=Crypt::encrypt($req->input('password'));
	$user->save();
	}


}

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
	public function register(Request $req)
	{
	//	return $req->input();
	$user= new User;
	$user->uname=$req->input('name');
	$user->email=$req->input('email');
	$user->pword=Crypt::encrypt($req->input('name'));
	$user->save();
	$req->session()->put('user',$req->input('name'));
	return redirect('/');
	}

	function login(Request $req)
	{
		$user= User::where('email',$req->input('email'))->get();
		if(Crypt::decrypt($user[0]->pword)==$req->input('password'))
		{
			$req->session()->put('user',$user[0]->name);
			return redirect('/');
		}
	}


}

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
	public function getLogin() {
		return view('auth.login');
	}

	public function postLogin(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');

		if(Auth::attempt(['username' => $username, 'password' => $password])) {
			return redirect('/home');
		}
		else
		{
			return back()->withErrors(['Invalid username or password']);
		}
	}

	public function getLogout() {
		Auth::logout();
		
		// exit sudo mode (drop session values)
		exitSudoMode();

		return redirect('/');
	}

}
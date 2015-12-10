<?php

namespace Kwadrat\Http\Controllers;

use Auth;
use Kwadrat\User;
use Illuminate\Http\Request;
use Kwadrat\Http\Requests;
use Kwadrat\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function getLogin()
    {
    	return view('admin-sign-in');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required',
    	]);

    	if (!Auth::attempt($request->only(['email', 'password']))) {
			return redirect()->back()->with($request->session()->flash('acc-error', 'Неуспешен вход.'));
		}

		return redirect('/admin/home')->with($request->session()->flash('acc-info', 'Успешно влезнахте в системата.'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

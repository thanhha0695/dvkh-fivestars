<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('content.authentications.login');
    }

    public function attempt(AuthRequest $request)
    {
        $input = $request->except(['_token']);
        if (!Auth::attempt($input)) {
            return back()->withErrors([
              'password' => 'Password Invalid.',
            ])->onlyInput('password');
        }
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RazenStudioLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:razen_studio')->except('logout');
    }

    public function showLoginForm()
    {
        // dd('here');
        return view('auth.razen-studio.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('razen_studio')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('razen-studio.admin.dashboard.index'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('razen_studio')->logout();
        return redirect('/');
    }
}

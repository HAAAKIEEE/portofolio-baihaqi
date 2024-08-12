<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
public function index(){
    return view('login', [
        "title" => "Login",
        // "posts" =>  Post::all()
         // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
        "active" =>  "login"
        // "posts" =>  Post::latest()->get()
    
    ]);
}
public function authenticate(Request $request){

    $credentials = $request->validate([
    'email'=> 'required|email:dns',
    'password'=>'required'
]);
if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    return redirect()->intended('/dashboard');
}

return back()->withErrors([
    'email' => 'The provided credentials do not match our records.',
])->onlyInput('email');
}  
//

public function logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect('/');
}
}

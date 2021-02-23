<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use  App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
/*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
|
| This controller handles authenticating users for the application and
| redirecting them to your home screen. The controller uses a trait
| to conveniently provide its functionality to your applications.
|
*/

use AuthenticatesUsers;


protected function authenticated(Request $request, $user)
{   
    if($user->type=='admin'){
        
        return redirect ('/admin');
    }

  

  $abo=\App\Abonne::where('email',$user->email)->get();
 

    return redirect('/home');
 
    
}

protected function connexion()
{ 

 return view('login');
    
}






/**
    * Where to redirect users after login.
    *
    * @var string
    */
//protected $redirectTo = '/admin';

/**
    * Create a new controller instance.
    *
    * @return void
    */
public function __construct()
{
       $this->middleware('guest', ['except' => 'logout']);
}

    public function index(){
        return view('auth.login');
    }
}

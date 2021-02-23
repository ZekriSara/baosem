<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Abonne;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ImagesRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { 

        
        return Validator::make($data, [
                
                'nom'=>'required',
                'emailAbo'=>'required|email',
                'periode'=>'required',
                'dateDeb'=>'required',
                'tel1'=>'required',
                'ville'=>'required',
                'pays'=>'required',
                'password'=>'required|min:6'
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    { 

           $nom=request('name');
           $emailAbo=request("emailAbo");
           $periode=request("periode");
           $dateDeb=request("dateDeb");
           $tel1=request("tel1");
           $ville=request("ville");
           $pays=request("pays");
           $site=request("site");
           $password=request("password");

           

                $abonne=new Abonne;
            
                $abonne->name = $nom;
                
                $abonne->email = $emailAbo;
               
                $abonne->tel=$tel1;
                $abonne->ville=$ville;
                $abonne->pays=$pays;
                $abonne->periode=$periode;
                $abonne->dateDeb=$dateDeb;
                $abonne->site=$site;
                $abonne->expire=false;
                $abonne->valide=true;
          
       
        

         if(!(\App\Abonne::where('email',$abonne->email)->exists())){ 
         $abonne->save();}
   
  $user2= new User;
 $user2->email=$emailAbo;
 $user2->password=Hash::make($password);
 $user2->name=$nom;
 $user2->type="default";
 if(!(\App\User::where('email',$emailAbo)->exists())){
 $user2->save();}

    return view('welcome'); 
  
   
}
}
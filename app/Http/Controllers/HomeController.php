<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $nature_insertions=\App\Nature_insertion::all();
        $rubriques=\App\Rubrique::all();
        $type_insertions=\App\Type_insertion::all();
        $annonceurs=\App\Annonceur::all();
        $annonces=\App\Annonce::with('annonceur','type_insertion','rubrique','nature_insertion')->get();
        $puce_id='puce';$row_class='row1';
        $num_baosem=\App\Annonce::get('numBaosem')->toArray();
        $annonces=$annonces->where('numBaosem',Max($num_baosem)['numBaosem'])->sortBy('numRef');
        return view('affichage.index',compact('nature_insertions','rubriques','type_insertions','annonceurs','annonces','row_class','puce_id'));
    
       
    }
    public function logout(){
        auth()->logout();

        return redirect('/');

    }

}

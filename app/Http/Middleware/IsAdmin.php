<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isAdmin()) {
            return $next($request);
        }
        
        $nature_insertions=\App\Nature_insertion::all();
        $rubriques=\App\Rubrique::all();
        $type_insertions=\App\Type_insertion::all();
        $annonceurs=\App\Annonceur::all();
        $annonces=\App\Annonce::with('annonceur','type_insertion','rubrique','nature_insertion')->get();
        $puce_id='puce';$row_class='row1';
        $num_baosem=\App\Annonce::get('numBaosem')->toArray();
        $annonces=$annonces->where('numBaosem',Max($num_baosem)['numBaosem'])->sortBy('numRef');
        return view('affichage.index',compact('nature_insertions','rubriques','type_insertions','annonceurs','annonces','row_class','puce_id'));
    
        
    }
    }


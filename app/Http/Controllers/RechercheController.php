<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RechercheController extends Controller
{

    public function recherche(){
      
        $nature_insertions=\App\Nature_insertion::all();
        $rubriques=\App\Rubrique::all();
        $type_insertions=\App\Type_insertion::all();
        $annonceurs=\App\Annonceur::all();
        $annonces=\App\Annonce::all();
        $rubrique=request('rubrique'); 
        $num_baosem=request('Num_baosem');
        $num_placard=request('Num_placard');
        $type=request('type');
        $nature=request('nature');
        $nom_annonceur=request('annonceur');
        $mot_objet=request('mot_objet');
        $mot_placard=request('mot_placard');
       
        if($num_baosem != null){
            $annonces=$annonces->where('numBaosem',$num_baosem); 
        }
         if($nom_annonceur != null){
             $annonceur=\App\annonceur::where('annonceur',$nom_annonceur)->first();
             $code_annonceur=$annonceur->codeAnnonceur;
            $annonces=$annonces->where('codeAnnonceur',$code_annonceur);
            
         }
         
         if($type != null){
                 $type_insertion=\App\type_insertion::where('typeIns',$type)->first();
                 $code_type=$type_insertion->code;
                 $annonces=$annonces->where('code_type',$code_type);
         }
         if($num_placard != null){
             $annonces=$annonces->where('numRef',$num_placard);
         }
         if($rubrique != null){
              $rub=\App\Rubrique::where('rubrique',$rubrique)->first(); 
              $code_rubrique=$rub->codeRubrique;
              $annonces=$annonces->where('codeRubrique',$code_rubrique);
         }
         if($mot_objet != null){
                 $mot_objet=explode(' ',$mot_objet);   
                 $list_annonce=array();
                   foreach($mot_objet as $mot){
                        foreach($annonces as $annonce){
                            if(str_contains($annonce->objet,$mot)){   
                             array_push($list_annonce,$annonce);  
                              }
                         }
                     }
                  $annonces=$list_annonce;
         }
         if($mot_placard != null){
             $mot_placard=explode(' ',$mot_placard);   
             $list_annonce=array();
               foreach($mot_placard as $mot){
                    foreach($annonces as $annonce){
                        if(str_contains($annonce->text,$mot)){   
                         array_push($list_annonce,$annonce);  
                          }
                     }
                 }
              $annonces=$list_annonce;
                                   
         }
         if($nature != null){
             $nature_insertion=\App\nature_insertion::where('natureIns',$nature)->first();
             $code_nature=$nature_insertion->id;
             $annonces=$annonces->where('code_nature',$code_nature);
       }
         return view('affichage.index',compact('nature_insertions','rubriques','type_insertions','annonceurs','annonces'));
 
 
     }


}
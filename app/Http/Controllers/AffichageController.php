<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class AffichageController extends Controller
{
    public function accueil(){
        $rubriques=\App\Rubrique::all();
        return view('affichage.accueil',compact('rubriques'));
    }
    public function index(){
        $nature_insertions=\App\Nature_insertion::all();
        $rubriques=\App\Rubrique::all();
        $type_insertions=\App\Type_insertion::all();
        $annonceurs=\App\Annonceur::all();
        $annonces=\App\Annonce::with('annonceur','type_insertion','rubrique','nature_insertion')->get();
        $puce_id='puce';$row_class='row1';
        $num_baosem=\App\Annonce::get('numBaosem')->toArray();
        $test=count($num_baosem);
        $annonces=$annonces->where('numBaosem',Max($num_baosem)['numBaosem'])->sortBy('numRef');
        return view('affichage.index',compact('nature_insertions','rubriques','type_insertions','annonceurs','annonces','row_class','puce_id'));
    }

    

    public function rechercher(){
       
       $nature_insertions=\App\Nature_insertion::all();
       $rubriques=\App\Rubrique::all();
       $type_insertions=\App\Type_insertion::all();
       $annonceurs=\App\Annonceur::all();
       $cond=false; 
       $annonces=\App\Annonce::all();
       $nom_rubrique=request('nom_rubrique'); 
      
       $num_baosem=request('Num_baosem');
       
       $num_placard=request('Num_placard');
       $type=request('type'); 
       $nature=request('nature');
      
       $nom_annonceur=request('annonceur');
       
       $mot_objet=request('mot_objet');
       $mot_placard=request('mot_placard');
      
       
      
       if($num_baosem != null){

           $annonces=$annonces->where('numBaosem',$num_baosem); $cond=true;
       }
        if($nom_annonceur != null){
            
            $annonceur=\App\annonceur::where('annonceur',$nom_annonceur)->first();
            $code_annonceur=$annonceur->codeAnnonceur;
           $annonces=$annonces->where('codeAnnonceur',$code_annonceur);$cond=true;
           
        }
        
        if($type != null){
                
                $type_insertions=\App\type_insertion::where('typeIns',$type)->first();
               
                $code_type=$type_insertions->code;
                $annonces=$annonces->where('code_type',$code_type);$cond=true;
        }
        if($num_placard != null){
            $annonces=$annonces->where('numRef',$num_placard);$cond=true;
        }
        if($nom_rubrique != null){
             $rub=\App\Rubrique::where('rubrique',$nom_rubrique)->first(); 
             $code_rubrique=$rub->codeRubrique;
             $annonces=$annonces->where('codeRubrique',$code_rubrique);$cond=true;
        }
        if($mot_objet != null){
                
                  
                    $annonces = DB :: select(DB::raw("SELECT * FROM annonces"));
                    //$annonces=App\Annonce::select(DB::raw("select * from annonces "));
                       
                        
                 $cond=true;
                
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
             $annonces=$list_annonce;$cond=true;
             $annonces=$annonces->where('text','LIKE',"%ahlem%");
                                  
        }
        if($nature != null){
            $nature_insertions=\App\nature_insertion::where('natureIns',$nature)->first();
            
            $code_nature=$nature_insertions->id;
            $annonces=$annonces->where('code_nature',$code_nature);$cond=true;
      }
      if($cond){
         return $annonces;
      }else{return null;}
    
     //return $annonces;
     

    }

    /*public function rech_aff(){
        $nature_insertions=\App\Nature_insertion::all();
        $rubriques=\App\Rubrique::all();
        $type_insertions=\App\Type_insertion::all();
        $annonceurs=\App\Annonceur::all();
        $annonces=\App\Annonce::all();
        $nat=request('nat');
        $row_class='row1';
        $puce_id='puce';
        
        if($this->rechercher()!=null){
            $annonces=$this->rechercher();
        }
        else {
            $num_baosem=\App\Annonce::get('numBaosem')->toArray();
            $annonces=$annonces->where('numBaosem',Max($num_baosem)['numBaosem']);
           
        }
        if(request('nat')=="res"){
            $annonces=$annonces->where('code_nature',2);
            $row_class='rowres';
            $puce_id='puce1';
           
        }
        elseif(request('nat')=="appel"){
            $annonces=$annonces->where('code_nature',1);
            $row_class='rowapp';
            $puce_id='puce2';
        }
        
        return view('affichage.index',compact('nature_insertions','rubriques','type_insertions','annonceurs','annonces','row_class','puce_id'));

    }*/

    public function action(Request $request){
        $output="";
        $nat=request('nat');
        $row_class='row1';
        $puce_id='puce';
        $annonces=\App\Annonce::all();
         $id=request('nat_id');
  
        if($this->rechercher()!=null){
            $annonces=$this->rechercher();
        }
        else {
            
            $num_baosem=\App\Annonce::get('numBaosem')->toArray();
            $annonces=$annonces->where('numBaosem',Max($num_baosem)['numBaosem']);
           
        }
        if($id!='bouton'){
            if($id=="abtn2"){
                $annonces=$annonces->where('code_nature',2);
                $row_class='rowres';
                $puce_id='puce1';
               
            }
            elseif($id=="abtn1"){
                $annonces=$annonces->where('code_nature',1);
                $row_class='rowapp';
                $puce_id='puce2';
            }

         }
        foreach($annonces as $key => $annonce){
            
            $output.='<tr>'.
            '<td data-title="N° BAOSEM + Date de parution " ><i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>
              Num :'. $annonce->numBaosem.' <br> 
              <i class="fa fa-circle" id="{{ $puce_id ?? \'\' }}" ></i>Parue: '.$annonce->datePar.'
           </td>
            <td data-title="Objet + N° d\'annonce"><i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}"></i>'.$annonce->objet.'<br><i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>
             Num :'. $annonce->numInsertion.'</td>
                    <td data-title="Nature + Type" class="numeric"><i class="fa fa-circle" id="{{ $puce_id ?? \'\' }}" ></i>'.
               $annonce->nature_insertion->natureIns.' <br> <i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>'.
               $annonce->type_insertion->typeIns.'
            </td>
                    <td data-title="Annonceur" class="numeric" ><i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}" ></i>'.$annonce->annonceur->annonceur.'</td>
                    <td data-title="Rubrique" class="numeric" > <i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}" ></i>'.$annonce->rubrique->rubrique.'</td>
                    <td data-title="Aperçu" class="numeric"><a href="\annonce\\'.$annonce->numInsertion.'"> voir plus </a></td>
                
                    
                </tr>';
               
        }

       
         $data= array(
             'tbody'  => $output,
             'puce_id' =>$puce_id,
             'row_class'=>$row_class
         );
        //return Response($output);
        echo json_encode($data);

    }
 
    public function aff_details($id){
       
        $annonce=\App\Annonce::where('numInsertion',$id)->first();
        $user= \Auth::user(); 
        $abonne=\App\Abonne::where("email",$user->email)->first();
        
        return view('affichage.annonce',compact('annonce',"abonne"));
    }
    public function annonce_to_html($id){
        
        $annonce=\App\Annonce::where('numInsertion',$id)->first();
       
        $output='<br><span style=" text-align:top-left">logo</span><p style="text-align:center" >BAOSEM Edition & Publicité</p><br> <p style="text-align:left">le ' . $date = date('d-m-y g:ia').'</p>
        <p style="text-align:left"> Par : --------- </p><br>
        <div class="col-10" >
        <div id="card3"  style="margin:10px; border-radius: 5px;background-color: #FBF8F2; 
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);">
            
           <br>
            <div class="row" style="margin-top:15px;margin-left:10px">
                
                   <span style="font-weight: bold;"> N° Baosem : </span> <span style="color:#030784">'.$annonce->numBaosem.'</span>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                   <span style="font-weight: bold"> Date de parution : </span> <span style="color:#030784">'.$annonce->datePar.'</span>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                     <span style="font-weight: bold"> N° référence : </span><span style="color:#030784">'.$annonce->numRef.'</span>
                  
            </div>
             <br>
            <div class="row" style="margin-top:15px;margin-left:10px">
                
                
                   <span style="font-weight: bold">  Type : </span><span style="color:#030784">'.$annonce->type_insertion->typeIns.'</span>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                
                    <span style="font-weight: bold"> Nature : </span><span style="color:#030784">'.$annonce->nature_insertion->natureIns.'</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  
                   <span style="font-weight: bold"> Rubrique : </span> <span style="color:#030784">'.$annonce->rubrique->rubrique.'</span>
                
                </div>
             <br>
             </div>
             <div id="card3" style="margin:10px; border-radius: 5px;background-color: #FBF8F2;
             box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);">
             <div class="row" style="background-color:#ffa41b;width:100%;margin:0;font-size:15px;font-weight:bold;text-align:center">
                 <div class="col" style=" display: table">
                 <p style="letter-spacing: .08em;vertical-align:middle;display: table-cell"> '.$annonce->objet.'</p>
                </div>
             </div>
             <div class="row">
                 <div class="col" style="margin:15px;background-color:#FEF5E7">
                    <p style="margin-top:15px;">'.$annonce->text.'</p>
                    
                 </div>
             </div>
             <div class="row">
                 <div class="col">
          
              </div>
            </div><br>
          </div>
     </div>';
    
     return $output;
    
    }

    public function pdf($id){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->annonce_to_html($id));
        return $pdf->stream();
    }
    
    

    
    
}

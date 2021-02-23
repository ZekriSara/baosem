<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeds\commune;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\AlertMail;
use App\Mail\FinMail;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    



    public function index()
    {   $abonnes=\App\Abonne::where("valide",true)->get();
        $nbArchive=count(\App\Archive::All());
        $nbUser= count(\App\Abonne::where("valide",true)->get());
        $nbDA=count(\App\Abonne::where("valide",false)->get());
        $nbAnnonce=count( \App\Annonce::All());
        
        
       



           
      
       
        return view('home',compact('abonnes','nbUser','nbDA','nbArchive','nbAnnonce'));
    }

   public function annonce(){
       $annonces=\App\Annonce::all();
       
        $nbArchive=count(\App\Archive::All());
        $nbUser= count(\App\Abonne::where("valide",true)->get());
        $nbDA=count(\App\Abonne::where("valide",false)->get());
        $nbAnnonce=count( \App\Annonce::All());
       
        
       return view("annonce",compact('annonces','nbUser','nbDA','nbArchive','nbAnnonce'));
   }
   public function archive(){
    $archives=\App\Archive::all();
    $abonnes=\App\Abonne::All();
    $nbArchive=count(\App\Archive::All());
    $nbUser= count(\App\Abonne::where("valide",true)->get());
    $nbDA=count(\App\Abonne::where("valide",false)->get());
    $nbAnnonce=count( \App\Annonce::All());
   
    return view("archive",compact('archives','nbUser','nbDA','nbArchive','nbAnnonce'));
}
public function da(){
    $das=\App\Abonne::where("valide",false)->get();
    $abonnes=\App\Abonne::All();
    $nbArchive=count(\App\Archive::All());
    $nbUser= count(\App\Abonne::where("valide",true)->get());
    $nbDA=count(\App\Abonne::where("valide",false)->get());
    $nbAnnonce=count( \App\Annonce::All());


   
    return view("da",compact('das','nbUser','nbDA','nbArchive','nbAnnonce'));
}

public function valider($da){
   
    
   $size=10;
   $password="";
   $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

   for($i=0;$i<$size;$i++)
   {
       $password .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
   }
   
  $users= \App\Abonne::where("email",$da)->get();
 $user=$users[0];
 
  $user->password=$password;
  Mail::to($user)->send(new RegisterMail($user));




   $abo= \App\Abonne::where("email",$da)->update(["valide"=>true, "password"=>Hash::make('password')]);
   $user2=new \App\User;
$user2->email=$user->email;
$user2->password=Hash::make('sarazekri');
$user2->name=$user->name;
$user2->type="default";


$user2->save();
    return redirect("/admin/da");

}






public function importer(Request $request)
{   
    

    $file_name = $_FILES['fichier']['name'];
    
    
    $path1 = $request->fichier->store('fichier2');
      
   $storagepath = storage_path('app/'.$path1);
     
   $file = file_get_contents($storagepath);
  
    $path = base_path();
    
    file_put_contents($path."\\".$file_name, $file);
    
    include($path."\\".$file_name);

   $mot=".csv";
     if(strpos($file_name,$mot)==false){
      $rien=1;
          
     } 
     else {
    $annonces = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
    
    $i=0;
    foreach ($annonces as $annonce)
    {   
        $annonceur[$i]=new \App\Annonceur;
        $nature[$i]=new \App\Nature_insertion;
        $rubrique[$i]=new \App\Rubrique;
        $type[$i]=new \App\Type_insertion;
        
        $ano[$i]=new \App\Annonce;

        $annonceur[$i]->codeAnnonceur=$ano[$i]->codeAnnonceur=$annonce[0];

        
        $ano[$i]->numBonCom=$annonce[1];
        $ano[$i]->numInsertion=$annonce[2];
        $type[$i]->code=$ano[$i]->code_type=$annonce[3];
        $nature[$i]->id=$ano[$i]->code_nature=$annonce[4];
        $ano[$i]->objet=$annonce[5];
        $ano[$i]->numBaosem=$annonce[6];
        $ano[$i]->datePar=$annonce[7];
        $rubrique[$i]->codeRubrique=$ano[$i]->codeRubrique=$annonce[8];
        $ano[$i]->numRef=$annonce[9];
        $ano[$i]->surface=$annonce[10];
        $ano[$i]->text=$annonce[11];
        $ano[$i]->date_debut=$annonce[14];
        $ano[$i]->date_fin=$annonce[15];

        
        $annonceur[$i]->annonceur='annonceur';
        $type[$i]->typeIns='type';
        $nature[$i]->natureIns="nature";
        $rubrique[$i]->rubrique='rubrique';
        
        
        if(!(\App\Annonceur::where("codeAnnonceur",$annonceur[$i]->codeAnnonceur)->exists())){
            $annonceur[$i]->save();  
           
        }
        if(!(\App\Type_insertion::where("code", $type[$i]->code)->exists())){
             
     $type[$i]->save();
           
        }
        if(!(\App\Nature_insertion::where("id",$nature[$i]->id)->exists())){
            
     $nature[$i]->save();
     
        }
        if(!(\App\Rubrique::where("codeRubrique",$rubrique[$i]->codeRubrique)->exists())){
            $rubrique[$i]->save();
        }
        
        if(!(\App\Annonce::where("numInsertion",$ano[$i]->numInsertion)->exists())){
            $ano[$i]->save();
        }
        
    
     $i++;
    
     
        
    }
 
    $annonces=\App\Annonce::all();
       $annonces=\App\Annonce::All();
        $nbArchive=count(\App\Archive::All());
        $nbUser= count(\App\Abonne::where("valide",true)->get());
        $nbDA=count(\App\Abonne::where("valide",false)->get());
        $nbAnnonce=count( \App\Annonce::All());
       
}      
       return redirect('/admin/annonce');


     
}


  public function image($image){
    
    $src="payement/".$image;
    
    
    return view("image",compact("src"));
  
  }


  public function back(){
    $das=\App\Abonne::where("valide",false)->get();
    $abonnes=\App\Abonne::All();
    $nbArchive=count(\App\Archive::All());
    $nbUser= count(\App\Abonne::where("valide",true)->get());
    $nbDA=count(\App\Abonne::where("valide",false)->get());
    $nbAnnonce=count( \App\Annonce::All());


   
    return view("da",compact('das','nbUser','nbDA','nbArchive','nbAnnonce'));

  }
  
  public function delete($email){
    \App\Abonne::where("email",$email)->delete();

     return redirect("/home");
  }


   /* public function action(Request $request){

        $output1="";
        $output2="";
        $id=request('nat_id');
  
       
       
            if($id=="moreAnnonce"){
                $annonces=\All\Annonce::all();
               
               $output1.='	<thead class="cf">
                             <tr >
                   
                   
           <th style="width:10%" class="numeric">N° BAOSEM <br> + <br> Daste de parution </th>
           <th style="width:30%" class="numeric">Objet <br> + <br> N° d\'annonce</th>
           <th style="width:10%" class="numeric">Nature <br> + <br> Type</th>
           <th style="width:20%" class="numeric">Annonceur</th>
           <th style="width:23%" class="numeric">Rubrique</th>
           <th style="width:7%" class="numeric">Aperçu</th>
               </tr>
           </thead>';
               
                foreach($annonces as $key => $annonce){
            
                    $output2.='<tr>'.
                    '<td dasta-title="N° BAOSEM + Daste de parution " ><i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>
                      Num :'. $annonce->numBaosem.' <br> 
                      <i class="fa fa-circle" id="{{ $puce_id ?? \'\' }}" ></i>Parue: '.$annonce->dastePar.'
                   </td>
                    <td dasta-title="Objet + N° d\'annonce"><i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}"></i>'.$annonce->objet.'<br><i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>
                     Num :'. $annonce->numInsertion.'</td>
                            <td dasta-title="Nature + Type" class="numeric"><i class="fa fa-circle" id="{{ $puce_id ?? \'\' }}" ></i>'.
                       $annonce->nature_insertion->natureIns.' <br> <i class="fa fa-circle " id="{{ $puce_id ?? \'\' }}"></i>'.
                       $annonce->type_insertion->typeIns.'
                    </td>
                            <td dasta-title="Annonceur" class="numeric" ><i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}" ></i>'.$annonce->annonceur->annonceur.'</td>
                            <td dasta-title="Rubrique" class="numeric" > <i class="fa fa-circle "id="{{ $puce_id ?? \'\' }}" ></i>'.$annonce->rubrique->rubrique.'</td>
                            <td dasta-title="Aperçu" class="numeric"></td>
                        
                            
                        </tr>';
                       
                }
            }
            elseif($id=="moreArchive"){
                $archives=\All\Archive::all();                
            }
           
        
       

       
         $dasta= array(
             'thead'=> $output1,
             'tbody'  => $output2,
             
         );
        //return Response($output);
        echo json_encode($dasta);
    }*/
}

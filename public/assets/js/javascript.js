
    function desactiver(){
         var x = document.getElementById("objet").value;
         if(x.length !=0){
         document.getElementById("Num_placard").disabled=true;
         //document.getElementById("placard").disabled=true;
         }else {document.getElementById("Num_placard").disabled=false;
         //document.getElementById("placard").disabled=false;       
        }
    }
  
    function desactiver2(){
        var x = document.getElementById("num_placard").value;
        if(x.length !=0){
        document.getElementById("mot_objet").disabled=true;
        document.getElementById("mot_placard").disabled=true;
        }else {document.getElementById("mot_objet").disabled=false;
        document.getElementById("mot_placard").disabled=false;       
       }
   }

   function desactiver3(){
    var x = document.getElementById("mot_placard").value;
    if(x.length !=0){

    document.getElementById("Num_placard").disabled=true;
    }else {document.getElementById("Num_placard").disabled=false;
        
   }
}
 
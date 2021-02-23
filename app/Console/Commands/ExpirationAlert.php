<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
Use App\Mail\RegisterMail;
use App\Mail\AlertMail;
use App\Mail\FinMail;
class ExpirationAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alert:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoie de rappel d\'expiration d\'abonnement';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $abonnes= \App\Abonne::all();
        
       foreach($abonnes as $abonne){
        $dateDeb=explode("-",$abonne->dateDeb);
        $periode=$abonne->periode;
        $date_actuelle=date("Y-m-d");
        $act=explode("-",$date_actuelle);

        $diff=mktime(0,0,0,$act[1],$act[2],$act[0])-
              mktime(0,0,0,$dateDeb[1],$dateDeb[2],$dateDeb[0]);
        $diff=($diff/86400);
       
       $jourrestant=$periode-$diff;
       

       $user=\App\User::where("email",$abonne->email)->first();
        
       
        if($jourrestant==15 ) {
            Mail::to($user)->send(new AlertMail($user,$jourrestant));
        }
        elseif($jourrestant==7) {
            
            Mail::to($user)->send(new AlertMail($user,$jourrestant));

        }
        elseif($jourrestant==0 ){
            \App\Abonne::where('email',$abonne->email)->update(
                [
                    'expire'=>true,
                ]
                );
            Mail::to($user)->send(new FinMail($user) );
        }
        
       


        // Mail::to($user)->send(new RegisterMail($user));

    }
        
    }
}

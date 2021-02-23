<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Archive des annonces';

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
        $annonces=\App\Annonce::with('annonceur','type_insertion','rubrique','nature_insertion')->get();
        foreach($annonces as $annonce){
            $date=$annonce->date_debut;
            $date=strtotime($date);
            $date_actuelle = date('Y-m-d') ;
            $date_actuelle=strtotime($date_actuelle);
            $duree=3;
            $datefin=date(strtotime('+'.$duree.'month',$date));
            $expire=$date - $date_actuelle;
            if($expire<0){
                $archive= new \App\Archive;
                $archive->codeAnnonceur=$annonce->codeAnnonceur;
                $archive->numBaosem=$annonce->numBaosem;
                $archive->numBonCom=$annonce->numBonCom;
                $archive->code_type=$annonce->code_type;
                $archive->code_nature=$annonce->code_nature;
                $archive->objet =$annonce->objet;
                $archive->datePar=$annonce->datePar;
                $archive->codeRubrique=$annonce->codeRubrique;
                $archive->numRef=$annonce->numRef;
                $archive->text=$annonce->text;
                $archive->date_debut=$annonce->date_debut;
                $archive->date_fin=$annonce->date_fin;
                $archive->surface=$annonce->surface;
                $archive->numInsertion=$annonce->numInsertion;
                
                if(!(\App\Archive::where("numInsertion",$annonce->numInsertion)->exists())){
                    $archive->save();
                }
            }
        }
        $this->info('daily Update has been done successfully');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
           
            $table->integer('codeAnnonceur');
            $table->double('numBonCom');
            $table->Increments('numInsertion',true); // N° de l'appel d'offre
            $table->integer('code_type'); // type d'insertion
            $table->integer('code_nature'); // nature d'insertion
            $table->text('objet'); // libellé de l'appel d'offre 
            $table->double('numBaosem'); 
            $table->date('datePar'); //date de parution prévue du baosem
            $table->integer('codeRubrique');
            $table->double('numRef'); // N° de reference/placard
            $table->string('surface');
            $table->text('text'); //l'annonce
            $table->date('date_debut');
            $table->date('date_fin');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archives');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
           
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
            $table->timestamps();
            });

            Schema::table('annonces', function (Blueprint $table){
              /*  $table->foreign('codeAnnonceur')->references('codeAnnonceur')->on('annonceurs');
                
                $table->foreign('code_type')->references('code')->on('type_insertions'); 
                $table->foreign('code_nature')->references('id')->on('nature_insertions');
                $table->foreign('codeRubrique')->references('codeRubrique')->on('rubriques');*/
                
            }

          );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}

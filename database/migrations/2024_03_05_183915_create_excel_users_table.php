<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         //     "N°" => $row[0] ,	
        //     "CIN"=> $row[1] ,		
        //     "PPR"=> $row[2] ,	
        //     "Nom"=> $row[3] ,	
        //     "Prénom	"=> $row[4] ,	
        //     "الإسم العائلي"=> $row[5] ,	
        //     "الإسم الشخصي"  => $row[6] ,	      
        //     "Sexe"	=> $row[7] ,	
        //     "Date Naissance" => $row[8] ,	
        //     "Situation Familiale" => $row[9] ,	
        //     "Grade"	=> $row[10] ,	
        //     "Echelle"	=> $row[11] ,	
        //     "Fonction"	=> $row[12] ,	
        //     "Date Entrée"=> $row[13] 
        Schema::create('excel_users', function (Blueprint $table) {
            $table->id();
            $table->string("N");
            $table->string("CIN")->nullable();
            $table->string("PPR")->nullable();
            $table->string("Nom")->nullable();
            $table->string("Prenom")->nullable();
            $table->string("NomAr")->nullable();
            $table->string("PrenomAr")->nullable();
            $table->string("Sexe")->nullable();
            $table->string("Date_Naissance")->nullable();
            $table->string("Situation_Familiale")->nullable();
            $table->string("Grade")->nullable();
            $table->string("Echelle")->nullable();
            $table->string("Fonction")->nullable();
            $table->string("Date_Entree")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excel_users');
    }
};

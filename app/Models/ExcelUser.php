<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelUser extends Model
{
    use HasFactory;
     protected $fillable =
      [     
            "N",	
            "CIN",		
            "PPR",	
            "Nom",	
            "Prenom",	
            "NomAr",
            "PrenomAr",	
            "Sexe",	
            "Date_Naissance",	
            "Situation_Familiale",	
            "Grade",	
            "Echelle",	
            "Fonction",	
            "Date_Entree",
    ];
}

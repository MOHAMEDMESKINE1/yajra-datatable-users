<?php

namespace App\Imports;

use App\Models\ExcelUser;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExcelUser([

           "N" => $row[0] ,	
           "CIN"=> $row[1] ,		
           "PPR"=> $row[2] ,	
           "Nom"=> $row[3] ,	
           "Prenom"=> $row[4] ,	
           "NomAr"=> $row[5] ,
           "PrenomAr"=> $row[6] ,	
           "Sexe"	=> $row[7] ,	
            "Date_Naissance" => $row[8] ,	
            "Situation_Familiale" => $row[9] ,	
            "Grade"	=> $row[10] ,	
            "Echelle"	=> $row[11] ,	
            "Fonction"	=> $row[12] ,	
           "Date_Entree"=> $row[13] ,
           "created_at" => now()->format('Y-m-d H:i:s'),
           "updated_at" => now()->format('Y-m-d H:i:s'),
        ]);
    }
}

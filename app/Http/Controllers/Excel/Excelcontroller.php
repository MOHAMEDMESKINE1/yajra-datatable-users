<?php

namespace App\Http\Controllers\Excel;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class Excelcontroller extends Controller
{
    
    public function index(){

        return view('excel.index');
    }
    public function importExcelData (Request $request) {


 
        // Get the uploaded file

        // $row  = [];
        // $users_data = [

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
        // ];

        // $row = [];
            
        // foreach ($row as $data){
        // $usersData[] = [
        //     "N°" => $row[0],
        //     "CIN" => $row[1],
        //     "PPR" => $row[2],
        //     "Nom" => $row[3],
        //     "Prénom" => $row[4],
        //     "الإسم العائلي" => $row[5],
        //     "الإسم الشخصي" => $row[6],
        //     "Sexe" => $row[7],
        //     "Date Naissance" => $row[8],
        //     "Situation Familiale" => $row[9],
        //     "Grade" => $row[10],
        //     "Echelle" => $row[11],
        //     "Fonction" => $row[12],
        //     "Date Entrée" => $row[13],
        // ];
        // }
        
        // Process the Excel file
        $fileType = 'xlsx';
        $file = $request->file('file');
        $user_data =  Excel::import(new UsersImport, $file,$fileType);
        dd($user_data);

    }
    // private function processExcelFile($file)
    // {
    //     try {
    //         // Import the Excel file using `collect` to retrieve an array
    //         $data = Excel::toArray(null, $file);

    //         // Skip the header row (assuming the first row contains column names)
    //         $data = array_slice($data[0], 1);

    //         // Create a new array with desired keys and adjusted data
    //         $usersData = [];
    //         foreach ($data as $row) {
    //             $usersData[] = [
    //                 "N°" => $row[0],
    //                 "CIN" => $row[1],
    //                 "PPR" => $row[2],
    //                 "Nom" => $row[3],
    //                 "Prénom" => $row[4],
    //                 "الإسم العائلي" => $row[5],
    //                 "الإسم الشخصي" => $row[6],
    //                 "Sexe" => $row[7],
    //                 "Date Naissance" => $row[8],
    //                 "Situation Familiale" => $row[9],
    //                 "Grade" => $row[10],
    //                 "Echelle" => $row[11],
    //                 "Fonction" => $row[12],
    //                 "Date Entrée" => $row[13],
    //             ];
    //         }

    //         return $usersData;
    //     } catch (Exception $e) {
    //         return ['error' => $e->getMessage()]; // Handle errors gracefully
    //     }
    // }
}

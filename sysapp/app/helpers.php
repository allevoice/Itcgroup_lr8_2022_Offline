<?php
use Illuminate\Support\Arr;
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models



/*
if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photo::Photovoiture($id, $limite);
    }
}
*/


if(!function_exists('statuscmd')){
    function statuscmd($id=NULL){
        if($id == NULL){
            $stliste = [
                    '0' => 'Non definis',
                    '1' => 'Active',
                    '2' => 'Desactiver',
                ];
            return $stliste;
        }else{
            switch ($id) {
                case 0:
                    return "Non definis";break;
                case 1:
                    return "Active";break;
                case 2:
                    return "Desactiver";break;
            }
        }
    }
}

if(!function_exists('levelcmd')){
    function levelcmd($id=NULL){
        if($id==NULL){
            $liste = [
                    '0' => 'Non definis',
                    '1' => 'Premier',
                    '2' => 'Second',
                    '3' => 'Troisieme',
                    '4' => 'Quatrieme',
                    '5' => 'Cinquieme',
                    '6' => 'Sisieme',
                ];
            return $liste;
        }else{
            switch ($id) {
                case 0: return "Non definis";break;
                case 1: return "Premier";break;
                case 2: return "Second";break;
                case 3: return "Troisieme";break;
                case 4: return "4";break;
                case 5: return "5";break;
                case 6: return "6";break;
            }
        }
    }
}



?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Auth;
use Log;
use Session;

/**
 * Contorller for external user page
 *
 * @author Michea Colautti
 * @version 28.02.2023
 */
class UserPageExploreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * This method allows you to edit the data of a choosen user.
     *
     * @param request the data of the user.
     */
    public function editOtherData(Request $request){
        $id=Session::get("editId");
        if(!empty(Session::get("editing"))){
            Session::forget("editing");
            $data=$request->all();
            array_shift($data);
            
            $data=$this->fillData($data, $id);
            $time = strtotime($data[6]);
            if ($time) {
                $data[6] = date('Y-m-d', $time);
            } else {
               return;
            }
            if(count($data)<9){
                array_push($data,"");
            }
            
           DB::table("person")
            ->where('id', '=',  $id)
            ->update([
                "name"  => $data[0],
                "lastname" => $data[1],
                "phone_number" =>$data[2],
                "address" =>$data[3],
                "CAP" =>$data[4],
                "country" =>$data[5],
                "born_date" => $data[6],
                "userState" => $data[7],
                "userMansion"=> $data[8],
            ]);
            
            $toPrint = (new EsploraController)->openPage( $id,"otherUser");
            return redirect()->route('UserPageExplore');

        }else{
            Session::put("editing","edit");

            $toPrint = (new EsploraController)->openPage( $id,"otherUser");
            return redirect()->route('UserPageExplore');
        }

    }

    /**
    * This method allows to fill the empty data left from the user in the edit page.
    *
    * @param data the data of the user
    * @param id it's the id of the user that is beeing modified
    */
    public function fillData($data,$id){
        $data=array_values($data);

        $keys = array("name", "lastname", "phone_number", "address", "CAP", "country", "born_date");
        $oldData="select name,lastname,phone_number,address,CAP,country,born_date from person where id = ".$id;
        $oldData = DB::select($oldData);
        $oldData=array_values(((array)$oldData[0]));

        for($i=0;$i<count($data);$i++){
            if(empty($data[$i])){
                $data[$i]=$oldData[$i];
            }

        }
        return $data;
    }

    /**
    * This method allows to print the genral data of the guest,
    *
    * @param id it's the id of the user that is beeing viewd.
    */
    public function generalData($id){

        $hasData=$this->hasData($id);
        if($hasData){
            $fields=array(
                array("Nome ","Cognome"),
                array("Mangia","Beve","Dentiera","Addensante","Dieta","Alimenti sconsigliati","Allergie","Alcolici")
        
            );

            //reference person data


            $tables=array("referencePerson","alimentation");
            $titles=array("Persona di riferimento","Alimentazione");
            $printData=$this->getDatas($id,$fields,$tables,$titles);
        }else{
            $printData="Nessun dato per questo utente.";
        }
        return $printData;
        

    }


    /**
    * This method allows to prepare the print of all the medical data.
    *
    * @param id it's the id of the user that is beeing viewd
    * @return printData it's the medical data to print (return to view)
    */
    public function medicalData($id){
        
        $hasData=$this->hasData($id);
        if($hasData){
            
            $fields=array(
                array("Stato civile ","Peso [Kg]","Altezza [cm]","Data e luogo di iscrizione","Firma"),
                array("Vive ","Ev. Numero istituto"),
                array("Ultimo ricovero ","Ospedale","Motivo"),
                array("Nome","Numero AVS","Immagine"),
                array("Movimento e spostamenti","Mezzi ausiliari","Mobilità braccio sinistro","Mobilità braccio destro","Mobilità gamba sinistra","Mobilità gamba destra"),
                array("Lavarsi","Vestirsi","Bisogni corporali","Urine","Feci","Catetere","Data ultimo cambio","Numero CV","Stitichezza","Estrazione manuale feci","Piaghe da decupito","Dove","Prevenzione e cura"),
                array("Vista","Udito","Apparecchi aucustici","Occhiali"),
                array("Sonno","Difficoltà ad addormentarsi"),
                array("Orientamento","Memoria","Sovente agitato","Molto depresso"),

            );
            $tables=array("guestInfo","livingSituation","lastRecover","healtIns","movement","guestHyg","comunication","sleep","psySate");
            $titles=array("Informazioni ospite","Situazione di vita","Ultimo ricovero","Cassa malati","Movimenti","Igene personale","Comunicazione","Sonno","Stato psichico");

            $printData=$this->getDatas($id,$fields,$tables,$titles);
        }else{
            $printData="Nessun dato per questo utente.";
        }
        return $printData;


    }

    
    /**
    * This method allows to print of all the medical data.
    *
    * @param id it's the id of the user that is beeing viewd
    * @param fields it's the array with all the titles of the fields
    * @param tables it's the array with the tables to be queried
    * @param titles it's the array with all the titles of the tables
    * @return printData it's the medical data to print
    */
    public function getDatas($id,$fields,$tables,$titles){
        $printData="";
        for($i=0;$i<count($tables);$i++){
            $printData=$printData."<h4>".$titles[$i]."</h4><table><col width='50%'><col width='50%'></colgroup>";
         
            $data = DB::table($tables[$i])->where('idGuest', $id)->get();
            $currFields=$fields[$i];

            //translate id into Name and lastname
            if($tables[$i]=="referencePerson"){
                $data=(array)$data[0];
                $data=array_values($data);
                $data=$data[2];
                $data = DB::table("person")->where('id', $data)->get(['name','lastname']);

            }

            if(count($data)==0){
                $printData=$printData."<tr><td>Nesssun dato</td></tr>";
            }else{
                $printData=$printData.$this->toTable($currFields,$data);
            }
            $printData=$printData."</table><br><br>";
        }
        return $printData=$printData."</table>";
    }

    /**
    * This method allows to parse the result of a query into a HTML table.
    *
    * @param fields it's the name list of the data returned
    * @param data it's the data returned
    * @return final it's the data formatted
    */
    public function toTable($fields, $data){


        $data=(array)$data[0];
        $data=array_values($data);

        if(count($data)>2){
            array_shift($data);
            array_shift($data);
        }

        $final="";
        for($i=0;$i<count($data);$i++){
            $final=$final."<tr><td>".$fields[$i]."</td><td>".$data[$i]."</td></tr>";
        }
        return $final;
    }

    /**
    * This method allows to check if the user is a guest.
    *
    * @param id it's the user id
    * @return data it's of the user
    */
    public function hasData($id){
        $data = DB::table("person")->where('id', $id)->get(['type']);
        if(count($data)>0){
            $data=(array)$data[0];
            $data=array_values($data);
            return $data[0]=="guest";
        }
    }
}

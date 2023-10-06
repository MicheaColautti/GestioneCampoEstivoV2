<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use Session;

/**
 * Contorller of housing page
 *
 * @author Michea Colautti
 * @version 2.03.2023
 */
class AlloggiController extends Controller
{

    /**
     * Main function: takes the block and the number of the room and search it's id and the places.
     * Then it define an array with all the id of the berson in it. It calls the function getUsersData
     * and then prints the data returned by it. 
     *
     * @param roomData the block.number of the room
     * @return view with the printable table 
     */
    public function viewRoomData($roomData){
        
        //$romdata contains block.number
        $roomData=explode(".",$roomData);
        $block=$roomData[0];
        $number=$roomData[1];
        $campId=Session::get("campId");

        //taking the id and the original places available in the room
        $roomData = DB::table("room")
            ->where("block", $block)
            ->where("number", $number)
            ->where("campId", $campId)
            ->get(["id","places"]);
        
        //get the actual data
        $roomData=json_decode($roomData,true)[0];
        $roomId=$roomData["id"];
        $places=$roomData["places"];
       
        //search all the times that the roomId appears in the occupied table.
        $occupied=DB::table("occupied")
            ->where("idRoom",$roomId)
            ->get(["idPerson"]);
        $occupied=json_decode($occupied,true);
        
        $available=0;
        if(!empty($occupied) || !is_null($occupied)){
            //get the is of all the person in the specified room.
            $personsIn=array();
            foreach($occupied as $oc){
                array_push($personsIn,$oc["idPerson"]);
            }
            
            //get the number of available places.
            $occupation=count($personsIn);
            $available=$places-$occupation;
        }

        //get the user data (name,lastname,birth)
        $data=$this->getUsersData($personsIn);
        $toPrint="";
        
        //putting all data in a table. <table> and <th> are already in the view. CSS results better
        foreach($data as $row){
            $toPrint=$toPrint."<tr>";
            foreach($row as $col){
                $toPrint=$toPrint."<td>".$col."</td>";
            }
            $toPrint=$toPrint."<tr>";
        }
        return view("Campo-estivo.Admin.Alloggi", [ "toPrint" => $toPrint, "available"=>$available]);


        
    }

    /**
     * This function takes an array with one or more id in it and search the table for
     * the user data connected to it. Than the whole matrix of data is returned
     *
     * @param ids the id of the users
     * @return allData the matrix with the data of the useres (one line per user)
     */
    public function getUsersData($ids){
        //matrix with the data
        $allData=array();
        for($i=0;$i<count($ids);$i++){
            //getting data, an array is returned
            $data=DB::table("person")
                ->where("id",$ids[$i])
                ->get(["name","lastname","born_date"]);
            //decoding the array to simplify it and putting in the matrix
            array_push($allData,json_decode($data,true)[0]);
        }
        return $allData;

    }
}

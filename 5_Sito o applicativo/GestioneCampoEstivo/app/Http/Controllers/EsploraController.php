<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Auth;
use Log;
use Session;

/**
 * Contorller of page explore
 *
 * @author Michea Colautti
 * @version 28.02.2023
 */
class EsploraController extends Controller
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
    * This method allows you to search for users according to the filters passed in the request.
    * It is used together with the returnData method to display the data in the explore page.
    *
    * @param request is the array containing the request data.    
    */
    public function searchUser(Request $request)
    {

        //
        $userData = $request->all();

        $userName = $userData["userName"];

        if (array_key_exists("userType", $userData)) {
            $userType = $userData["userType"];
        } else {
            $userType = ["guest", "volunteer", "nurse", "admin", "reference"];
        }

        if (array_key_exists("userState", $userData)) {
            $userState = $userData["userState"];
        } else {
            $userState = ["suspended", "approved"];
        }

        if (array_key_exists("userMansion", $userData)) {
            $userMansion = $userData["userMansion"];
        } else {
            $userMansion = [
                "cooking",
                "hospitality",
                "washing",
                "cafeteria",
                "infirmary",
                "",
            ];
        }

        $userName = $this->filterField($userName);

        //function to parse array in sql request.
        $userType = $this->toQuery($userType, "type");
        $userState = $this->toQuery($userState, "userState");
        $userMansion = $this->toQuery($userMansion, "userMansion");

        $query= "select id,name,lastname,born_date,type,userState,userMansion from person 
        where (name like " . "'%" . $userName . "%' OR lastname like " . "'%" . $userName . "%') 
        AND (" . $userType . ") AND (" . $userState . ") AND (" . $userMansion . ")";
        $users = DB::select($query);

        Session::put($query);

        $realArray = (array) $users;
        $searchedUser = array_values($realArray);
        $searchedUser=$this->returnData($searchedUser);
        return view("Campo-estivo.Esplora", ["searchedUser" => $searchedUser]);

        
    }

    /**
    * This method allows you to search for references within the list of users and write the correct data in the right field.
    *
    * @param searchedUser is the array containing the result of the request    
    */
    public function returnData($searchedUser){
        //getting all user that are references.
        $references=array();
        for($i=0;$i<count($searchedUser);$i++){
            $state=((array)$searchedUser[$i])["type"];
            if($state=="reference"){
                
                array_push($references, ((array)$searchedUser[$i])["id"]);
            }   

        }
        sort($references);
       

        //now I have refrences ID
        if(!empty($references)){

            //query all user that are references
            $queryRefId=$this->toQuery($references,"idReference");
            $queryRefId=str_replace('"',"",$queryRefId);
            $queryRefId=DB::select("select idGuest from referencePerson where ".$queryRefId);
        
            //Saving query and putting id of references into array
            $refId = (array) $queryRefId;
            $refId = array_values($refId);
            
            $useresIds=array();
            foreach ($refId as $el) {
                $realArray = (array) $el;
                $realArray = array_values($realArray);
                array_push($useresIds,$realArray[0]);
            }

            //now I have useresID ID


            //getting name and lastnames of users tied to references
            $queryReferedUser=$this->toQuery($useresIds,"id");
            $queryReferedUser=str_replace('"',"",$queryReferedUser);
            $queryReferedUser=DB::select("select id,name,lastname from person where ".$queryReferedUser);
            $referedUserInfo=array();
            foreach ($queryReferedUser as $el) {
                $realArray = (array) $el;
                $realArray = array_values($realArray);
                array_push($referedUserInfo,$realArray);
            }

            for($i=0;$i<count($referedUserInfo);$i++){
                array_push($referedUserInfo[$i],$references[$i]);
            }

            //now I have an array with: guestId | guestName | guestLastname | referenceId

            /**This part search for presence of "references" in the whole usersArray. 
            *when is found I search the right id in the array containgin the refereceData.
            *then the data "reference" is replaced
            */
            $finalArray=array();
            foreach($searchedUser as $el){
                $realArray = (array) $el;
				$realArray = array_values($realArray);
                for($i=0;$i<count($realArray);$i++){
                    if($realArray[$i]=="reference"){
                        for($j=0;$j<count($referedUserInfo);$j++){
                            //3 element is referenceId
                            if($realArray[0]==$referedUserInfo[$j][3]){
                                $realArray[$i]="Reference to ".$referedUserInfo[$j][1]." ".$referedUserInfo[$j][2];

                            }
                        }

                    }
                    
                }
                array_push($finalArray,$realArray);
                $searchedUser=$finalArray;
            }

        }
        return $searchedUser;
    }


   
    /**
    * This method allows you to filter and clean the fields.
    *
    * @param data is the data to clean.
    * @return view the cleaned data
    */
    public function filterField($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
    * This method allows to parse an array of data and a type into a query.
    *
    * @param data is the arrays of data
    * @param type is the type of data
    * @return res the query
    */
    public function toQuery($data, $type)
    {
        $res = "";
        for ($i = 0; $i < count($data); $i++) {
            $res = $res . $type . " = " . '"' . $data[$i] . '"' . " OR ";
        }
        $res = substr($res, 0, strlen($res) - 3);
        return $res;
    }

    /**
    * This method allows to sort a list according to a parameter
    *
    * @param el the parameter by which to sort the list
    * @return view the view with the data
    */
    public function orderBy($el)
    {
        if($el=="id"){
            Session::put("colorId","red");
            Session::forget("colorName");
            Session::forget("colorLastName");
            Session::forget("colorBornDate");
            Session::forget("colorType");
            Session::forget("colorUserState");
            Session::forget("colorMansion");

        }else if($el=="name"){
            Session::forget("colorId");
            Session::put("colorName","red");
            Session::forget("colorLastName");
            Session::forget("colorBornDate");
            Session::forget("colorType");
            Session::forget("colorUserState");
            Session::forget("colorMansion");

        }else if($el=="lastname"){
            Session::forget("colorId");
            Session::forget("colorName");
            Session::put("colorLastName","red");
            Session::forget("colorBornDate");
            Session::forget("colorType");
            Session::forget("colorUserState");
            Session::forget("colorMansion");

        }else if($el=="born_date"){
            Session::forget("colorId");
            Session::forget("colorName");
            Session::forget("colorLastName");
            Session::put("colorBornDate","red");
            Session::forget("colorType");
            Session::forget("colorUserState");
            Session::forget("colorMansion");

        }else if($el=="type"){
            Session::forget("colorId");
            Session::forget("colorName");
            Session::forget("colorLastName");
            Session::forget("colorBornDate");
            Session::put("colorType","red");
            Session::forget("colorUserState");
            Session::forget("colorMansion");
            
        }else if($el=="userState"){
            Session::forget("colorId");
            Session::forget("colorName");
            Session::forget("colorLastName");
            Session::forget("colorBornDate");
            Session::forget("colorType");
            Session::put("colorUserState","red");
            Session::forget("colorMansion");
            
        }else if($el=="userMansion"){
            Session::forget("colorId");
            Session::forget("colorName");
            Session::forget("colorLastName");
            Session::forget("colorBornDate");
            Session::forget("colorType");
            Session::forget("colorUserState");
            Session::put("colorMansion","red");
            
        }


        //if same as previous order opposide side
        $prev = Session::get("previous");
        
        if ($el != $prev) {
            if(empty(Session::get("order"))){
                Session::put("order"," ASC");

            }else if (Session::get("order") == " ASC") {
                Session::put("order"," DESC");

            } else {
                Session::put("order"," ASC");

            }
        } else {
            Session::put("previous", $el);
        }

        $query = Session::get("query");
        if (!empty($query)) {
            $query = $query . " ORDER BY " . $el . Session::get("order");
            $users = DB::select($query);

            $realArray = (array) $users;
            $searchedUser = array_values($realArray);

            $searchedUser=$this->returnData($searchedUser);
            return view("Campo-estivo.Esplora", ["searchedUser" => $searchedUser]);
        }
    }




    /**
    * This method allows you to open and load the user page
    *
    * @param index is the user's index to open
    * @param tok is a flag to distinguish methods
    * @return view the view with the data
    */
    public function openPage($index,$tok){
        Session::put("editId",$index);
        $results = DB::select("select * from person where id =" . "'" . $index . "'");
        if(empty($results)){
            print("<tr><h6>Utente non trovato</h6></tr>");
        }

        $data = array("Id", "Nome", "Cognome", "Numero di telefono", "Via", "CAP", "Nazione", "Ruolo", "Data di nascita", "UserId","Stato prifilo","Mansione");

        //retirve role
        $userId = \Auth::user()->id;
        $userRoleArray = DB::select(
            "select type,userState from person where regUserId =" .
                "'" .
                $userId .
                "'"
        );

        if ($userRoleArray != null) {
            $realArray = (array) $userRoleArray[0];
            $realArray = array_values($realArray);
            $_SESSION["role"] = $realArray[0];
            $_SESSION["state"] = $realArray[1];
        }

        $results=$this->returnData($results);
        $toPrint="";
        foreach ($results as $el) {
            $realArray = (array)$el;
            $realArray = array_values($realArray);

            if (empty(Session::get("editing"))) {

              for ($i = 0;$i < count($realArray);$i++) {
                $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>
                <td>" . $realArray[$i] . "</td>
                </tr>";
              }
            } else {
                for ($i = 0;$i < count($realArray);$i++) {
                    if ($i == 0 || $i == 7 || $i > 8) {

                        //userState and mansion are editable only by the Amdin.
                        if($i==10 && $tok=="otherUser"){
                            $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>
                            <td><select name='Stato prifilo' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white' required='required'>";
                            if($realArray[$i]=="approved"){
                                $toPrint=$toPrint.'<option selected="selected" "value="approved">approved</option>
                                <option value="suspended">suspended</option>';
                            }else{
                                $toPrint=$toPrint.'<option "value="approved">approved</option>
                                <option selected="selected" value="suspended">suspended</option>';
                            }
                            $toPrint=$toPrint."</select></div></td></tr>";
                        }else if($i==11 && $tok=="otherUser"){
                            $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>";
                            if(!empty($realArray[$i])){
                                $toPrint=$toPrint."<td><select name='Mansione' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white' required='required'>";
                                if($realArray[$i]=="cooking"){
                                    $toPrint=$toPrint.
                                    '<option selected="selected "value="cooking">Cucina</option>
                                    <option value="hospitality">Accoglienza</option>
                                    <option value="washing">Lavanderia</option>
                                    <option value="cafeteria">Servizio mensa</option>
                                    <option value="infirmary">Infermiere</option>';

                                }else if($realArray[$i]=="hospitality"){

                                    $toPrint=$toPrint.
                                    '<option value="cooking">Cucina</option>
                                    <option selected="selected" value="hospitality">Accoglienza</option>
                                    <option value="washing">Lavanderia</option>
                                    <option value="cafeteria">Servizio mensa</option>
                                    <option value="infirmary">Infermiere</option>';
                                    
                                }else if($realArray[$i]=="washing"){
                                    $toPrint=$toPrint.
                                    '<option  value="cooking">Cucina</option>
                                    <option value="hospitality">Accoglienza</option>
                                    <option selected="selected" value="washing">Lavanderia</option>
                                    <option value="cafeteria">Servizio mensa</option>
                                    <option value="infirmary">Infermiere</option>';
                                    
                                }else if($realArray[$i]=="cafeteria"){
                                    $toPrint=$toPrint.
                                    '<option value="cooking">Cucina</option>
                                    <option value="hospitality">Accoglienza</option>
                                    <option value="washing">Lavanderia</option>
                                    <option selected="selected" value="cafeteria">Servizio mensa</option>
                                    <option value="infirmary">Infermiere</option>';
                                    
                                }else if($realArray[$i]=="infirmary"){
                                    $toPrint=$toPrint.
                                    '<option value="cooking">Cucina</option>
                                    <option value="hospitality">Accoglienza</option>
                                    <option value="washing">Lavanderia</option>
                                    <option value="cafeteria">Servizio mensa</option>
                                    <option selected="selected" value="infirmary">Infermiere</option>';
                                    
                                }
                                $toPrint=$toPrint."</select></div></td></tr>";
                            }else{
                                $toPrint=$toPrint."<td></td>";
                            }

                        }else{
                            $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>
                                  <td>" . $realArray[$i] . "</td>
                                  </tr>";
                        }
                    } else if ($i == 8) {
                        $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>
                                  <td><input type='date' name=" . $data[$i] . "> Attuale: " . $realArray[$i] . "</input></td>
                                  </tr>";
                    } else {
                        $toPrint = $toPrint . "<tr>" . "<td><b>" . $data[$i] . "</b></td>
                                  <td><input type='text' name=" . $data[$i] . " placeholder=".$realArray[$i]."></div></td>
                                  </tr>";
                    }
                }
            }
        }
        if($tok=="otherUser"){
            return $toPrint;

        }else{
            return view("Campo-estivo.UserPageExplore", [ "toPrint" => $toPrint]);

        }
    }
}

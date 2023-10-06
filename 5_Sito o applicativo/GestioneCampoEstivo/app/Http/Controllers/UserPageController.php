<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Session;
use Log;

use Illuminate\Http\Request;


/**
 * Contorller for personal page
 *
 * @author Michea Colautti
 * @version 28.02.2023
 */
class UserPageController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }


    /**
    * This method allows you to exchange data in the session and reload the page.
    * Useful when editing/saving user data.
    *
    * @param request it's the array containing the request data
    * @return view it's the view with the data updated
    */
    public function editData(Request $request){
        if(!empty(Session::get("editing"))){
            Session::forget("editing");
            $data=$request->all();
            array_shift($data);
            $userId=\Auth::user()->id;
            $data=$this->fillData($data);
            $time = strtotime($data[6]);
            if ($time) {
                $data[6] = date('Y-m-d', $time);
            } else {
               return;
            }
            
           DB::table("person")
            ->where('regUserId', '=', $userId)
            ->update([
                "name"  => $data[0],
                "lastname" => $data[1],
                "phone_number" =>$data[2],
                "address" =>$data[3],
                "CAP" =>$data[4],
                "country" =>$data[5],
                "born_date" => $data[6],
            ]);

            return redirect()->route('UserPage');
        }else{
            Session::put("editing","edit");
            return redirect()->route('UserPage');
        }

    }

    /**
    * This method allows to fill the empty data left from the user in the edit page.
    *
    * @param data it's the data of the user
    * @return data it's the filled data
    */
    public function fillData($data){
        $data=array_values($data);
        $userId=\Auth::user()->id;

        $keys = array("name", "lastname", "phone_number", "address", "CAP", "country", "born_date");
        $oldData="select name,lastname,phone_number,address,CAP,country,born_date from person where regUserId = ".$userId;
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
    * This method allows to translate the regUserId to the actual id.
    *
    * @param regUserId it's the regUserId of the user.
    * @return id the user id
    */
    public function toId($regUserId){
        $data = DB::table("person")->where('regUserId', $regUserId)->get(['id']);
        if(count($data)>0){
            $data=(array)$data[0];
            $id=array_values($data);
            return $id[0];
        }
    }
}

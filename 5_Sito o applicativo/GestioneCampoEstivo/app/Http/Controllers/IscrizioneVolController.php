<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use Illuminate\Support\Facades\View;


class IscrizioneVolController extends Controller
{
    private $id;

    /**
    * This method allows you to save all user data and insert it in the DB.
    *
    * @param $request is the array containing the request data.
    */
    public function QueryAllDataVol(Request $request)
    {
        Log::debug("epporcodio");


        /**
        * From the request object I get the values ​​of the fields using the name
        */
        $nameTxt = $request->nameTxt;
        $lastNameTxt = $request->lastNameTxt;
        $bornDate = $request->bornDate;
        $viaTxt = $request->viaTxt;
        $CAP = $request->CAP;
        $nazione = $request->nazione;
        $phoneNumber = $request->phoneNumber;
        $userId=\Auth::user()->id;


       
        
        $nameRef = $request->nameRef;
        $nameRef = $nameRef ?? 'Non';

        $lastNameRef = $request->lastNameRef;
        $lastNameRef = $lastNameRef ?? 'Fornito';

        $bornDateRef = $request->bornDateRef;
        $bornDateRef = $bornDateRef ?? '1979-07-09';

        $viaRef = $request->viaRef;
        $viaRef = $viaRef ?? 'Non fornito';

        $capRef = $request->capRef;
        $capRef = $capRef ?? 'Non fornito';

        $nazioneRef = $request->nazioneRef;
        $nazioneRef = $nazioneRef ?? 'Non fornito';

        $phoneRef = $request->phoneRef;
        $phoneRef = $phoneRef ?? 'Non fornito';

        $phoneMom = $request->phoneMom;
        $phoneMom = $phoneMom ?? 'Non fornito';

        $phoneDad = $request->phoneDad;
        $phoneDad = $phoneDad ?? 'Non fornito';



       

        $docTxt = $request->docTxt;
        $phoneDad = $phoneDad ?? 'Non fornito';

        $phoneDoc = $request->phoneDoc;
        $phoneDad = $phoneDad ?? 'Non fornito';

        

        $luogoCompila = $request->luogoCompila;
        $dataComplia = $request->dataComplia;
        $signature = $request->signature;

        
        /**
         * Inserting a dataset into a table.
         */
        DB::table("person")->insert([
            "name" => $nameTxt,
            "lastname" => $lastNameTxt,
            "phone_number" => $phoneNumber,
            "address" => $viaTxt,
            "CAP" => $CAP,
            "country" => $nazione,
            "type" => "volunteer",
            "born_date" => $bornDate,
            "regUserId" => $userId,
            "userState" =>"suspended",
            "userMansion"=>"",
        ]);
        
        /**
        * Saving Guest(volunteer) id
        */
        $idGuest = DB::table("person")
            ->latest("id")
            ->first();
        $idGuest = $idGuest->id;

        DB::table("person")->insert([
            "name" => $nameRef,
            "lastname" => $lastNameRef,
            "phone_number" => $phoneRef,
            "address" => $viaRef,
            "CAP" => $capRef,
            "country" => $nazioneRef,
            "type" => "reference",
            "born_date" => $bornDateRef,
            "userMansion"=>"",

        ]);

        /**
        * Saving reference person ID
        */
        $idRef = DB::table("person")
            ->latest("id")
            ->first();
        $idRef = $idRef->id;

        DB::table("referencePerson")->insert([
            "idGuest" => $idGuest,
            "idReference" => $idRef,
        ]);
        return View::make('Campo-estivo/UserPage');


    }
}

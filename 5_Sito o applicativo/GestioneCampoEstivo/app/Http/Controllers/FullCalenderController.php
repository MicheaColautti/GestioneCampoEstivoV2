<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Log;
use DB;
use Session;

/**
 * Contorller for calendar
 *
 * @author Michea Colautti
 * @version 14.03.2023
 */
class FullCalenderController extends Controller
{
    /**
     * This method allows to check the data selected in the calendar.
     *
     * @param request the data from the form
     * @return view it's the calendar view data
     */
    public function checkCalendar(Request $request)
    {
		Session::forget("userName");
        Session::forget("usersId");

        //get data from the form, save them in separate variable.
        $request = $request->all();

        $cerca = $request["cerca"];
        $cerca = $this->filterField($cerca);

        if (is_null($cerca)) {
            $cerca = "";
        }

        //remove first and last element, useless. Save then array key, same as the fields names in the DB
        array_shift($request);
        array_pop($request);
        $mansions = array_keys($request);

        $ids = [];
        if (count($mansions) > 0) {
            $queryVol = (new EsploraController())->toQuery(
                $mansions,
                "userMansion"
            );
            $query = "select regUserId from person where " . $queryVol;

            //then get the actual id of the person searched.
            $idStd = DB::select($query);
            $realArray = array_values(((array) $idStd));
            foreach ($realArray as $el) {
                $el = (array) $el;
                array_push($ids, $el["regUserId"]);
            }

            //ids has id to search in table
        }

        //sessions aure used in index function
        Session::put("userName", $cerca);
        Session::put("usersId", $ids);
        return view("Campo-estivo.Admin.Disponibilita");
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
     * This method allows to select the data from the DB.
     *
     * @param request the data to select from the calendar
     * @return response the http response sended to the page
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            //get the name
            $name = "";
            $userMansion = [""];
            if (Session::get("userName") != null) {
                $name = Session::get("userName");
            }

            //verify is there are users with specific mansions to search
            $canProcede = false;
            if (Session::get("usersId") != null) {
                $usId = Session::get("usersId");
                $usId = $usId[0];
                if (!is_null($usId)) {
                    $canProcede = true;
                }
            }

            if ($canProcede) {
                Log::debug(Session::get("usersId"));
                Log::debug(Session::get("usersId"));

                //if there are users, searched.
                //name is always icluded. if name is leaved null it seach %%
                //sql return all names.
                $ids = Session::get("usersId");
                $data = Event::whereDate("start", ">=", $request->start)
                    ->whereDate("end", "<=", $request->end)
                    ->whereIn("idVolunteer", $ids)
                    ->where("title", "like", "%" . $name . "%")
                    ->get([
                        "id",
                        "idVolunteer",
                        "title",
                        "start",
                        "end",
                        "color",
                    ]);
            } else {
                //if not, ignored.
                $data = Event::whereDate("start", ">=", $request->start)
                    ->whereDate("end", "<=", $request->end)
                    ->where("title", "like", "%" . $name . "%")
                    ->get([
                        "id",
                        "idVolunteer",
                        "title",
                        "start",
                        "end",
                        "color",
                    ]);
            }

            //return data
            $response = response()->json($data);
            return $response;
        }
        return view("Campo-estivo.Admin.Disponibilita");
    }

    /**
     * This method allows to edit the calendar.
     *
     * @param request the data to edit from the calendar
     * @return view it's the calendar view data
     */
    public function action(Request $request)
    {
        //method from FullCalenda, when creating event put "true" in isEvent
        if ($request->ajax()) {
            if ($request->type == "add") {
                $event = Event::create([
                    "title" => $request->title,
                    "start" => $request->start,
                    "end" => $request->end,
                    "isEvent" => true,
                ]);

                return response()->json($event);
            }

            //change only this data when editing.
            if ($request->type == "update") {
                $event = Event::find($request->id)->update([
                    "title" => $request->title,
                    "start" => $request->start,
                    "end" => $request->end,
                ]);

                return response()->json($event);
            }

            if ($request->type == "delete") {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
}
?>

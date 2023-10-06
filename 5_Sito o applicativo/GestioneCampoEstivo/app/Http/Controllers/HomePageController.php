<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Session;
use Log;

use Illuminate\Http\Request;

/**
 * Contorller of camp home page
 *
 * @author Michea Colautti
 * @version 28.02.2023
 */
class HomePageController extends Controller
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
     * Getter (Sets in session) of the camp id
     *
     */
    public function setCampId()
    {
        $idCamp = DB::table("camp")
            ->latest("id")
            ->first();
        $idCamp = $idCamp->id;
        Session::put("campId", $idCamp);
    }

    /**
     * Getter of the title of the Camp.
     *
     * @return title of the Camp.
     */
    public function getTitle()
    {
        $title = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["title"]);
        if (Session::get("editTitle") == "edit") {
            //space cause loss of data
            $str = "'" . ((array) $title)["title"] . "'";

            return '<input type="text" value=' .
                $str .
                ' name="title" class="u-text-palette-2-light-1"></input>';
        } else {
            return '<span class="u-text-palette-2-light-1">' .
                $title->title .
                "<span>";
        }
    }

    /**
     * Getter of the edition of the Camp.
     *
     * @return edition of the Camp.
     */
    public function getEdition()
    {
        $edition = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["edition"]);

        if (Session::get("editEdition") == "edit") {
            $str = "'" . ((array) $edition)["edition"] . "'";

            return '<input type="text" style="font-size: 1.875rem" value=' .
                $str .
                'name="edition"></input>';
        } else {
            return '<span style="font-size: 1.875rem">' .
                $edition->edition .
                "<span>";
        }
    }

    /**
     * Getter of the news of the Camp.
     *
     * @return news of the Camp.
     */
    public function getNews()
    {
        $news = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["news"]);

        if (Session::get("editNews") == "edit") {
            $str = ((array) $news)["news"];

            return '<textarea name="news" style="font-size: 1.50rem; font-family:sans-serif; height: 130px; max-height: 450px; min-height: 130px; width: 450px; max-width: 1250px; min-width: 400px;" >' .
                $str .
                "</textarea>";
        } else {
            return '<span style="font-size: 1.50rem; font-family:sans-serif;"><pre style="font-family: sans-serif";">' . $news->news . "</pre><span>";
        }
    }

    /**
     * Getter of the infos of the Camp.
     *
     * @return infos of the Camp.
     */
    public function getInfo()
    {
        $infos = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["infos"]);
        $str = ((array) $infos)["infos"];
        
        if (Session::get("editInfos") == "edit") {
            return '<textarea name="infos" style="font-size: 1.50rem; font-family:sans-serif; height: 130px; max-height: 450px; min-height: 130px; width: 450px; max-width: 1250px; min-width: 400px;">' .
                "" .$str.
                "</textarea>";
        } else {
            return '<span style="font-size: 1.50rem"><pre style="font-family: sans-serif";>' . $str . "</pre><span>";
        }
    }

    /**
     * Getter of the histroy of the Camp.
     *
     * @return histroy of the Camp.
     */
    public function getHistory()
    {
        $history = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["history"]);
        return $history->history;
    }

    /**
     * Getter of the directive
     *
     * @return directive
     */
    public function getDirective()
    {
        $directive = DB::table("camp")
            ->where("id", Session::get("campId"))
            ->first(["staff_instructions"]);
        return $directive->staff_instructions;
    }

    /**
     * This function allows to edit all the camp informations.
     *
     * @param field it's the field that is beeing edited
     * @return view of the camp edited
     */
    public function editCamp(Request $request, $field)
    {
        if(Session::get("role")=="admin"){
            if ($field == "title") {
                if (!empty(Session::get("editTitle"))) {
                    Session::forget("editTitle");

                    if (is_null($request->title)) {
                        $this->getTitle();
                    } else {
                        $title = $this->filterField($request->title);
                        $this->queryData("title", $title);
                    }
                    $request->request->remove("title");
                    return redirect()->route("HomeCampo");
                } else {
                    Session::put("editTitle", "edit");
                    return redirect()->route("HomeCampo");
                }
            } elseif ($field == "edition") {
                if (!empty(Session::get("editEdition"))) {
                    Session::forget("editEdition");

                    if (is_null($request->edition)) {
                        $this->getEdition();
                    } else {
                        $edition = $this->filterField($request->edition);
                        $this->queryData("edition", $edition);
                    }
                    $request->request->remove("edition");
                    return redirect()->route("HomeCampo");
                } else {
                    Session::put("editEdition", "edit");
                    return redirect()->route("HomeCampo");
                }
            } elseif ($field == "news") {
                if (!empty(Session::get("editNews"))) {
                    Session::forget("editNews");

                    if (is_null($request->news)) {
                        $this->getNews();
                    } else {
                        $news = $this->filterField($request->news);
                        $this->queryData("news", $news);
                    }
                    $request->request->remove("news");
                    return redirect()->route("HomeCampo");
                } else {
                    Session::put("editNews", "edit");
                    return redirect()->route("HomeCampo");
                }
            } elseif ($field == "infos") {
                if (!empty(Session::get("editInfos"))) {
                    Session::forget("editInfos");

                    if (is_null($request->infos)) {

                        $this->getInfo();
                    } else {
                        $info = $this->filterField($request->infos);

                        $this->queryData("infos", $info);
                    }
                    $request->request->remove("infos");
                    return redirect()->route("HomeCampo");
                } else {
                    Session::put("editInfos", "edit");
                    return redirect()->route("HomeCampo");
                }
            }
        }
    }

    public function queryData($field, $data)
    {
        DB::table("camp")
            ->where("id", "=", Session::get("campId"))
            ->update([$field => $data]);
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
}

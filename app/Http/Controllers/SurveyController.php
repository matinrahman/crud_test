<?php
/**
 * Created by PhpStorm.
 * User: Matin
 * Date: 7/28/2018
 * Time: 4:59 PM
 */
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DataTables\SurveyDataTable;
use App\User;
use App\DataTables\SurveyDataTablesEditor;

class SurveyController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(SurveyDataTable $dataTable)
    {
        //
        $users= User::all();
        $userNames = array();

        foreach($users as $user){
            $userNames[]= $user->name;
        }

        return $dataTable->render('survey.index',['names' => $userNames]);

    }

    public function store(SurveyDataTablesEditor $editor)
    {
        return $editor->process(request());
    }

}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\getjsondatamodel;
use Illuminate\Support\Js;

class findjsondatacontroller extends Controller
{
    function result()
    {
        $fetch_data = getjsondatamodel::all();
        //return response()->json([$fetch_data], 200);
        //return response($fetch_data);

        // print_r($fetch_data[0]->id); die;

        $all_data = array();
        foreach($fetch_data as $data)
        {
            $word = $data->proccess_word;
            $id = $data->id;
            $score = $data->score;
            $plot = array("id" => $id, "score" =>$score,"word" => $word);
            array_push($all_data,$plot);
        }

        //print_r($all_data);

        return response()->json($all_data, 200);
    }
}

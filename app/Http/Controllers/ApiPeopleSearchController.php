<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiPeopleSearchController extends Controller
{


// this is where the api code goes
    public function searchPlayer(Request $request)  //request request is to communitcate with link
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.mysportsfeeds.com/v1.2/pull/nfl/2018-playoff/roster_players.json?fordate=20180121&player=",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Basic YXJteW1hbmpkOk15U3BvcnRzMSE=",
            "Cache-Control: no-cache",
            "Postman-Token: 57c6bac5-85fb-420d-a3db-ecb478372901"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}

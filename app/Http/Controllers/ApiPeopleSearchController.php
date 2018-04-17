<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
class ApiPeopleSearchController extends Controller
{


// this is where the api code goes
    public function searchQuestion(Request $request)  //request request is to communitcate with link
    {
        $query= $request->searchPlayer; //this variable was created to corrolate with the input name in the main.blade and goes in the link below in the end.

        $playerStats = self::searchStats($query); //is the new function being called for the additional api down below.

        $searchSchedule = self::searchSchedule($playerStats['cumulativeplayerstats']['playerstatsentry'][0]['team']['ID']);//this is the 3rd api function being called down below.

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.mysportsfeeds.com/v1.2/pull/nfl/2018-playoff/roster_players.json?fordate=20180121&player=$query", //$query comes from the above variable created
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

//we don need this code below that was a default from the paste
        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo $response;
        // instead create a new one below }

        //now create a new variable to convert api to php
        $players = json_decode($response, TRUE);

        //then now pass it on to the viewport
        //create a new variable
        $data = [
            'players'=> $players,
            'playerStats' => $playerStats,
            'searchSchedule'=> $searchSchedule
        ];
        return view ('playerstat')->with($data); //now this will send it to the view page inputed, now go and do a new web.php route
    }

// new function due to the newly added api url to grab our info...go to the top and create a variable to call it

public function searchStats($query)  //request request is to communitcate with link
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mysportsfeeds.com/v1.2/pull/nfl/2016-2017-regular/cumulative_player_stats.json?player=$query", //$query comes from the above variable created
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Basic aGV4YWdvbnN0b3JtczpJeW5tSWMyYTJiZiE=",
        "Cache-Control: no-cache",
        "Postman-Token: 57c6bac5-85fb-420d-a3db-ecb478372901"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    return json_decode($response, TRUE);
}

public function searchSchedule($teamId)  //request request is to communitcate with link
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mysportsfeeds.com/v1.2/pull/nfl/2017-regular/full_game_schedule.json?team=$teamId", //$query comes from the above variable created
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Basic aGV4YWdvbnN0b3JtczpJeW5tSWMyYTJiZiE=",
        "Cache-Control: no-cache",
        "Postman-Token: 57c6bac5-85fb-420d-a3db-ecb478372901"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    Log::info('stat response');
    Log::info($response);

    curl_close($curl);

    return json_decode($response, TRUE);
}






}

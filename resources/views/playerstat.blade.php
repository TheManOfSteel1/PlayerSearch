@extends('master')

@section('title')
    Start Player Search
@endsection

@section('content')
<?php //if(!empty($players)) dump($players); ?>
<?php //if(!empty($playerStats)) dump($playerStats); ?>
<?php //if(!empty($searchSchedule)) dump($searchSchedule); ?>

<section id="top" class="jumbotron jumbotron-fluid mb-0 @if (empty($response)) fullscreen @endif">

{{-- row 1 --}}
    {{-- <div class="row text-center" id="center">
        <div class="col-4">


            <div class="card mb-3">
                <img class="card-img-top" src="..." alt="Player Pic">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>


            </div>
        </div>
    </div> --}}

    {{-- row 2 --}}
        <div class="row text-center mt-3">
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title currentStatus"><p class="card-text">{{$players['rosterplayers']['playerentry'][0]['team']['City'] }}
                        {{$players['rosterplayers']['playerentry'][0]['team']['Name'] }}</h5>

                        <h5 class="card-title">{{$players['rosterplayers']['playerentry'][0]['player']['FirstName'] }}
                            {{$players['rosterplayers']['playerentry'][0]['player']['LastName']}}</h5>

                        <p class="card-text"> <strong><em></em>Jersey Number #</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['JerseyNumber']}}</p>
                        <p class="card-text"> <strong><em>Position:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['Position']}}</p>
                        <p class="card-text"> <strong><em>Age:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['Age']}}</p>
                        <p class="card-text"> <strong><em>Height:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['Height']}}</p>
                        <p class="card-text"> <strong><em>Weight:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['Weight']}}</p>
                        <p class="card-text"> <strong><em>Birthday:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['BirthDate']}}</p>
                        <p class="card-text"> <strong><em>Birth City:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['BirthCity'] }}</p>
                        <p class="card-text"> <strong><em>Birth Country:</em></strong> {{$players['rosterplayers']['playerentry'][0]['player']['BirthCountry']}}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

            @if (!empty($playerStats))
            <div class="col-3" "text-center">
                <div class="card mb-3">
                    <div class="card-body">


            <h5 class="card-title currentStatus"><p class="card-text"> Currents Stats</h5>
                <p class="card-text"> <strong><em>QB Rating:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['QBRating']['#text'] or 'Not Available'}}</p>
                <p class="card-text"> <strong><em>Sacked:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassSacks']['#text'] or 'Not Available'}}</p>
                <p class="card-text"> <strong><em>Rush Attempts:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['RushAttempts']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>GamesPlayed:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['GamesPlayed']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Attempts:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassAttempts']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Completions:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassCompletions']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Percentage:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassPct']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Average:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassAvg']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Yards Attempts:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassAttempts']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Passsing TDs:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassTD']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Pass Interceptions:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['PassInt']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>Longest Pass:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats'][ 'PassLng']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>20 yrds pass:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats'][ 'Pass20Plus']['#text'] or 'Not Available'}}</p>
            <p class="card-text"> <strong><em>40 yrds pass:</em></strong> {{$playerStats['cumulativeplayerstats']['playerstatsentry'][0]['stats']['Pass40Plus']['#text'] or 'Not Available'}}</p>

                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                    </div>
                </div>
            </div>
            @endif


@if (!empty($searchSchedule))
            <div class="col-6 text-center schedule">
                <div class="card mb-3">
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr class="currentStatus">
                                <th>Week</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Away</th>
                                <th>Home</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($searchSchedule["fullgameschedule"]["gameentry"] as $schedule )
                            <tr>
                              <td>{{$schedule["week"] or 'Not Available'}}</td>
                              <td>{{$schedule["date"] or 'Not Available'}}</td>
                              <td>{{$schedule["time"] or 'Not Available'}}</td>
                              <td>{{$schedule["awayTeam"]["City"] or 'Not Available'}}</td>
                              <td>{{$schedule["homeTeam"]['City'] or 'Not Available'}}</td>
                              <td>{{$schedule["location"] or 'Not Available'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

{{--
                        <h5 class="card-title">Upcoming Team Schedule</h5>
                        <p class="card-text">{{$searchSchedule["week"] or 'Not Available'}}</p>
                        <p class="card-text">{{$searchSchedule["date"] or 'Not Available'}}</p>
                        <p class="card-text">{{$searchSchedule["time"] or 'Not Available'}}</p>
                        <p class="card-text">{{$searchSchedule["week"] or 'Not Available'}}</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
@endif

    </div>








    </div>



</section>



@endsection

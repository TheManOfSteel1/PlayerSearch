@extends('master')

@section('title')
    Start Player Search
@endsection

@section('content')


<section id="top" class="jumbotron jumbotron-fluid @if (empty($response)) fullscreen @endif">

{{-- row 1 --}}
    <div class="row text-center">
        <div class="col-4">

            <div class="card mb-3">
                <img class="card-img-top" src="..." alt="Player Pic">
                <div class="card-body">
                    <h5 class="card-title">Player name</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>


            </div>
        </div>
    </div>

{{-- row 2 --}}
    <div class="row text-center">
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Player History</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col-4" "text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Players Current Stats</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col-4 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Team Schedule</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>



    </div>









    </div>



</section>



@endsection

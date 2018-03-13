@extends('master') @section('title') @endsection @section('content')


<style>
background: url('public/Images/Sports.jpg');
</style>

<!-- Header Jumbotron -->
<section id="top" class="jumbotron jumbotron-fluid @if (empty($response)) fullscreen @endif">
   {{-- <div class="container mt-5">
       <h1 class=" header-text display-4 text-center">Welcome to 1-Stop Music</h1>
       <p class="lead text-center">Your 1-Stop site for artists info, discography, and tour info.</p>
   </div> --}}
   <div class="container">
       <div class="row justify-content-center">
           <div id="search-headings" class="col-6 text-center">
               <h1 class="header-text">Star Player Search</h1>
               <br>

               <form method="POST" action="/get_player">
                   @csrf
                   <input name="searchArtist" type="text" id="query" value="" class="form-control" placeholder="Type your Star Player" />
                   <button type="submit" id="search" class="btn btn-lg" value="">Search</button placeholder="Type your star player">
                   <div id="results"></div>
               </form>
           </div>
       </div>
   </div>
</section>




{{-- @if (!empty($response))

@endif

{{-- @if (!empty($events))

@endif @endsection --}}

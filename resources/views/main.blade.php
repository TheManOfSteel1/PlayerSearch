@extends('master') @section('title') @endsection @section('content')




<!-- Header Jumbotron -->
<section id="top" class="jumbotron jumbotron-fluid mb-0 @if (empty($response)) fullscreen @endif">

   <div class="container fix">
       <div class="row justify-content-center">
           <div id="search-headings" class="col-6 text-center">
               <h1 class="header-text">NFL QB Player Search</h1>
               <br>

               <form method="POST" action="/get_player">
                   @csrf
                   <input name="searchPlayer" type="text" id="query" value="" class="form-control" placeholder="Type your Star Player" />
                   {{-- the input name will corrolate with the api in the $query you created and must go in the end of the link --}}
                   <button type="submit" id="search" class="btn btn-lg" value="">Search</button placeholder="Type your QB player">
               </form>
           </div>
       </div>
   </div>
   <div id="results"></div>

   {{-- <img src="Images/Stadium.jpg" class="jumbotron jumbotron-fluid" width="100%"/> --}}
</section>




@if (!empty($response))


@endif

{{-- @if (!empty($events))

@endif @endsection --}}

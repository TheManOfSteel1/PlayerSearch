@extends('master')

@section('title')
    Start Player Search
@endsection

@section('content')

    <style>
    p ,h5{
        color:white;
    }
    </style>

<section id="top" class="jumbotron jumbotron-fluid mb-0 @if (empty($response)) fullscreen @endif">
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">

            <img id="myPic" class="rounded-circle" width="350" height="300" src="/images/MyNewPic.jpg" >

        </div>
        <h5 class="card-title">Javier Duarte</h5>
        <p>
        </br>I'm a Valley Tech Academy alumni that is excited to create and complete tough challenges that push my learning experience to the limit.
    </br>We come all the way from asking ourselves "What the heck is this?" to "Whoa! I can do this!" to "I actually did it, yea I created it!"
</br>It's really about putting all the pieces together and understanding what each code means and does and where it needs to go.
</br>If we can do this.....then anybody can Code too...no matter what level of education one has.
</br>Valley Tech Academy...is the place to be!
</p>
        <div class="row">
        </div>
    </div>
</section>
@endsection

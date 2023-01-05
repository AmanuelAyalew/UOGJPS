@extends('layouts.app')

@section('content')

<style>



    h1 {
      text-align: center;
    }
    h5 {
      text-align: center;
    }
   
    </style>
    <h1 class="display-1">Welcome!!</h1>
    <br>
    <h1 class="text-muted">University of Gondar online job registration
        <br>
    </h1>
    <h5>
     <p class="font-italic">Click jobs lists button to see list of all jobs.</p>
     
     <a href="availablejobs" class="btn btn-primary btn-lg active-center" role="button" aria-pressed="true">job lists</a>
    </h5>
   
    
@endsection

@extends('layouts/app')

@section('content')


    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Medicine Name : {{$medicine ->name}}</h5>
    <p class="card-text">Medicine Price : {{$medicine ->price}}</p>
  
@endsection
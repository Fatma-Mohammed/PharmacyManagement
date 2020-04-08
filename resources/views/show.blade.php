@extends('layouts/app')

@section('content')


  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ALL ORDERS
  </a>
</nav>
<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">"user_name:"{{ $order->user ? $order->user->name : 'not exist'}}</h5>
          <p class="card-text">{{$order->doctor_id}}</p>
          <p class="card-text">{{$order->is_isured}}</p>
          <p class="card-text">{{$order->creator_type}}</p>
          <p class="card-text">{{$order->status}}</p>
          <p class="card-text">{{$order->pharmacy_id}}</p>
        
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
        
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>
<<<<<<< HEAD
@endsection
=======
>>>>>>> eff5ba0d33c177321d28a6e33e3453c5e6925799








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
   <a href="{{route('orders.index')}}">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ALL ORDERS
  </a>
</nav>
    <h1> MY ORDERS</h1>
    <table class="table">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">created_at</th>
      <th scope="col">user</th>
      <th scope="col">doctor</th>
      <th scope="col">is_isured</th>
      <th scope="col">creator_type</th>
      <th scope="col">status</th>
      <th scope="col">assigned_pharmacy</th>
      
      <th colspan="3" scope="col-3">actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)
    <tr>
      
      
      <td>{{$order->id}}</td>
      <td>{{$order->created_at}}</td>
      <td>{{ $order->user ? $order->user->name : 'not exist'}}</td>
      <td>{{$order->doctor_id}}</td>
      <td>{{$order->is_isured}}</td>
      <td>{{$order->creator_type}}</td>
      <td>{{$order->status}}</td>
      <td>{{$order->pharmacy_id}}</td>
      
      <td><a href="{{route('orders.show',['order'=> $order->id,'user'=> $order->user ? $order->user->id : 'not exist'])}}" class="btn btn-primary">view</a></td>
      <td><a data-toggle="modal" data-target="#myModal" class="btn btn-warning">delete</a></td>
      <td><a href="{{route('orders.edit',['order'=> $order->id])}}" class="btn btn-secondary">update</a></td>
      
   @endforeach
    </tr>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
      <a href="{{route('orders.destroy',['order'=> $order])}}" class="btn btn-warning">yes</a>
      <a href="{{route('orders.index')}}" class="btn btn-warning">no</a>
        
      </div>
    </div>

  </div>
</div>
   
  </tbody>
</table>


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





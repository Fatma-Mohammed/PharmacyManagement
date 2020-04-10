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
  <a class="navbar-brand" href="{{route('orders.index')}}">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ALL ORDERS
  </a>
</nav>
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<form method="GET" action="{{route('orders.update',['order'=>$order->id])}}">
  @csrf
  <div class="form-group">
  <input type="hidden" class="form-control" name="id" value="{{$order->id}}">
    <!-- <label for="exampleFormControlInput1">user</label>
    <input type="text" class="form-control" name="user" value="{{$order->user}}"> -->
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">doctor</label>
    <textarea class="form-control" name="doctor_id" rows="3">{{$order->doctor}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">assigned_pharmacy</label>
    <textarea class="form-control" name="pharmacy_id" rows="3">{{$order->assigned_pharmacy}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">status</label>
    <textarea class="form-control" name="status" rows="3">{{$order->status}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">is_isured</label>
    <textarea class="form-control" name="is_isured" rows="3">{{$order->is_isured}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">creator_type</label>
    <textarea class="form-control" name="creator_type" rows="3">{{$order->creator_type}}</textarea>
  </div>
  @foreach($order->medicines as $medicine)
  <div class="form-group">
    <label for="exampleFormControlTextarea1">medicine_name</label>
    <textarea class="form-control" name="medicine_name" rows="3">{{$medicine->name}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">medicine_price</label>
    <textarea class="form-control" name="medicine_price" rows="3">{{$medicine->price}}</textarea>
  </div>
 @endforeach

  <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
          
          <option value="{{ $order->user ? $order->user->id : 0}}">{{ $order->user ? $order->user->name : 'not exist'}}</option>
    
        </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>

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

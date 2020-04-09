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
  <a class="navbar-brand" href="{{route('useraddresses.index')}}">
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
<form method="GET" action="{{route('useraddresses.update',['useraddress'=>$useraddress->id]) }}">
  @csrf
  {{-- <div class="form-group">
  <input type="hidden" class="form-control" name="area_id" value="{{$useraddress->area_id}}">
    <!-- <label for="exampleFormControlInput1">user</label>
    <input type="text" class="form-control" name="user" value="{{$useraddress->street_name}}"> --> --}}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">area_id</label>
        <textarea class="form-control" name="area_id" rows="3">{{$useraddress->area_id}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">street_name</label>
        <textarea class="form-control" name="street_name" rows="3">{{$useraddress->street_name}}</textarea>
      </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">building_number</label>
    <textarea class="form-control" name="building_number" rows="3">{{$useraddress->building_number}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">floor_number</label>
    <textarea class="form-control" name="floor_number" rows="3">{{$useraddress->floor_number}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">falt_number</label>
    <textarea class="form-control" name="falt_number" rows="3">{{$useraddress->falt_number}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">is_main</label>
    <textarea class="form-control" name="is_main" rows="3">{{$useraddress->is_main}}</textarea>
  </div>
  {{-- <div class="form-group">
    <label for="exampleFormControlTextarea1">creator_type</label>
    <textarea class="form-control" name="creator_type" rows="3">{{$useraddress->creator_type}}</textarea>
  </div> --}}





  {{-- <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
          
          <option value="{{ $order->user ? $order->user->id : 'not exist'}}">{{ $order->user ? $order->user->name : 'not exist'}}</option>
    
        </select>
  </div> --}}
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
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
   <a href="{{route('useraddresses.index')}}">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ALL useraddresses
  </a>
</nav>
    <h1> MY useraddresses</h1>
    <table class="table">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">created_at</th>
      <th scope="col">area_id</th>
      <th scope="col">street_name</th>
      <th scope="col">building_number</th>
      <th scope="col">floor_number</th>
      <th scope="col">falt_number</th>
      <th scope="col">is_main</th>
      <th colspan="3" scope="col-3">actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($useraddresses as $useraddress)
    <tr>
      
      
      <td>{{$useraddress->id}}</td>
      <td>{{$useraddress->created_at}}</td>
      {{-- <td>{{ $useraddress->user ? $useraddress->user->name : 'not exist'}}</td> --}}
      <td>{{$useraddress->area_id}}</td>
      <td>{{$useraddress->street_name}}</td>
      <td>{{$useraddress->building_number}}</td>
      <td>{{$useraddress->floor_number}}</td>
      <td>{{$useraddress->falt_number}}</td>
      <td>{{$useraddress->is_main}}</td>

      <td><a href="{{route('useraddresses.show',['useraddress'=> $useraddress->id])}}" class="btn btn-primary">view</a></td>
      <td><a data-toggle="modal" data-target="#myModal" class="btn btn-warning">delete</a></td>
      <td><a href="{{route('useraddresses.edit',['useraddress'=> $useraddress->id])}}" class="btn btn-secondary">update</a></td>
      
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
      <a href="{{route('useraddresses.destroy',['useraddress'=> $useraddress])}}" class="btn btn-warning">yes</a>
      <a href="{{route('useraddresses.index')}}" class="btn btn-warning">no</a>
        
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
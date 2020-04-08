@extends('layouts/app')

@section('content')

<a href="{{route('medicine.create')}}" class="btn btn-success mb-5"> Create Medicine</a>
<table class="table">

<thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">price</th>
                <th></th>
                <th>Actions</th>
                <th></th>
                </tr>
 </thead>
 <tbody>
          
            @foreach($medicines as $medicine)
                <tr>
                <td scope="row">{{$medicine['id']}}</th>
                <td>{{$medicine['name']}}</td>
                <td>{{$medicine['price']}}</td>
                <td> <a href="{{route('medicine.show' , ['medicine' =>$medicine['id']])}}" class="btn btn-primary btn-sm"> View Medicine </a> </td>
                <td> <a href="{{route('medicine.edit' , ['medicine' =>$medicine['id']])}}" class="btn btn-secondary btn-sm"> Edit Medicine </a> </td>
                <td> <a href="{{route('medicine.delete' , ['medicine' =>$medicine['id']])}}" class="btn btn-danger btn-sm"                onclick="return confirm('Are you sure that you want to delete this post ?')">
                          Delete Medicine </a> </td>
                </tr>
</tbody>
              @endforeach

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>

@endsection
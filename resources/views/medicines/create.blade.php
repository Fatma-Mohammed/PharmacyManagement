
@extends('layouts/app')


@section('content')


<form method="POST" action="{{route('medicine.store')}}" enctype="multipart/form-data">
@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <textarea name="price" class="form-control">
    </textarea>
      </div>


    <!-- <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
   -->

</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@extends('layouts/app')


@section('content')


<form method="POST" action="{{route('medicine.update',['medicine' => $medicine['id']] )}}">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Drug name :</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price :</label>
    <textarea name="price" class="form-control">
    </textarea>
      </div>
    


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
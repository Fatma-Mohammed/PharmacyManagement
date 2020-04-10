

@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>ALL OREDERS</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Title of panel goes here</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <section>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form method="POST" action="{{route('useraddresses.store')}}">
              {{ csrf_field() }}
              {{-- <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
              </select>
        </div> --}}
        <div class="form-group">
          <label for="exampleFormControlInput1">area_id</label>
          <input type="text" class="form-control" name="area_id">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">street_name</label>
          <input type="text" class="form-control" name="street_name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">building_number</label>
          <input type="text" class="form-control" name="building_number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">floor_number</label>
          <input type="text" class="form-control" name="floor_number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">falt_number</label>
          <input type="text" class="form-control" name="falt_number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">is_main</label>
          <input type="text" class="form-control" name="is_main">
        </div>




        <div class="form-group">
          <label for="exampleFormControlSelect1">Users</label>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        </section>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


@section('addional_js_includes')

@endsection
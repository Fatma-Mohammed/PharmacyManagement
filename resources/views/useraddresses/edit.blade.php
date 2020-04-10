
@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit address</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection

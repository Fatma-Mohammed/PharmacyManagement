@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Test Page</h3>
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

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection





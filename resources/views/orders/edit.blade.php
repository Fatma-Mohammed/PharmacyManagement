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
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">doctor</label>
    <textarea class="form-control" name="doctor_id" rows="3">{{$order->doctor}}</textarea>
  </div> -->

  <div class="form-group">
    <label for="exampleFormControlSelect1">Doctors</label>
    <select name="doctor_id" class="form-control " value="{{$order->doctor}}">
        @foreach($doctors as $doctor)  
          <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
        </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">ASSIGINED_PHARMACY</label>
    <select name="pharmacy_id" class="form-control " value="{{$order->assigned_pharmacy}}">
        @foreach($pharmacys as $pharmacy)  
          <option value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
        @endforeach
        </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">status</label>
    <input class="form-control" name="status" type="text" value="{{$order->status}}">
  </div>






  <div class="form-group">
    <label for="exampleFormControlSelect1">is_isured</label>
    <select name="is_isured" class="form-control " value="{{$order->is_isured}}">
          
          <option value=0 >false</option>
          <option value= 1 >true</option>
        
        </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">creator_type</label>
    <select name="creator_type" class="form-control" value={{$order->creator_type}}>
          
          <option value="user">user</option>
          <option value="doctor">doctor</option>
          <option value="pharmacy">pharmacy_owner</option>
        
        </select>
  </div>


  @foreach($order->medicines as $medicine)
  <div class="form-group">
    <label for="exampleFormControlTextarea1">medicine_name</label>
    <input class="form-control" name="medicine_name" rows="3" value="{{$medicine->name}}">
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





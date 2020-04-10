

@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>ORDERS</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>ORDERS</h2>
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
                        <form method="POST" action="{{route('orders.store')}}">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">MEDICINE</label>
  <select name="medicine_id" class="form-control" id="selected">
        @foreach($medicines as $medicine)  
          <option value="{{$medicine->id}}">{{$medicine->name}}</option>
        @endforeach
        </select><br/>
        <!-- <input value="{{$medicine->id}}">{{$medicine->name}}> -->
        <label for="exampleFormControlInput1">quantity</label>
        <input type="text" class="form-control" name="quantity" id="quantity"> 
        <input type='button' name='calculate' id='calculate' value="calculate">
        <label for="exampleFormControlInput1">total_price</label>
        <input type="text" class="form-control" name="total_price"> 
        
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Doctors</label>
    <select name="doctor_id" class="form-control ">
        @foreach($doctors as $doctor)  
          <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">ASSIGINED_PHARMACY</label>
    <select name="pharmacy_id" class="form-control ">
        @foreach($pharmacys as $pharmacy)  
          <option value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
        @endforeach
        </select>
  </div>
    <label for="exampleFormControlTextarea1">status</label>
    <input   class="form-control" name="status" type="text"/>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">is_isured</label>
    <select name="is_isured" class="form-control ">
          
          <option value=0 >false</option>
          <option value= 1 >true</option>
        
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">creator_type</label>
    <select name="creator_type" class="form-control ">
          
          <option value="user">user</option>
          <option value="doctor">doctor</option>
          <option value="pharmacy">pharmacy_owner</option>
        
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">deleviring_address</label>
    <select name="deliviring_address" class="form-control ">
        @foreach($addresses as $address)  
          <option value="{{$address->id}}">{{$address->street_name}}</option>
        @endforeach
        </select>
  </div>




  <div class="form-group">
    
   
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
<script src="/assets/js/calculate.js"></script>
@endsection



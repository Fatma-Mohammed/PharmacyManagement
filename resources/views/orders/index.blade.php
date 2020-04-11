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
                        <h1> MY ORDERS</h1>
    <table class="table">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">created_at</th>
      <th scope="col">user</th>
      <th scope="col">doctor</th>
      <th scope="col">is_isured</th>
      <th scope="col">creator_type</th>
      <th scope="col">status</th>
      <th scope="col">assigned_pharmacy</th>

      
      <th colspan="3" scope="col-3">actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)
   
    <tr>
      
      
      <td>{{$order?$order->id:""}}</td>
      <td>{{$order?$order->created_at:""}}</td>
      <td>{{ $order->user ? $order->user->name : 'not exist'}}</td>
      <td>{{ $order->doctor ? $order->doctor->name : 'not exist'}}</td>
      <td>{{$order?$order->is_isured:""}}</td>
      <td>{{$order?$order->creator_type:""}}</td>
      <td>{{$order?$order->status:""}}</td>
      <td>{{ $order->pharmacy ? $order->pharmacy->name : 'not exist'}}</td>
     
      
      <td><a href="{{route('orders.show',['order'=> $order->id,'user'=> $order->user ? $order->user->id : 'not exist'])}}" class="btn btn-primary">view</a></td>
      <td><a href="{{route('orders.edit',['order'=> $order->id])}}" class="btn btn-secondary">update</a></td>
      <!-- <td><a data-toggle="modal" data-target="#myModal" class="btn btn-warning">delete</a></td> -->
      <td><a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete-modal-{{$order->id}}">Delete</a></td>
      <div class="modal fade" id="delete-modal-{{$order->id}}" tobindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form method="POST"  action="{{route('orders.destroy',$order->id)}}">
                      @csrf
                      @method('DELETE')
                      <div class="modal-header">
                        <h5 class="modal-title">Delete order #{{$order->id}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Click delete to delete the order!
                        
                      </div>
                      <div class="modal-body">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>

                      </div>

                    </form>
                    </div>
                  </div>
              </div>
             
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
      
      <a href="{{route('orders.destroy',['order'=> $order->id])}}" class="btn btn-warning">yes</a>
      <a href="{{route('orders.index')}}" class="btn btn-warning">no</a>
       
      </div>
    </div>
   
  </div>
</div>
   
  </tbody>
</table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection






<!-- /////////////// -->



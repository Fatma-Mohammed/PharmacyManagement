

@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3> ALL User Addresses
      </h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>User Adresses</h2>
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
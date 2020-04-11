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

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection








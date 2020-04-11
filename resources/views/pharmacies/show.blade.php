@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $pharmacy->name }}</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Info of Pharmacy #{{ $pharmacy->id }}</h2>
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

                        <form class="form-horizontal form-label-left">
                            <div class="text-center">
                                <img src="/storage/{{$pharmacy->avatar_image}}" class="img-fluid rounded"
                                     alt="Responsive image">
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy ID</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->id }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy Name</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy Email</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy National ID</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->national_id }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy Priority</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->priority }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy Area ID</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->area_id }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Pharmacy Creation Date</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->created_at }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Last Modification On: </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="{{ $pharmacy->updated_at }}">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <a href="{{ route('pharmacies.destroy') }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ route('pharmacies.edit', $pharmacy->id) }}"
                                       class="btn btn-primary">Edit</a>
                                    <a href="{{ route('pharmacies.index') }}" class="btn btn-success">All Pharmacies
                                        Page</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection

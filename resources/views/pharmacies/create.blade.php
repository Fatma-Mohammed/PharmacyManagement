@extends('dashboard-main')

@section('addional_css_includes')
@endsection

@section('content')

    <div class="">
        {{--        TODO : bradcrumbs--}}
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
                        <h2>Personal Info</h2>
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

                            <form class="form-horizontal form-label-left" novalidate method="post"
                                  action="{{route('pharmacies.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name
                                        <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" data-validate-length-range="6"
                                               data-validate-words="1" name="name"
                                               placeholder="Name of the Pharmacy" required="required" type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                                        <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email" name="email" required="required"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="password"
                                           class="col-form-label col-md-3 label-align">Password</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password" type="password" name="password"
                                               data-validate-length="5,8"
                                               class="form-control" required="required">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="password2" class="col-form-label col-md-3 col-sm-3 label-align ">Repeat
                                        Password</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password2" type="password" name="password2"
                                               data-validate-linked="password" class="form-control"
                                               required="required">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="occupation">National
                                        ID
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" name="national_id"
                                               class="optional form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Priority
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="number" id="number" name="priority" required="required"
                                               data-validate-minmax="10,100" class="form-control">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">Area
                                        ID
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="area_id" required="required"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="textarea">Avatar
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="avatar" type="file">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('pharmacies.index') }}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>


                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')
    <!-- FastClick -->
    <script src="/assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/assets/js/nprogress.js"></script>
    <!-- validator -->
    <script src="/assets/js/validator.js"></script>
@endsection

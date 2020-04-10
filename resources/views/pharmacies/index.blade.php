@extends('dashboard-main')

@section('addional_css_includes')
    <link rel="stylesheet" type="text/css" href="/assets/css/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.bootstrap.min.css"/>
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

                            <table id="datatable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Avatar_image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>National_id</th>
                                    <th>Priority</th>
                                    <th>Area_id</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

    <script type="text/javascript" src="/assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="/assets/js/dataTables.responsive.min.js"></script>

    <script>


        // reinitialize the datatable
        let _datatable = $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{{route('pharmacies.index')}}',
            dom: 'Bfrtip',
            buttons: [
                'pageLength',
                'colvis',
                {
                    extend: 'collection',
                    text: 'Export <i class="fa fa-chevron-down"></i>',
                    key: {
                        key: 'p',
                        altkey: true
                    },
                    buttons: ['copy', 'excel', 'print', 'pdf', 'csv'],
                    autoClose: true,
                    fade: 500
                },
            ],
            columns: [
                {data: "id", name: "ID"},
                {
                    data: "avatar_image",
                    name: "avatar_image",
                    orderable: false,
                    render: function (data) {
                        return "<img src='/storage/" + data + "' width='40' height='40' />"
                    }
                },
                {data: "name", name: "name"},
                {data: "email", name: "email"},
                {data: "national_id", name: "national_id"},
                {data: "priority", name: "priority"},
                {data: "area_id", name: "area_id"},
                {data: "created_at", name: "created_at"},
                {data: "updated_at", name: "updated_at"},
                {
                    orderable: false,
                    render: function (data) {
                        return '<div class="btn-group">\n                            <button\n                                onclick=""\n                                type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View\n                            </button>\n                            <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"\n                                    aria-expanded="false"><span class="caret"></span> <span class="sr-only">Toggle Dropdown</span>\n                            </button>\n                            <ul class="dropdown-menu pull-right" role="menu">\n                                <li><a onclick=""><i class="fa fa-refresh"></i> Update </a></li>\n                                <li><a onclick=""><i class="fa fa-eye"></i> Ban </a></li>\n                                <li><a onclick=""><i class="fa fa-pencil"></i>Edit </a></li>\n                                <li class="divider"></li>\n                                <li><a onclick=""><i class="fa fa-trash-o"></i> Delete</a></li>\n                            </ul>\n                        </div>'
                    }
                }
            ],

            /*"scrollX": true,*/
            aaSorting: [],
            "pageLength": 10
        }); // end datatable


        function f() {

        }

    </script>

@endsection

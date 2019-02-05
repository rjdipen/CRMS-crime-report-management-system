@extends('layouts.master')
@section('title')
    User List
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All User List</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td class="text-center"><a class="btn btn-xs btn-primary p-0" href="{{action('User\UserlistController@userToAdmin', ['id' => $row->id])}}"  onclick="return confirm('Are you sure to make him Admin?')" title="Admin">{{$row->userType}}</a></td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('User\UserlistController@del',['id' => $row->id])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [3,4] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);

            });
        });



    </script>

@endsection

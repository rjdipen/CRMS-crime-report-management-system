@extends('layouts.adminMaster')
@extends('admin.box.email.inboxEmailBox')
@section('title')
    Project Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Inbox Email</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>01</td>
                                <td>Test email</td>
                                <td>marjan@gmail.com</td>
                                <td>This is first mail</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn" data-name="" data-dscr="" data-id=""  data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-eyedropper"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href=""  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                                </td>
                            </tr>

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
                    { orderable: false, "targets": [2] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var description = $(this).data('dscr');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=description]').val(description);

            });
        });



    </script>

@endsection

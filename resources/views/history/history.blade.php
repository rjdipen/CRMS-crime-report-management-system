@extends('layouts.master')
@extends('box.history.historyBox')
@section('title')
    History
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b>Create New History</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">History</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-right" width="70">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($history as $row)
                            <tr>
                                <td>{{$row->historyID}}</td>
                                <td>
                                    <div class="media-left media-middle">
                                        <a href="#"><img src="{{asset('public/image/historyImg/'.$row->historyID.'.jpg')}}" class="rounded no-border-radius img-xs" alt=""></a>
                                    </div>
                                </td>
                                <td>{{$row->title}}</td>
                                <td>{{str_limit($row->description, 100, '...')}}</td>
                                <td class="text-right p-10">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn"
                                            data-title="{{$row->title}}"
                                            data-dscr="{{$row->description}}"
                                            data-id="{{$row->blogID}}"
                                            data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('History\HistoryController@del', ['id' => $row->historyID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
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
                    { orderable: false, "targets": [4] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var description = $(this).data('dscr');


                $('#ediID').val(id);
                $('#ediModal [name=title]').val(title);
                $('#ediModal [name=description]').val(description);

            });
        });



    </script>

@endsection

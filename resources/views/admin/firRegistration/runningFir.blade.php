@extends('layouts.adminMaster')
@section('title')
    FIR
@endsection
@section('content')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Running  Fir</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th width="20">S/N</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>NID</th>
                            <th>Crime Type</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td><span class="text-muted">{{$row->firID}}</span></td>
                                <td>{{$row->vName}}</td>
                                <td>{{$row->vMobile}}</td>
                                <td>{{$row->vNid}}</td>
                                <td>{{$row->crimeType['name']}}</td>
                                <td><a class="btn btn-xs btn-primary p-0" href="{{action('Fir\AdminFirController@complete',['id' => $row->firID])}}"  onclick="return confirm('Are you sure to Completed this FIR ?')" title="End">{{$row->status}}</a></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Fir\AdminFirController@fir_details', ['id' => $row->firID])}}"  title="Details"style="text-align: left;"><i class="icon-eye"></i>Details</a></li>
                                                <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Fir\AdminFirController@del', ['id' => $row->fir_details])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
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
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/pickers/datepicker.js')}}"></script>
    <script type="text/javascript">
        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [5,6] }//For Column Order
                ]
            });
        });

        $(function () {
            // Single picker
            $('.daterange-single').daterangepicker({
                singleDatePicker: true
            });
        });

    </script>

@endsection

@extends('layouts.adminMaster')
@section('title')
    General Dairy
@endsection
@section('content')
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All New General Dairy</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th width="20">S/N</th>
                            <th width="350">Subject</th>
                            <th width="300">Email</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td><span class="text-muted">{{$row->generaldairyID}}</span></td>
                                <td>
                                    <div class="media-left">
                                        <div class=""><a href="#" class="text-default text-semibold">{{$row->subject}}</a></div>
                                        <div class="text-muted text-size-small">
                                            <span class="status-mark border-blue position-left"></span>
                                            {{pub_date($row->created_at)}}
                                        </div>
                                    </div>
                                </td>

                                <td>{{$row->email}}</td>
                                <td><a class="btn btn-xs btn-primary p-0" href="{{action('Gd\AdminGdController@running', ['id' => $row->generaldairyID])}}"  onclick="return confirm('Are you sure to Approved this General Dairy ?')" title="End">{{$row->status}}</a></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Gd\AdminGdController@show_details', ['id' => $row->generaldairyID])}}"  title="Details"style="text-align: left;"><i class="icon-eye"></i> View Details</a></li>
                                                <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Gd\AdminGdController@del', ['id' => $row->generaldairyID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>
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
                    { orderable: false, "targets": [3,4] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var imechessis = $(this).data('imechessis');
                var lplace = $(this).data('lplace');
                var goodscolor = $(this).data('goodscolor');
                var goodscategory = $(this).data('policestation');
                var goodssubcategory = $(this).data('goodssubcategory');
                var policestation = $(this).data('policestation');
                var missingdate = $(this).data('missingdate');
                var contact = $(this).data('contact');
                var tag = $(this).data('tag');
                var description = $(this).data('description');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=policeStationID]').val(policestation);
                $('#ediModal [name=imeChessis]').val(imechessis);
                $('#ediModal [name=lPlace]').val(lplace);
                $('#ediModal [name=goodsColor]').val(goodscolor);
                $('#ediModal [name=goodsCategoryID]').val(goodscategory);
                $('#ediModal [name=goodsSubcategoryID]').val(goodssubcategory);
                $('#ediModal [name=missingDate]').val(missingdate);
                $('#ediModal [name=contact]').val(contact);
                $('#ediModal [name=tag]').val(tag);
                $('#ediModal [name=description]').val(description);

            });

            // Single picker
            $('.daterange-single').daterangepicker({
                singleDatePicker: true
            });
        });

    </script>

@endsection

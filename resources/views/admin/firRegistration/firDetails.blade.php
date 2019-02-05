@extends('layouts.adminMaster')
@section('title')
    FIR
@endsection
@section('content')
    <div class="row m-20">
        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 p-10">
            <form action="" method="" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}
                <div class="panel">
                    <div class="panel-heading bg-slate">
                        <h6 class="panel-title text-center"><i class="icon-clipboard3 pr-5"></i><span> Fir Registration Details</span></h6>
                    </div>
                    @foreach($fir as $row)
                        <div class="panel panel-flat no-margin-bottom">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-pencil5 pr-5"></i><span> Victim Information</span><span class="pull-right">Date: {{pub_date($row->created_at)}}</span></h6>
                            </div>
                            <div class="panel-body">
                                <div class="well">
                                    <dl class="dl-horizontal">
                                        <dt>Victim Name</dt>
                                        <dd>{{$row->vName}}</dd>
                                        <dt class="mt-10">Father Name</dt>
                                        <dd class="mt-10">{{$row->vfName}}</dd>
                                        <dt class="mt-10">Mother Name</dt>
                                        <dd class="mt-10">{{$row->vmName}}</dd>
                                        <dt class="mt-10">Mobile</dt>
                                        <dd class="mt-10">{{$row->vMobile}}</dd>
                                        <dt class="mt-10">NID Number</dt>
                                        <dd class="mt-10">{{$row->vNid}}</dd>
                                        <dt class="mt-10">Age</dt>
                                        <dd class="mt-10">{{$row->vAge}}</dd>
                                        <dt class="mt-10">Present Address</dt>
                                        <dd class="mt-10">{{$row->vPresentAddress}}</dd>
                                        <dt class="mt-10">Permanent Address</dt>
                                        <dd class="mt-10">{{$row->vPermanentAddress}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-flat no-margin-bottom">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-pencil5 pr-5"></i><span> Criminal Information</span></h6>
                            </div>
                            <div class="panel-body">
                                <div class="well">
                                    <dl class="dl-horizontal">
                                        <dt>Criminal Name</dt>
                                        <dd>{{$row->cName}}</dd>
                                        <dt class="mt-10">Father Name</dt>
                                        <dd class="mt-10">{{$row->cfName}}</dd>
                                        <dt class="mt-10">Criminal Name<span class="text-size-small">(two)</span></dt>
                                        <dd class="mt-10">{{$row->cName1}}</dd>
                                        <dt class="mt-10">Father Name<span class="text-size-small">(two)</span></dt>
                                        <dd class="mt-10">{{$row->cfName1}}</dd>
                                        <dt class="mt-10">Criminal Name<span class="text-size-small">(three)</span></dt>
                                        <dd class="mt-10">{{$row->cName2}}</dd>
                                        <dt class="mt-10">Father Name<span class="text-size-small">(three)</span></dt>
                                        <dd class="mt-10">{{$row->cfName2}}</dd>
                                        <dt class="mt-10">Mobile</dt>
                                        <dd class="mt-10">{{$row->cMobile}}</dd>
                                        <dt class="mt-10">Age</dt>
                                        <dd class="mt-10">{{$row->cAge}}</dd>
                                        <dt class="mt-10">Present Address</dt>
                                        <dd class="mt-10">{{$row->cPresentAddress}}</dd>
                                        <dt class="mt-10">Permanent Address</dt>
                                        <dd class="mt-10">{{$row->cPermanentAddress}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-pencil5 pr-5"></i><span> Crime Details</span></h6>
                            </div>
                            <div class="panel-body">
                                <div class="well">
                                    <dl class="dl-horizontal">
                                        <dt>Police Station</dt>
                                        <dd>{{$row->policeStation['name']}}</dd>
                                        <dt class="mt-10">Zila</dt>
                                        <dd class="mt-10">{{$row->zila['name']}}</dd>
                                        <dt class="mt-10">Upazila</dt>
                                        <dd class="mt-10">{{$row->upazila['name']}}</dd>
                                        <dt class="mt-10">Crime Type</dt>
                                        <dd class="mt-10">{{$row->crimeType['name']}}</dd>
                                        <dt class="mt-10">Crime Date</dt>
                                        <dd class="mt-10">{{$row->cDate}}</dd>
                                        <dt class="mt-10">Crime Location</dt>
                                        <dd class="mt-10">{{$row->cLocation}}</dd>
                                        <dt class="mt-10">Crime Time</dt>
                                        <dd class="mt-10">{{$row->cTime}}</dd>
                                        <dt class="mt-10">Crime Description</dt>
                                        <dd class="mt-10">{{$row->cDescription}}</dd>

                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
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

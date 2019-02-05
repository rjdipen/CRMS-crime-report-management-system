@extends('layouts.adminMaster')
@extends('admin.box.missing.personBox')
@section('title')
    Found Person
@endsection
@section('content')
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Found Person</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>End Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                        <tr>
                            <td><span class="text-muted">{{$row->missingPersonID}}</span></td>
                            <td>
                                <div class="media-left media-middle">
                                    <a href="#"><img src="{{asset('public/image/missingPersonImg/'.$row->missingPersonID.'.jpg')}}" class="rounded no-border-radius img-xs" alt=""></a>
                                </div>
                                <div class="media-left">
                                    <div class=""><a href="#" class="text-default text-semibold">{{$row->name}}</a></div>
                                    <div class="text-muted text-size-small">
                                        <span class="status-mark border-blue position-left"></span>
                                        {{pub_date($row->created_at)}}
                                    </div>
                                </div>
                            </td>
                            <td>{{$row->division['name']}}</td>
                            <td>{{$row->gender['name']}}</td>
                            <td><a class="btn btn-xs btn-primary p-0">{{$row->status}}</a></td>
                            <td>{{pub_date($row->completeDate)}}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                            <li>
                                                <button type="button" class="btn bg-slate-600 no-border-radius ediBtn" data-toggle="modal" data-target="#showModal{{$row->missingPersonID}}" style="width: 100%;text-align: left;">
                                                    <i class="icon-eye pr-10"></i> View Detail
                                                </button>
                                            </li>
                                            <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Missing\MissingPersonController@del', ['id' => $row->missingPersonID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        {{--start Show modal--}}
                        <div id="showModal{{$row->missingPersonID}}" class="modal fade">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-slate-600 pt-10 pb-10">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h5 class="modal-title"><i class=" icon-magazine pr-10"></i> Completed Missing Person Details</h5>
                                    </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="thumbnail no-padding no-margin-bottom">
                                                        <div class="thumb">
                                                            <img class="img-responsive" style="height:450px; border-radius: 0px;" src="{{asset('public/image/missingPersonImg/'.$row->missingPersonID.'.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="panel-heading bg-slate-400 pt-5 pb-5" style="border-radius: 0px;">
                                                            <h6 class="panel-title text-capitalize">{{$row->name}}</h6>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="col-md-6 no-padding-left">
                                                                <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                    <li><p class="text-semibold">Age:<span class="text-regular pl-10">{{$row->age}}Years</span></p></li>
                                                                    <li><p class="text-semibold">Height:<span class="text-regular pl-10">{{$row->height}} fit/inch</span></p></li>
                                                                    <li><p class="text-semibold">Body color:<span class="text-regular pl-10">{{$row->bodyColor}}</span></p></li>
                                                                    <li><p class="text-semibold">Clothes:<span class="text-regular pl-10">{{$row->clothes}}</span></p></li>
                                                                    <li><p class="text-semibold">Division:<span class="text-regular pl-10">{{$row->division['name']}}</span></p></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                    <li><p class="text-semibold">Gender:<span class="text-regular pl-10">{{$row->gender['name']}}</span></p></li>
                                                                    <li><p class="text-semibold">Weight:<span class="text-regular pl-10">{{$row->weight}} KG</span></p></li>
                                                                    <li><p class="text-semibold">Hair Color:<span class="text-regular pl-10">{{$row->hairColor}}</span></p></li>
                                                                    <li><p class="text-semibold">Contact:<span class="text-regular pl-10">{{$row->contact}}</span></p></li>
                                                                    <li><p class="text-semibold">Missing Date:<span class="text-regular pl-10">{{pub_date($row->missingDate)}}</span></p></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="panel-footer pl-20 pr-5">
                                                            <h6 style="margin: 2px;">Description:</h6>
                                                            <p class="pr-5">{{$row->description}}</p>
                                                            <p class="text-semibold text-capitalize">Reported Date:<span class="pl-5">{{pub_date($row->created_at)}}</span>
                                                                <span class="text-regular pull-right"><strong class="pr-10">post by:</strong>{{$row->policeStation['name']}}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{--End show Modal--}}
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
        // Single picker
        $('.daterange-single').daterangepicker({
            singleDatePicker: true
        });

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]], //for ascending order use === asc ===
                columnDefs: [
                    { orderable: false, "targets": [6,7] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var gender = $(this).data('gender');
                var policestation = $(this).data('policestation');
                var age = $(this).data('age');
                var height = $(this).data('height');
                var weight = $(this).data('weight');
                var bodycolor = $(this).data('bodycolor');
                var haircolor = $(this).data('haircolor');
                var clothes = $(this).data('clothes');
                var missingdate = $(this).data('missingdate');
                var division = $(this).data('division');
                var contact = $(this).data('contact');
                var tag = $(this).data('tag');
                var description = $(this).data('description');


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=genderID]').val(gender);
                $('#ediModal [name=policeStationID]').val(policestation);
                $('#ediModal [name=age]').val(age);
                $('#ediModal [name=height]').val(height);
                $('#ediModal [name=weight]').val(weight);
                $('#ediModal [name=bodyColor]').val(bodycolor);
                $('#ediModal [name=hairColor]').val(haircolor);
                $('#ediModal [name=clothes]').val(clothes);
                $('#ediModal [name=missingDate]').val(missingdate);
                $('#ediModal [name=divisionID]').val(division);
                $('#ediModal [name=contact]').val(contact);
                $('#ediModal [name=tag]').val(tag);
                $('#ediModal [name=description]').val(description);

            });
        });

    </script>

@endsection

@extends('layouts.adminMaster')
@extends('admin.box.mostWanted.mostWantedBox')
@section('title')
    Most Wanted
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Add New Most Wanted</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Most Wanted Person</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Prize Money</th>
                            <th>Crime Type</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($table as $row)

                        <tr>
                            <td><span class="text-muted">{{$row->mostwantedID}}</span></td>
                            <td>
                                <div class="media-left media-middle">
                                    <a href="#"><img src="{{asset('public/image/mostWantedImg/'.$row->mostwantedID.'.jpg')}}" class="rounded no-border-radius img-xs" alt=""></a>
                                </div>
                                <div class="media-left">
                                    <div class=""><a href="#" class="text-default text-semibold text-capitalize">{{$row->name}}</a></div>
                                    <div class="text-muted text-size-small">
                                        <span class="status-mark border-blue position-left"></span>
                                        {{pub_date($row->created_at)}}
                                    </div>
                                </div>
                            </td>
                            <td class="text-capitalize">{{$row->gender['name']}}</td>
                            <td>{{$row->prizeMoney}}<span>TK</span></td>
                            <td class="text-capitalize">{{$row->crimeType['name']}}</td>
                            <td>{{$row->contact}}</td>
                            <td><a class="btn btn-xs btn-primary p-0" href="{{action('MostWanted\MostWantedController@complete', ['id' => $row->mostwantedID])}}"  onclick="return confirm('Are you sure to End Most Wanted?')" title="End">{{$row->status}}</a></td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                            <li>
                                                <button type="button" class="btn bg-slate-600 no-border-radius ediBtn" data-toggle="modal" data-target="#showModal{{$row->mostwantedID}}" style="width: 100%;text-align: left;">
                                                    <i class="icon-eye pr-10"></i> View Detail
                                                </button>
                                            </li>
                                            <li><button  class="btn bg-slate-600 no-border-radius ediBtn"
                                                         data-name="{{$row->name}}"
                                                         data-gender="{{$row->genderID}}"
                                                         data-policestation="{{$row->policeStationID}}"
                                                         data-age="{{$row->age}}"
                                                         data-height="{{$row->height}}"
                                                         data-weight="{{$row->weight}}"
                                                         data-bodycolor="{{$row->bodyColor}}"
                                                         data-haircolor="{{$row->hairColor}}"
                                                         data-crimetype="{{$row->crimeTypeID}}"
                                                         data-prizemoney="{{$row->prizeMoney}}"
                                                         data-contact="{{$row->contact}}"
                                                         data-tag="{{$row->tag}}"
                                                         data-description="{{$row->description}}"
                                                         data-id="{{$row->mostwantedID}}"
                                                         data-toggle="modal" data-target="#ediModal2" style="width: 100%;text-align: left;"><i class="icon-pencil7 pr-10"></i>Edit</button></li>
                                            <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('MostWanted\MostWantedController@del', ['id' => $row->mostwantedID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        {{--start Show modal--}}
                        <div id="showModal{{$row->mostwantedID}}" class="modal fade">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-slate-600 pt-10 pb-10">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h5 class="modal-title"><i class=" icon-magazine pr-10"></i> Most Wanted Criminal Details</h5>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="hidden" id="ediID" name="id">

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="thumbnail no-padding no-margin-bottom">
                                                            <div class="thumb">
                                                                <img class="img-responsive" style="height:450px; border-radius: 0px;" src="{{asset('public/image/mostWantedImg/'.$row->mostwantedID.'.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="panel-heading bg-slate-400 pt-5 pb-5" style="border-radius: 0px;">
                                                                <h6 class="panel-title text-capitalize">{{$row->name}} <span class="pull-right">{{$row->prizeMoney}}TK</span></h6>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="col-md-6 no-padding-left">
                                                                    <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                        <li><p class="text-semibold">Age:<span class="text-regular pl-10">{{$row->age}}Years</span></p></li>
                                                                        <li><p class="text-semibold">Height:<span class="text-regular pl-10">{{$row->height}} fit/inch</span></p></li>
                                                                        <li><p class="text-semibold">Body color:<span class="text-regular pl-10">{{$row->bodyColor}}</span></p></li>
                                                                        <li><p class="text-semibold">Crime Type:<span class="text-regular pl-10">{{$row->crimeType['name']}}</span></p></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                        <li><p class="text-semibold">Gender:<span class="text-regular pl-10">{{$row->gender['name']}}</span></p></li>
                                                                        <li><p class="text-semibold">Weight:<span class="text-regular pl-10">{{$row->weight}} KG</span></p></li>
                                                                        <li><p class="text-semibold">Hair Color:<span class="text-regular pl-10">{{$row->hairColor}}</span></p></li>
                                                                        <li><p class="text-semibold">Contact:<span class="text-regular pl-10">{{$row->contact}}</span></p></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer pl-20 pr-5">
                                                                <h6 style="margin: 2px;">Description:</h6>
                                                                <p>{{$row->description}}</p>
                                                                <p class="text-semibold text-capitalize">Date:<span class="pl-5">{{pub_date($row->created_at)}}</span>
                                                                    <span class="text-regular pull-right"><strong class="pr-10">post by:</strong>Sylhet Sador Plolicefari,sylhet</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
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
                var crimetype = $(this).data('crimetype');
                var prizemoney = $(this).data('prizemoney');
                var contact = $(this).data('contact');
                var tag = $(this).data('tag');
                var description = $(this).data('description');


                $('#editID').val(id);
                $('#ediModal2 [name=name]').val(name);
                $('#ediModal2 [name=gender]').val(gender);
                $('#ediModal2 [name=policeStationID]').val(policestation);
                $('#ediModal2 [name=age]').val(age);
                $('#ediModal2 [name=height]').val(height);
                $('#ediModal2 [name=weight]').val(weight);
                $('#ediModal2 [name=bodyColor]').val(bodycolor);
                $('#ediModal2 [name=hairColor]').val(haircolor);
                $('#ediModal2 [name=crimeTypeID]').val(crimetype);
                $('#ediModal2 [name=prizeMoney]').val(prizemoney);
                $('#ediModal2 [name=contact]').val(contact);
                $('#ediModal2 [name=tag]').val(tag);
                $('#ediModal2 [name=description]').val(description);

            });
        });



    </script>

@endsection

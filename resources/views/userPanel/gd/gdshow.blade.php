@extends('layouts.userMaster')
@section('title')
    GD
@endsection
@section('content')
    <div class="row m-20">
        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 p-10">
            <form action="" method="" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}
                <div class="panel">
                    <div class="panel-heading bg-slate">
                        <h6 class="panel-title text-center"><i class="icon-pencil5"></i><span> General Diary</span></h6>
                    </div>
                @foreach($gd as $row)
                    <div class="panel-body" style="padding:30px;">
                        <div class="form-group pl-10 no-margin-bottom">
                            <p>Date: {{pub_date($row->created_at)}}</p>
                            <label class="text-bold">To</label>
                            <div class="form-control-static pl-10 pt-5 pb-5">Officer Incharge</div>
                        </div>

                        <div class="form-group pl-20 no-margin-bottom">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-left">
                                <p>{{$row->policeStation['name']}}</p>
                            </div>
                        </div>

                        <div class="form-group no-margin-bottom">
                            <label class="col-lg-1 col-md-1 col-sm-1 col-xs-2 control-label text-semibold">Subject:</label>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10">
                                <p class="mt-10">{{$row->subject}}</p>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="text-semibold ml-10">Dear Sir,</label>
                            <div class="form-control-static ml-10">With due respect and humble submission to state that, I am</div>
                        </div>

                        <div class="form-group no-margin-bottom">
                                <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Name:</span>{{$row->name}}</div>
                                <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Father Name:</span>{{$row->fName}}</div>
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Mother Name:</span>{{$row->mName}}</div>
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">NID Number :</span>{{$row->nid}}</div>
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Present Address:</span>{{$row->presentAddress}}</div>
                                <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Permanent Address:</span>{{$row->permanentAddress}}</div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10">I would be like to inform you that ,</label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <p>{{$row->cDescription}}</p>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10">In the circumstances, I hope that you would be kind enough
                                to grand my complain in your police station as a general dairy and oblige thereby.</label>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10 text-semibold">Sincerely ,</label>
                        </div>
                        <div class="form-group">
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Name:</span>{{$row->aName}}</div>
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Email:</span>{{$row->email}}</div>
                            <div class="form-control-static ml-10 pt-5 pb-5"><span class="pr-5">Mobile:</span>{{$row->mobile}}</div>
                        </div>


                        <div class="form-group">


                            <div class="text-center">
                                <a href="{{action('Dashboard\DashboardController@index')}}" class="btn bg-slate-600"><i class="icon-arrow-left13 position-left"></i>Back</a>
                            </div>
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
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/pages/wizard_steps.js')}}"></script>

@endsection
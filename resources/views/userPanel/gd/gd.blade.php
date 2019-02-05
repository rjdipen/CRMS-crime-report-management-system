@extends('layouts.userMaster')
@section('title')
    GD
@endsection
@section('content')
    <div class="row m-20">
        <div class="col-md-8 col-md-offset-2 col-xs-12 p-10">
            <form action="{{action('Gd\GdController@save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}
                <div class="panel border-slate">
                    <div class="panel-heading bg-slate">
                        <h6 class="panel-title text-center"><i class="icon-pencil5"></i><span> General Diary</span></h6>
                    </div>

                    <div class="panel-body">
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="text-bold">To</label>
                            <div class="form-control-static pl-20">Officer Incharge</div>
                        </div>

                        <div class="form-group pl-20">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-left">
                                <select class="select select2-hidden-accessible required" name="policeStationID" data-placeholder="Choose your Police station...">
                                    <option value="">Select Police station</option>
                                    @foreach($policeStation as $row)
                                        <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-1 col-md-1 col-sm-1 col-xs-2 control-label">Subject:<span class="text-danger">*</span></label>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10">
                                <input class="form-control required" name="subject" placeholder="Enter Subject For General Dairy" type="text" required>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="text-semibold ml-10">Dear Sir,</label>
                            <div class="form-control-static ml-10">With due respect and humble submission to state that, I am</div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required" name="name" placeholder="Enter Your Name" type="text" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control  required" name="fName" placeholder="Enter Your Father Name" required type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required" name="mName" placeholder="Enter Your Mother Name" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required" name="nid" placeholder="Enter Your NID " maxlength="17" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class="form-control required" required name="presentAddress" placeholder="Enter Your Present Address.." type="text"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class="form-control required" required name="permanentAddress" placeholder="Enter Your Permanent Address..." type="text"></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10">I would be like to inform you that ,</label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class="form-control required" required name="cDescription" placeholder="Enter Complain Description....." type="text"></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10">In the circumstances, I hope that you would be kind enough
                                to grand my complain in your police station as a general dairy and oblige thereby.</label>
                        </div>

                        <div class="form-group" style="margin-bottom: 2px;">
                            <label class="ml-10 text-semibold">Sincerely ,</label>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required" required name="aName" placeholder="Enter Your Name" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required"  required name="mobile" placeholder="01964725142" maxlength="11" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control required" required name="email" placeholder="Enter Your Email" type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">Your Image:</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <div class="uploader"><input class="file-styled required" type="file" name="gdImg">
                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn bg-slate-600">Submit Application <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/pages/wizard_steps.js')}}"></script>

@endsection
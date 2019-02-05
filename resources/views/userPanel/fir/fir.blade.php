@extends('layouts.userMaster')
@section('title')
    FIR
@endsection
@section('content')
    <div class="row mt-20">
        <div class="col-md-10 col-md-offset-1">
            <!-- Wizard with validation -->
            <div class="panel border-slate">
                <div class="panel-heading bg-slate">
                    <h6 class="panel-title text-center"><i class="icon-file-text"></i><span> FIR Registration</span></h6>
                </div>

                <form id="submitForms" class="steps-validation" action="{{action('Fir\FirController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h6>Victim Information</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Full name: <span class="text-danger">*</span></label>
                                    <input type="text" name="vName" class="form-control required " placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father name: <span class="text-danger">*</span></label>
                                    <input type="text" name="vfName" class="form-control required" placeholder="Enter Father name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mother name: <span class="text-danger">*</span></label>
                                    <input type="text" name="vmName" class="form-control required" placeholder="Enter Mother Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile number: <span class="text-danger">*</span></label>
                                    <input type="number" name="vMobile" maxlength="11" class="form-control required"
                                           placeholder="+8801846251582">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NID Number: <span class="text-danger">*</span></label>
                                    <input type="number" name="vNid" class="form-control required" maxlength="17" placeholder="4511-1222-1457-14255">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>AGE: <span class="text-danger">*</span></label>
                                    <input type="number" name="vAge" class="form-control required" maxlength="3" minlength="2" placeholder="18">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Present Address:<span class="text-danger">*</span></label>
                                    <textarea type="text" name="vPresentAddress" class="form-control required" placeholder="Enter your present address"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Permanent Address:<span class="text-danger">*</span></label>
                                    <textarea type="text" name="vPermanentAddress" class="form-control required" placeholder="Enter your permanent address"></textarea>
                                </div>
                            </div>

                        </div>
                    </fieldset>

                    <h6>Criminal Information</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal name: <span class="text-danger">*</span></label>
                                    <input type="text" name="cName" class="form-control required " placeholder="Enter Criminal Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Father name: <span class="text-danger">*</span></label>
                                    <input type="text" name="cfName" class="form-control required " placeholder="Enter Criminal Father Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal name(two): <span class="text-muted">(Optional)</span></label>
                                    <input type="text" name="cName1" class="form-control" placeholder="Enter Criminal Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Father name(two): <span class="text-muted">(Optional)</span></label>
                                    <input type="text" name="cfName1" class="form-control" placeholder="Enter Criminal Father Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal name(Three): <span class="text-muted">(Optional)</span></label>
                                    <input type="text" name="cName2" class="form-control" placeholder="Enter Criminal Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Father name(Three): <span class="text-muted">{Optional)</span></label>
                                    <input type="text" name="cfName2" class="form-control" placeholder="Enter Criminal Father Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Mobile: <span class="text-danger">*</span></label>
                                    <input type="number" name="cMobile" class="form-control required " maxlength="11" placeholder="Enter Criminal Mobile">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal AGE: <span class="text-danger">*</span></label>
                                    <input type="number" name="cAge" minlength="2" maxlength="3" class="form-control required " placeholder="Enter Criminal Age">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Present Address: <span class="text-danger">*</span></label>
                                    <textarea type="text" name="cPresentAddress" class="form-control required " placeholder="Enter Criminal Present Address"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Criminal Permanent Address: <span class="text-danger">*</span></label>
                                    <textarea type="text" name="cPermanentAddress" class="form-control required " placeholder="Enter Criminal Permanent Address"></textarea>
                                </div>
                            </div>

                        </div>

                    </fieldset>
                    <h6>Crime Detail</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Zilla: <span class="text-danger">*</span></label>
                                    <select name="zilaID" data-placeholder="Choose your Zilla..." class="select required">
                                        @foreach($zila as $row)
                                            <option value="{{$row->zilaID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Upazila: <span class="text-danger">*</span></label>
                                    <select name="upazilaID" data-placeholder="Choose your Upazila..." class="select required">
                                        @foreach($upazila as $row)
                                            <option value="{{$row->upazilaID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Police Station: <span class="text-danger">*</span></label>
                                    <select name="policeStationID" data-placeholder="Choose your Police station..." class="select required">
                                        @foreach($policeStation as $row)
                                            <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>What type of Crime ? <span class="text-danger">*</span></label>
                                    <select name="crimeTypeID" data-placeholder="Choose Crime type..." class="select required">
                                        @foreach($crimeType as $row)
                                            <option value="{{$row->crimeTypeID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Crime Date:<span class="text-danger">*</span></label>
                                    <input class="form-control required" name="cDate" type="date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="crimeTime">Crime time: <span class="text-danger">*</span></label>
                                    <input name="cTime" value="14:25:00" class="rounded-0 form-last-name form-control required" id="form-time-name" type="time">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Crime Location Description:<span class="text-danger">*</span></label>
                                    <textarea type="text" name="cLocation" class="form-control required" placeholder="Enter Crime Location Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Crime Description:<span class="text-danger">*</span></label>
                                    <textarea type="text" name="cDescription" class="form-control required" placeholder="Crime Description"></textarea>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /wizard with validation -->
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/pages/wizard_steps.js')}}"></script>

    <script type="text/javascript">
        $(function() {

        });
    </script>

@endsection
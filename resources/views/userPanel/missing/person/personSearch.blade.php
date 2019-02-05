@extends('layouts.userMaster')
@section('title')
    Person
@endsection
@section('content')
    <div class="row justify-content-center mt-20">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{action('Missing\UserPersonController@search')}}" method="get" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="Enter Search......." type="text" name="s" value="{{isset($s)? $s : ''}}">
                        <span class="input-group-btn">
										<button class="btn bg-slate" type="submit">Search</button>
									</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-20 mb-20">
        <div class="col-md-3 col-sm-3">
            <form action="#" method="">
                <div class="panel">
                    <div class="panel-heading bg-slate" style="padding: 10px 20px;" >
                        <h6 class="panel-title text-center"><i class="icon-equalizer"></i><span>  Filter & Refine</span></span><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <ul class="icons-list visible-sm-inline visible-xs-inline">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="display-block text-semibold">Age:<span class="text-regular">(years)</span></label>
                            <input type="text" class="form-control" id="age">
                        </div>

                        <div class="form-group">
                            <label class="display-block text-semibold">Weight:<span class="text-regular">(kg)</span></label>
                            <input type="text" class="form-control" id="weight">
                        </div>

                        <div class="form-group">
                            <label class="display-block text-semibold">Height:<span class="text-regular">(Fit/ich)</span></label>
                            <input type="text" class="form-control" id="height">
                        </div>


                        <div class="form-group">
                            <label class="display-block text-semibold">Clothes:</label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="styled" checked="checked">
                                Shirt
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="styled">
                                Lungi
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="styled">
                                Sharee
                            </label>

                        </div>

                        <div class="form-group">
                            <label class="display-block text-semibold">Body Color:</label>
                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                Black
                            </label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                White
                            </label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                Other
                            </label>

                        </div>
                        <div class="form-group">
                            <label class="display-block text-semibold">Gender:</label>
                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                Male
                            </label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                Female
                            </label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="slate-radio">
                                Other
                            </label>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400 btn-labeled">Filter<i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-9 col-sm-9">
            <div class="panel">
                <div class="panel-heading bg-slate" style="padding: 10px 20px;">
                    <h6 class="panel-title text-center"><i class="icon-file-text"></i><span> Missing Person</span></h6>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($table as $row)
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('public/image/missingPersonImg/'.$row->missingPersonID.'.jpg')}}" alt="" style="height: 350px;">
                                        <div class="caption-overflow no-border-radius">
										<span>
											<a href="" class="btn border-white text-white btn-float-lg" data-toggle="modal" data-target="#showModal{{$row->missingPersonID}}"><i class="icon-eye8 pr-5"></i> View</a>
										</span>
                                        </div>
                                    </div>

                                    <div class="caption no-padding bg-slate">
                                        <div class="text-semibold text-center bg-slate-800 p-10">
                                            <h6 class="no-margin">{{$row->name}}</h6>
                                        </div>
                                        <p class="no-margin-top no-margin-bottom p-10 text-white text-center"><i class="icon-calendar position-left"></i> Missing Date : <span> {{$row->missingDate}}</span></p>
                                    </div>
                                </div>
                                {{--start Show modal--}}
                                <div id="showModal{{$row->missingPersonID}}" class="modal fade">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-slate-600 pt-10 pb-10">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h5 class="modal-title"><i class=" icon-magazine pr-10"></i>Missing Person Details</h5>
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
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="heading-elements pull-right">
                        {{$table->appends(['s' => $s])->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/sliders/ion_rangeslider.min.js')}}"></script>
    <script type="text/javascript">
        $(".styled, .multiselect-container input").uniform({
            radioClass: 'choice',
            checkboxClass: 'checker',
            wrapperClass: "border-slate text-slate-600"
        });

        $(function () {
            //for age
            $("#age").ionRangeSlider({
                type: "double",
                min: 0,
                max: 100,
                from: 30,
                to: 60
            });

            //for Weight
            $("#weight").ionRangeSlider({
                type: "double",
                min: 0,
                max: 150,
                from: 50,
                to: 100
            });

            // Fractional step
            $("#height").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 13,
                from: 4.1,
                to: 8.1,
                step: 0.1
            });
        });
    </script>

@endsection
@extends('layouts.userMaster')
@section('title')
    Most Wanted
@endsection
@section('content')
    <div class="row justify-content-center mt-20">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{action('MostWanted\UserMostWantedController@index')}}" method="get" enctype="multipart/form-data">
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
        <div class="col-md-12 col-sm-12">
            <div class="panel border-slate">
                <div class="panel-heading bg-slate" style="padding: 10px 20px;">
                    <h6 class="panel-title text-center"><i class="icon-file-text"></i><span> Most Wanted Criminal</span></h6>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($table as $row)
                        <div class="col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img src="{{asset('public/image/mostWantedImg/'.$row->mostwantedID.'.jpg')}}" alt="" style="height:350px;">
                                    <div class="caption-overflow" style="border-radius: 0px;">
										<span>
											<a href="" class="btn border-white text-white btn-float-lg" data-toggle="modal" data-target="#showModal{{$row->mostwantedID}}"><i class="icon-eye8 pr-5"></i> View</a>
										</span>
                                    </div>
                                </div>

                                <div class="caption no-padding">
                                    <div class="text-semibold text-center bg-danger-400 p-10">
                                        <h6 class="no-margin">{{$row->name}}</h6>
                                    </div>
                                    <p class="no-margin-top no-margin-bottom p-10 text-center"><i class="icon-calendar position-left"></i> Prize Money : <span>{{$row->prizeMoney}}</span>TK</p>
                                </div>
                            </div>
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
                                                                    <span class="text-regular pull-right"><strong class="pr-10">post by:</strong>{{$row->policestation['name']}}</span></p>
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

@endsection
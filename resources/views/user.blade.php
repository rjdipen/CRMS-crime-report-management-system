@extends('layouts.userMaster')
@section('title')
    User Dashboard
@endsection

@section('style')
    <link href="{{asset('public/assets/css/tcf-slider.min.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('public/assets/images/caresoul/p.jpeg')}}" alt="First Slide">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/caresoul/p1.jpg')}}" alt="Second Slide">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/caresoul/p2.jpg')}}" alt="Third Slide">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/caresoul/p3.jpg')}}" alt="Fourth Slide">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/caresoul/police3.jpg')}}" alt="Fourth Slide">
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>


    <div class="row mt-20 mb-20">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading text-center bg-slate " style="border-radius: 0px; padding: 10px 20px;">
                    <h5 class="panel-title text-uppercase text-semibold">featured services</h5>
                </div>

                <div class="panel-body no-padding-bottom">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 animated fadeInLeft">
                            <a href="{{action('Fir\FirController@index')}}">
                            <div class="panel my-panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object bg-slate text-success"><i class="icon-profile text-white"></i></div>
                                    <h5 class="text-semibold">Fir Registration</h5>
                                    <p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far
                                        Ouch found swore much dear conductively hid submissively hatchet vexed far
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 animated fadeInDown">
                            <a href="{{action('Gd\GdController@index')}}">
                            <div class="panel my-panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object bg-slate text-success"><i class="icon-clipboard3 text-white"></i></div>
                                    <h5 class="text-semibold">General Dairy</h5>
                                    <p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far
                                        Ouch found swore much dear conductively hid submissively hatchet vexed far
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 animated fadeInUp">
                            <a href="{{action('Missing\UserGoodsController@index')}}">
                            <div class="panel my-panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object bg-slate text-success"><i class=" icon-search4 text-white"></i></div>
                                    <h5 class="text-semibold">Missing Complain</h5>
                                    <p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far
                                        Ouch found swore much dear conductively hid submissively hatchet vexed far
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 animated fadeInRight">
                            <a href="">
                            <div class="panel my-panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object bg-slate text-success"><i class="icon-history text-white"></i></div>
                                    <h5 class="text-semibold">Emergency Service</h5>
                                    <p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far
                                        Ouch found swore much dear conductively hid submissively hatchet vexed far
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-20 mb-20">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading text-center bg-slate " style="border-radius: 0px; padding: 10px 20px;">
                    <h5 class="panel-title text-uppercase text-semibold">statistics success</h5>
                </div>

                <div class="panel-body animated fadeInDown">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 ">
                            <!-- Invitation stats white -->
                            <div class="panel text-center my-panel">
                                <div class="panel-body">
                                    <div class="svg-center position-relative mb-5" id="progress_percentage_one"></div>
                                    <h6 class="text-bold no-margin-bottom mt-10 text-uppercase">Safety</h6>
                                </div>
                            </div>
                            <!-- /invitation stats white -->
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <!-- Invitation stats white -->
                            <div class="panel text-center my-panel">
                                <div class="panel-body">
                                    <div class="svg-center position-relative mb-5" id="progress_percentage_two"></div>
                                    <h6 class="text-bold no-margin-bottom mt-10 text-uppercase">Crime</h6>
                                </div>
                            </div>
                            <!-- /invitation stats white -->
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <!-- Invitation stats white -->
                            <div class="panel text-center my-panel">
                                <div class="panel-body">
                                    <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                                    <h6 class="text-bold no-margin-bottom mt-10 text-uppercase">Evtesing</h6>
                                </div>
                            </div>
                            <!-- /invitation stats white -->
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <!-- Invitation stats white -->
                            <div class="panel text-center my-panel">
                                <div class="panel-body">
                                    <div class="svg-center position-relative mb-5" id="progress_percentage_four"></div>
                                    <h6 class="text-bold no-margin-bottom mt-10 text-uppercase">Missing Complain</h6>
                                </div>
                            </div>
                            <!-- /invitation stats white -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-20 mb-20">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body no-padding-bottom">
                    <div class="tabbable">
                        <ul class="nav nav-tabs text-center mb-10">
                            <li class="text-uppercase"><a href="#colored-justified-tab1" data-toggle="tab" aria-expanded="false">Missing Goods</a></li>
                            <li class="active text-uppercase"><a href="#colored-justified-tab2" data-toggle="tab" aria-expanded="true">Missing Person</a></li>
                            <li class="text-uppercase">
                                <a href="#colored-justified-tab3" data-toggle="tab" aria-expanded="true">Most Wanted</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="colored-justified-tab1">
                                <div class="panel-heading text-center " style="border-radius: 0px; padding: 5px 20px 10px 20px;">
                                    <p class="panel-title  text-capitalize text-muted">Identify Your Missing Relative</p>
                                </div>
                                <div class="row">
                                    @foreach($table as $row)
                                        <div class="col-md-3 col-sm-6 animated bounceIn">
                                            <div class="thumbnail">
                                                <div class="thumb">
                                                    <img  src="{{asset('public/image/missingGoodsImg/'.$row->missingGoodsID.'.jpg')}}" alt="" style="height:330px;">
                                                    <div class="caption-overflow" style="border-radius: 0px;">
										<span>
											<a href="#" class="btn border-white text-white btn-float-lg" data-toggle="modal" data-target="#showModal{{$row->missingGoodsID}}"><i class="icon-eye8 pr-5"></i> View</a>
										</span>
                                                    </div>
                                                </div>

                                                <div class="caption no-padding bg-slate">
                                                    <div class="text-semibold text-center bg-slate-800 p-10">
                                                        <h6 class="no-margin">{{$row->name}}</h6>
                                                    </div>
                                                    <p class="no-margin-top no-margin-bottom p-10 text-white text-center"><i class="icon-calendar position-left"></i> Missing Date : <span> {{pub_date($row->missingDate)}}</span></p>
                                                </div>
                                            </div>
                                        </div>



                                        {{--start Show modal--}}
                                        <div id="showModal{{$row->missingGoodsID}}" class="modal fade">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-slate-600 pt-10 pb-10">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title"><i class=" icon-magazine pr-10"></i>Missing Goods Details</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="thumbnail no-padding no-margin-bottom">
                                                                    <div class="thumb">
                                                                        <img class="img-responsive" style="height:450px; border-radius: 0px;" src="{{asset('public/image/missingGoodsImg/'.$row->missingGoodsID.'.jpg')}}" alt="">
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
                                                                                <li><p class="text-semibold">Category:<span class="text-regular pl-10">{{$row->Category['name']}}</span></p></li>
                                                                                <li><p class="text-semibold">Good color:<span class="text-regular pl-10">{{$row->goodsColor}}</span></p></li>
                                                                                <li><p class="text-semibold">IME/Chassis:<span class="text-regular pl-10">{{$row->imeChessis}}</span></p></li>
                                                                                <li><p class="text-semibold">Contact:<span class="text-regular pl-10">{{$row->contact}}</span></p></li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                                <li><p class="text-semibold">Brand:<span class="text-regular pl-10">{{$row->Subcategory['name']}}</span></p></li>
                                                                                <li><p class="text-semibold">Lost Place:<span class="text-regular pl-10">{{$row->lPlace}}</span></p></li>
                                                                                <li><p class="text-semibold">Missing Date:<span class="text-regular pl-10">{{pub_date($row->missingDate)}}</span></p></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-footer pl-20 pr-5">
                                                                        <h6 style="margin: 2px;">Description:</h6>
                                                                        <p class="pr-5">{{$row->description}}</p>
                                                                        <p class="text-semibold text-capitalize">Reported Date:<span class="pl-5">{{pub_date($row->created_at)}}</span>
                                                                            <span class="text-regular pull-right"><strong class="pr-10">post by:</strong>{{$row->policestation['name']}}</span></p>
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
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="{{action('Missing\UserGoodsController@index')}}" class="btn bg-slate-600">View All <i class="icon-arrow-right14 position-left"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane active " id="colored-justified-tab2">
                                <div class="panel-heading text-center " style="border-radius: 0px; padding: 5px 20px 10px 20px;">
                                    <p class="panel-title  text-capitalize text-muted">Identify Your Missing Relative</p>
                                </div>
                                <div class="row">
                                    @foreach($missingPerson as $row)
                                        <div class="col-md-3 col-sm-6 animated bounceIn">
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
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="{{action('Missing\UserPersonController@index')}}" class="btn bg-slate-600">View All <i class="icon-arrow-right14 position-left"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " id="colored-justified-tab3">
                                <div class="panel-heading text-center " style="border-radius: 0px; padding: 5px 20px 10px 20px;">
                                    <p class="panel-title  text-capitalize text-muted">Identify Most Wanted Criminal</p>
                                </div>
                                <div class="row">
                                    @foreach($mostWanted as $row)
                                        <div class="col-md-3 col-sm-4 animated bounceIn">
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
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="{{action('MostWanted\UserMostWantedController@index')}}" class="btn bg-slate-600">View All <i class="icon-arrow-right14 position-left"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-20 mb-20">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading text-center bg-slate " style="border-radius: 0px; padding: 10px 20px;">
                    <h5 class="panel-title text-uppercase text-semibold">Blog</h5>
                </div>
                <div class="panel-body no-padding-bottom">
                    <h6 class="text-size-large text-center text-semibold no-margin-top">Share Your Experience With Other</h6>
                    <div class="row">
                        <?php
                        $i = 6;
                        ?>
                        @foreach($blog as $row)
                        <div class="col-lg-6 animated fadeInDown">
                            <!-- Mini size -->
                            <div class="panel panel-flat blog-horizontal blog-horizontal-3 blog-horizontal-xs">
                                <div class="panel-body">
                                    <div class="thumb">
                                        <img src="{{asset('public/image/blogImg/'.$row->blogID.'.jpg')}}" alt="" class="img-responsive animated fadeInLeft">
                                        <div class="caption-overflow no-border-radius">
											<span>
												<a href="{{action('Blog\SingleBlogController@index', ['id' => $row->blogID])}}" class="btn btn-flat border-white text-white btn-rounded btn-icon"><i class="icon-arrow-right8"></i></a>
											</span>
                                        </div>
                                    </div>

                                    <div class="blog-preview">
                                        <div class="content-group-sm">
                                            <h5 class="blog-title text-semibold">
                                                <a href="#">{{$row->title}}</a>
                                            </h5>
                                        </div>
                                        <p>{{str_limit($row->description, 250, '...')}}</p>
                                    </div>
                                </div>
                                <div class="panel-footer panel-footer-condensed">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-separate heading-text text-muted">
                                            <li>By <a href="#" class="text-muted">{{$row->user['name']}}</a></li>
                                            <li>{{$row->created_at->diffForHumans()}}</li>
                                        </ul>

                                        <a href="{{action('Blog\SingleBlogController@index', ['id' => $row->blogID])}}" class="heading-text pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /mini size -->
                        </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <a href="{{action('Blog\UserBlogController@index')}}" class="btn bg-slate-600">View All <i class="icon-arrow-right14 position-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

    <script type="text/javascript" src="{{asset('public/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/charts/echarts/timeline_option.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            // Initialize charts
            progressPercentage('#progress_percentage_one', 46, 3, "#eee", "#29B6F6", 0.69);
            progressPercentage('#progress_percentage_two', 46, 3, "#eee", "#EF5350", 0.72);
            progressPercentage('#progress_percentage_three', 46, 3, "#eee", "#26A69A", 0.56);
            progressPercentage('#progress_percentage_four', 46, 3, "#eee", "#7E57C2", 0.83);

            // Chart setup
            function progressPercentage(element, radius, border, backgroundColor, foregroundColor, end) {


                // Basic setup
                // ------------------------------

                // Main variables
                var d3Container = d3.select(element),
                    startPercent = 0,
                    fontSize = 22,
                    endPercent = end,
                    twoPi = Math.PI * 2,
                    formatPercent = d3.format('.0%'),
                    boxSize = radius * 2;

                // Values count
                var count = Math.abs((endPercent - startPercent) / 0.01);

                // Values step
                var step = endPercent < startPercent ? -0.01 : 0.01;


                // Create chart
                // ------------------------------

                // Add SVG element
                var container = d3Container.append('svg');

                // Add SVG group
                var svg = container
                    .attr('width', boxSize)
                    .attr('height', boxSize)
                    .append('g')
                    .attr('transform', 'translate(' + radius + ',' + radius + ')');


                // Construct chart layout
                // ------------------------------

                // Arc
                var arc = d3.svg.arc()
                    .startAngle(0)
                    .innerRadius(radius)
                    .outerRadius(radius - border)
                    .cornerRadius(20);


                //
                // Append chart elements
                //

                // Paths
                // ------------------------------

                // Background path
                svg.append('path')
                    .attr('class', 'd3-progress-background')
                    .attr('d', arc.endAngle(twoPi))
                    .style('fill', backgroundColor);

                // Foreground path
                var foreground = svg.append('path')
                    .attr('class', 'd3-progress-foreground')
                    .attr('filter', 'url(#blur)')
                    .style({
                        'fill': foregroundColor,
                        'stroke': foregroundColor
                    });

                // Front path
                var front = svg.append('path')
                    .attr('class', 'd3-progress-front')
                    .style({
                        'fill': foregroundColor,
                        'fill-opacity': 1
                    });


                // Text
                // ------------------------------

                // Percentage text value
                var numberText = svg
                    .append('text')
                    .attr('dx', 0)
                    .attr('dy', (fontSize / 2) - border)
                    .style({
                        'font-size': fontSize + 'px',
                        'line-height': 1,
                        'fill': foregroundColor,
                        'text-anchor': 'middle'
                    });


                // Animation
                // ------------------------------

                // Animate path
                function updateProgress(progress) {
                    foreground.attr('d', arc.endAngle(twoPi * progress));
                    front.attr('d', arc.endAngle(twoPi * progress));
                    numberText.text(formatPercent(progress));
                }

                // Animate text
                var progress = startPercent;
                (function loops() {
                    updateProgress(progress);
                    if (count > 0) {
                        count--;
                        progress += step;
                        setTimeout(loops, 10);
                    }
                })();
            }
        })
    </script>

@endsection
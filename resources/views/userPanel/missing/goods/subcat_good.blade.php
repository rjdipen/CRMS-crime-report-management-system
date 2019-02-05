@extends('layouts.userMaster')
@section('title')
    {{session('subcategoryName')}}
@endsection
@section('content')
    <div class="row justify-content-center mt-20" style="margin-top: 200px;">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{action('Missing\UserGoodsController@index')}}" method="get" enctype="multipart/form-data">
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
            <div class="sidebar sidebar-main" style="width: 311px;">
                <div class="sidebar-content no-padding-bottom">
                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion navigation-bordered no-padding bg-slate-600">

                                <!-- Main -->

                                <li class=" bg-slate-700"><a href="#"><i class="icon-home4"></i> <span>Category</span></a></li>
                                @foreach($goodsCategory as $row)
                                    <li><a href="#"><i class="icon-box-add"></i> <span>{{$row->name}}</span></a>
                                        <ul>
                                            @php
                                                $sub_cat = $row->sub_category()->get();
                                                $check = count($sub_cat);
                                            @endphp
                                            @if($check > 0)
                                                @foreach($sub_cat as $row1)
                                                    <li><a href="{{action('Missing\UserGoodsController@goods_session', ['id' => $row1->goodsSubcategoryID])}}"><i class="icon-arrow-small-right"></i>{{$row1->name}}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-9">
            <div class="panel">
                <div class="panel-heading bg-slate" style="padding: 10px 20px;">
                    <h6 class="panel-title text-center"><i class="icon-cart5"></i><span> Missing Goods</span></h6>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($missing_goods as $row)
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('public/image/missingGoodsImg/'.$row->missingGoodsID.'.jpg')}}" alt="" style="height:330px;">
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
                                                                <span class="text-regular pull-right"><strong class="pr-10">Approved by:</strong>{{$row->policestation['name']}}</span></p>
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
                </div>
                <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                    <div class="heading-elements pull-right">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')

@endsection
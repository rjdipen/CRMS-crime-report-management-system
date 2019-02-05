@extends('layouts.userMaster')
@extends('userPanel.box.missingPerson.usermissingPersonBox')
@extends('userPanel.box.missingGoods.usermissingGoodsBox')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row mt-10 p-5">
        <div class="breadcrumb-line breadcrumb-line-component content-group-lg"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
            <ul class="breadcrumb">
                <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <div class="row mt-5 mb-20">
        <div class="col-sm-4 col-md-4 col-lg-3">

            <!-- User details (with sample pattern) -->
            <div class="content-group">
                <div class="panel-body bg-slate-700 text-center">
                    <div class="content-group-sm">
                        <h5 class="text-semibold no-margin-bottom">
                            {{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}
                        </h5>

                        <span class="display-block">{{ isset(Auth::user()->jobTitle) ? Auth::user()->jobTitle : 'User jobTitle' }}</span>
                    </div>

                    <a href="#" class="display-inline-block content-group-sm">
                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                    </a>

                    <ul class="list-inline no-margin-bottom">
                        <li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-google-plus"></i></a></li>
                    </ul>
                </div>

                <div class="panel panel-body no-border-top no-border-radius-top">
                    <div class="form-group mt-5 mb-10">
                        <label class="text-semibold">Full name:</label>
                        <span class="pull-right-sm">{{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}</span>
                    </div>

                    <div class="form-group mb-10">
                        <label class="text-semibold">Phone number:</label>
                        <span class="pull-right-sm">{{ isset(Auth::user()->mobile) ? Auth::user()->mobile : 'User mobile' }}</span>
                    </div>

                    <div class="form-group mb-10">
                        <label class="text-semibold">Personal Email:</label>
                        <span class="pull-right-sm"><a href="#">{{ isset(Auth::user()->email) ? Auth::user()->email : 'User email' }}</a></span>
                    </div>

                    <div class="form-group mb-10">
                        <label class="text-semibold">Address:</label>
                        <span class="pull-right-sm">{{ isset(Auth::user()->address) ? Auth::user()->address : 'User address' }}</span>
                    </div>

                </div>
            </div>
            <!-- /user details (with sample pattern) -->
        </div>
        {{--Start dashboard--}}
        <div class="col-md-8 col-sm-8 col-lg-9">
            <div class="panel no-margin-bottom">
                <div class="panel-heading pt-10 pb-10 bg-slate">
                    <h6 class="panel-title">Dashboard</h6>
                </div>
            </div>
            <div class="panel-body p-10 " style="background-color: #fff;">
                <div class="tabbable">
                    <ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-10">
                        <li class="active"><a href="#highlighted-justified-tab1" data-toggle="tab"><i class="icon-pencil7 pr-5"></i>General Dairy</a></li>
                        <li><a href="#highlighted-justified-tab2" data-toggle="tab"><i class="icon-clipboard3 pr-5"></i>Fir Registration</a></li>
                        <li><a href="#highlighted-justified-tab3" data-toggle="tab"><i class="icon-people pr-5"></i>Missing Person</a></li>
                        <li><a href="#highlighted-justified-tab4" data-toggle="tab"><i class="icon-cart5 pr-5"></i>Missing Goods</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="highlighted-justified-tab1">
                            <div class="row">
                                <div class="col-md-4 mb-10">
                                    <a href="{{action('Gd\GdController@index')}}"  class="btn bg-slate btn-labeled" ><b><i class="icon-file-plus"></i></b> Add New</a>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                            <table class="table  table-hover table-bordered table-striped">
                                <thead>
                                <tr class="text-size-small">
                                    <th>S/N</th>
                                    <th colspan="2">Title</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $i = 1;
                                ?>
                                @foreach($table as $row)
                                    <tr class="text-size-small">
                                        <td><span class="text-muted">{{$i++}}</span></td>
                                        <td colspan="2">{{$row->subject}}</td>
                                        <td class="text-center"><span class="btn-sm bg-primary text-capitalize text-size-small">{{$row->status}}</span></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown pull-right">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                        <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Gd\GdController@show_details',['id' => $row->generaldairyID])}}"   title="Delete"style="text-align: left;"><i class="icon-eye"></i>Details</a></li>
                                                        {{--<li><button  class="btn bg-slate-600 no-border-radius ediBtn" data-toggle="modal" data-target="#ediModal" style="width: 100%;text-align: left;"><i class="icon-pencil7 pr-10"></i>Edit</button></li>--}}
                                                        {{--<li><a class="btn bg-slate-600 no-border-radius pl-10"  href=""  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="highlighted-justified-tab2">
                            <div class="row">
                                <div class="col-md-4 mb-10">
                                    <a href="{{action('Fir\FirController@index')}}"  class="btn bg-slate btn-labeled" ><b><i class="icon-file-plus"></i></b> Add New</a>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                            <table class="table  table-hover table-bordered table-striped">
                                <thead>
                                    <tr class="text-size-small">
                                        <th>S/N</th>
                                        <th>Police Fari</th>
                                        <th>Zila</th>
                                        <th>Crime Location</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($fir as $row)
                                    <tr class="text-size-small">
                                        <td><span class="text-muted">{{$i++}}</span></td>
                                        <td>{{$row->policeStation['name']}}</td>
                                        <td>{{$row->zila['name']}}</td>
                                        <td>{{$row->cLocation}}</td>
                                        <td class="text-center"><span class="btn-sm bg-primary text-capitalize text-size-small">{{$row->status}}</span></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown pull-right">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                        <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Fir\FirController@fir_details',['id' => $row->firID])}}"   title="Show"style="text-align: left;"><i class="icon-eye"></i>View Details</a></li>
                                                        {{--<li><a class="btn bg-slate-600 no-border-radius pl-10"  href=""  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="highlighted-justified-tab3">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><button type="button" class="btn bg-slate btn-labeled" data-toggle="modal" data-target="#myModalperson"><b><i class="icon-file-plus"></i></b> Add New</button></p>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                            <table class=" table table-hover table-bordered table-striped">
                                <thead>
                                <tr class="text-size-small">
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Division</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($missingPerson as $row)
                                    <tr class="text-size-small">
                                        <td><span class="text-muted">{{$i++}}</span></td>
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
                                        <td><a class="btn btn-xs btn-primary p-0" href="{{action('Missing\MissingPersonController@running', ['id' => $row->missingPersonID])}}"  onclick="return confirm('Are you sure to Approved Post?')" title="End">{{$row->status}}</a></td>
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
                                                        <li><button  class="btn bg-slate-600 no-border-radius ediBtn"
                                                                     data-name="{{$row->name}}"
                                                                     data-gender="{{$row->genderID}}"
                                                                     data-policestation="{{$row->policeStationID}}"
                                                                     data-age="{{$row->age}}"
                                                                     data-height="{{$row->height}}"
                                                                     data-weight="{{$row->weight}}"
                                                                     data-bodycolor="{{$row->bodyColor}}"
                                                                     data-haircolor="{{$row->hairColor}}"
                                                                     data-division="{{$row->divisionID}}"
                                                                     data-clothes="{{$row->clothes}}"
                                                                     data-missingdate="{{$row->missingDate}}"
                                                                     data-contact="{{$row->contact}}"
                                                                     data-tag="{{$row->tag}}"
                                                                     data-description="{{$row->description}}"
                                                                     data-id="{{$row->missingPersonID}}"
                                                                     data-toggle="modal" data-target="#ediModalperson" style="width: 100%;text-align: left;"><i class="icon-pencil7 pr-10"></i>Edit</button></li>
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

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="highlighted-justified-tab4">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><button type="button" class="btn bg-slate btn-labeled" data-toggle="modal" data-target="#myModalgoods"><b><i class="icon-file-plus"></i></b> Add New</button></p>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                            <table class="table  table-hover table-bordered table-striped dat">
                                <thead>
                                <tr class="text-size-small">
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>IME/Chassis</th>
                                    <th>Lost Place</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($missingGoods as $row)
                                    <tr class="text-size-small">
                                        <td><span class="text-muted">{{$i++}}</span></td>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#"><img src="{{asset('public/image/missingGoodsImg/'.$row->missingGoodsID.'.jpg')}}" class="rounded no-border-radius img-xs" alt=""></a>
                                            </div>
                                            <div class="media-left">
                                                <div class=""><a href="#" class="text-default text-semibold">{{$row->name}}</a></div>
                                                <div class="text-muted text-size-small">
                                                    <span class="status-mark border-blue position-left"></span>
                                                    {{pub_date($row->created_at)}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$row->Subcategory['name']}}</td>
                                        <td>{{$row->imeChessis}}</td>
                                        <td>{{$row->lPlace}}</td>
                                        <td class="text-center"><span class="btn-sm bg-primary text-capitalize text-size-small">{{$row->status}}</span></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown pull-right">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                        <li>
                                                            <button type="button" class="btn bg-slate-600 no-border-radius ediBtn" data-toggle="modal" data-target="#showModalgoods{{$row->missingGoodsID}}" style="width: 100%;text-align: left;">
                                                                <i class="icon-eye pr-10"></i> View Detail
                                                            </button>
                                                        </li>
                                                        <li><button  class="btn bg-slate-600 no-border-radius ediBtn"
                                                                     data-name="{{$row->name}}"
                                                                     data-imechessis="{{$row->imeChessis}}"
                                                                     data-lplace="{{$row->lPlace}}"
                                                                     data-goodscolor="{{$row->goodsColor}}"
                                                                     data-missingdate="{{$row->missingDate}}"
                                                                     data-policestation="{{$row->policeStationID}}"
                                                                     data-goodscategory="{{$row->goodsCategoryID}}"
                                                                     data-goodssubcategory="{{$row->goodsSubcategoryID}}"
                                                                     data-contact="{{$row->contact}}"
                                                                     data-tag="{{$row->tag}}"
                                                                     data-description="{{$row->description}}"
                                                                     data-id="{{$row->missingGoodsID}}"
                                                                     data-toggle="modal" data-target="#ediModalgoods" style="width: 100%;text-align: left;"><i class="icon-pencil7 pr-10"></i>Edit</button></li>
                                                        {{--<li><a class="btn bg-slate-600 no-border-radius pl-10"  href=""  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>--}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>

                                        {{--start Show modal--}}
                                        <div id="showModalgoods{{$row->missingGoodsID}}" class="modal fade">
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
                                                                                <li><p class="text-semibold">Category:<span class="text-regular pl-10">{{$row->category['name']}}</span></p></li>
                                                                                <li><p class="text-semibold">Good color:<span class="text-regular pl-10">{{$row->goodsColor}}</span></p></li>
                                                                                <li><p class="text-semibold">IME/Chassis:<span class="text-regular pl-10">{{$row->imeChessis}}</span></p></li>
                                                                                <li><p class="text-semibold">Contact:<span class="text-regular pl-10">{{$row->contact}}</span></p></li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <ul class="list list-unstyled text-capitalize no-margin-top">
                                                                                <li><p class="text-semibold">Brand:<span class="text-regular pl-10">{{$row->subcategory['name']}}</span></p></li>
                                                                                <li><p class="text-semibold">Lost Place:<span class="text-regular pl-10">{{$row->lPlace}}</span></p></li>
                                                                                <li><p class="text-semibold">Missing Date:<span class="text-regular pl-10">{{pub_date($row->missingDate)}}</span></p></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-footer pl-20 pr-5">
                                                                        <h6 style="margin: 2px;">Description:</h6>
                                                                        <p class="pr-5">{{$row->description}}</p>
                                                                        <p class="text-semibold text-capitalize">Reported Date:<span class="pl-5">{{pub_date($row->created_at)}}</span>
                                                                            <span class="text-regular pull-right"><strong class="pr-10">Approved by:</strong>{{$row->policeStation['name']}}</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--End show Modal--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{--start goods-- Edit ---Add---Modal--}}




    </div>

@endsection


@section('script')
    <script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('.select-search').select2();
        });

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [2] }//For Column Order
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


                $('#ediIDg').val(id);
                $('#ediModalgoods [name=name]').val(name);
                $('#ediModalgoods [name=policeStationID]').val(policestation);
                $('#ediModalgoods [name=imeChessis]').val(imechessis);
                $('#ediModalgoods [name=lPlace]').val(lplace);
                $('#ediModalgoods [name=goodsColor]').val(goodscolor);
                $('#ediModalgoods [name=goodsCategoryID]').val(goodscategory);
                $('#ediModalgoods [name=goodsSubcategoryID]').val(goodssubcategory);
                $('#ediModalgoods [name=missingDate]').val(missingdate);
                $('#ediModalgoods [name=contact]').val(contact);
                $('#ediModalgoods [name=tag]').val(tag);
                $('#ediModalgoods [name=description]').val(description);

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
                $('#ediModalperson [name=name]').val(name);
                $('#ediModalperson [name=genderID]').val(gender);
                $('#ediModalperson [name=policeStationID]').val(policestation);
                $('#ediModalperson [name=age]').val(age);
                $('#ediModalperson [name=height]').val(height);
                $('#ediModalperson [name=weight]').val(weight);
                $('#ediModalperson [name=bodyColor]').val(bodycolor);
                $('#ediModalperson [name=hairColor]').val(haircolor);
                $('#ediModalperson [name=clothes]').val(clothes);
                $('#ediModalperson [name=missingDate]').val(missingdate);
                $('#ediModalperson [name=divisionID]').val(division);
                $('#ediModalperson [name=contact]').val(contact);
                $('#ediModalperson [name=tag]').val(tag);
                $('#ediModalperson [name=description]').val(description);

            });
        });
    </script>

@endsection
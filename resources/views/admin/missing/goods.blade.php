@extends('layouts.adminMaster')
@extends('admin.box.missing.goodsBox')
@section('title')
    Missing Goods
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Add New Missing Goods</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All New Missing Goods</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>IME/Chassis</th>
                            <th>Lost Place</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td><span class="text-muted">{{$row->missingGoodsID}}</span></td>
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
                                <td>{{$row->contact}}</td>
                                <td><a class="btn btn-xs btn-primary p-0" href="{{action('Missing\MissingGoodsController@running', ['id' => $row->missingGoodsID])}}"  onclick="return confirm('Are you sure to Approved Post?')" title="End">{{$row->status}}</a></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right bg-slate">
                                                <li>
                                                    <button type="button" class="btn bg-slate-600 no-border-radius ediBtn" data-toggle="modal" data-target="#showModal{{$row->missingGoodsID}}">
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
                                                             data-toggle="modal" data-target="#ediModal" style="width: 100%;text-align: left;"><i class="icon-pencil7 pr-10"></i>Edit</button></li>
                                                <li><a class="btn bg-slate-600 no-border-radius pl-10"  href="{{action('Missing\MissingGoodsController@del', ['id' => $row->missingGoodsID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"style="text-align: left;"><i class="icon-bin"></i>Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

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


                $('#ediID').val(id);
                $('#ediModal [name=name]').val(name);
                $('#ediModal [name=policeStationID]').val(policestation);
                $('#ediModal [name=imeChessis]').val(imechessis);
                $('#ediModal [name=lPlace]').val(lplace);
                $('#ediModal [name=goodsColor]').val(goodscolor);
                $('#ediModal [name=goodsCategoryID]').val(goodscategory);
                $('#ediModal [name=goodsSubcategoryID]').val(goodssubcategory);
                $('#ediModal [name=missingDate]').val(missingdate);
                $('#ediModal [name=contact]').val(contact);
                $('#ediModal [name=tag]').val(tag);
                $('#ediModal [name=description]').val(description);

            });

        });

        // Single picker
        $('.daterange-single').daterangepicker({
            singleDatePicker: true
        });

    </script>

@endsection

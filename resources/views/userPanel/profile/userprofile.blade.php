{{--@extends('layouts.userMaster')--}}
{{--@section('title')--}}
    {{--Profile--}}
{{--@endsection--}}
{{--@section('content')--}}
    {{--<div class="row mt-10 p-5">--}}
        {{--<div class="breadcrumb-line breadcrumb-line-component content-group-lg"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>--}}
            {{--<ul class="breadcrumb">--}}
                {{--<li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>--}}
                {{--<li><a href="#">Dashboard</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row mt-5 mb-20">--}}
        {{--<div class="col-sm-4 col-md-4 col-lg-3">--}}

            {{--<!-- User details (with sample pattern) -->--}}
            {{--<div class="content-group">--}}
                {{--<div class="panel-body bg-slate-700 text-center">--}}
                    {{--<div class="content-group-sm">--}}
                        {{--<h5 class="text-semibold no-margin-bottom">--}}
                            {{--{{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}--}}
                        {{--</h5>--}}

                        {{--<span class="display-block">{{ isset(Auth::user()->jobTitle) ? Auth::user()->jobTitle : 'User jobTitle' }}</span>--}}
                    {{--</div>--}}

                    {{--<a href="#" class="display-inline-block content-group-sm">--}}
                        {{--<img src="{{asset('public/assets/images/placeholder.jpg')}}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">--}}
                    {{--</a>--}}

                    {{--<ul class="list-inline no-margin-bottom">--}}
                        {{--<li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-twitter"></i></a></li>--}}
                        {{--<li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-facebook"></i></a></li>--}}
                        {{--<li><a href="#" class="btn bg-slate btn-rounded btn-icon"><i class="icon-google-plus"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

                {{--<div class="panel panel-body no-border-top no-border-radius-top">--}}
                    {{--<div class="form-group mt-5 mb-10">--}}
                        {{--<label class="text-semibold">Full name:</label>--}}
                        {{--<span class="pull-right-sm">{{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}</span>--}}
                    {{--</div>--}}

                    {{--<div class="form-group mb-10">--}}
                        {{--<label class="text-semibold">Phone number:</label>--}}
                        {{--<span class="pull-right-sm">{{ isset(Auth::user()->mobile) ? Auth::user()->mobile : 'User mobile' }}</span>--}}
                    {{--</div>--}}

                    {{--<div class="form-group mb-10">--}}
                        {{--<label class="text-semibold">Personal Email:</label>--}}
                        {{--<span class="pull-right-sm"><a href="#">{{ isset(Auth::user()->email) ? Auth::user()->email : 'User email' }}</a></span>--}}
                    {{--</div>--}}

                    {{--<div class="form-group mb-10">--}}
                        {{--<label class="text-semibold">Address:</label>--}}
                        {{--<span class="pull-right-sm">{{ isset(Auth::user()->address) ? Auth::user()->address : 'User address' }}</span>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /user details (with sample pattern) -->--}}
        {{--</div>--}}
        {{--Start dashboard--}}

        {{--<div class="col-md-8">--}}
            {{--<div class="panel">--}}
                {{--<form action="{{action('User\UserController@edit')}}" method="GET" enctype="multipart/form-data">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<input type="hidden" id="ediID" name="id">--}}

                    {{--<div class="panel-body">--}}
                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">User Name:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="name" placeholder="Enter User Name" type="text" required>--}}
                            {{--</div>--}}
                        {{--</div><br>--}}


                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Email:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="email" placeholder="Reset Your Email" type="email" required>--}}
                            {{--</div>--}}
                        {{--</div><br>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Job Title:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="jobTitle" placeholder="Enter Job Title" type="text">--}}
                            {{--</div>--}}
                        {{--</div><br>--}}


                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Mobile:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="mobile" placeholder="Enter Your Mobile" type="text">--}}
                            {{--</div>--}}
                        {{--</div><br>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Address:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="address" placeholder="Enter Address" type="text">--}}
                            {{--</div>--}}
                        {{--</div><br>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Postcode:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<input class="form-control" name="postcode" placeholder="Enter Your postcode" type="text">--}}
                            {{--</div>--}}
                        {{--</div><br>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-lg-3 control-label">Your Image:</label>--}}
                            {{--<div class="col-lg-9">--}}
                                {{--<div class="uploader"><input class="file-styled required" name="userImg" type="file"></div>--}}
                            {{--</div>--}}
                        {{--</div><br>--}}

                    {{--</div>--}}


                    {{--<div class="panel-footer pull-right">--}}
                        {{--<button type="button" class="btn btn-danger"><i class="icon-cancel-circle2"></i> Close</button>--}}
                        {{--<button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--start goods-- Edit ---Add---Modal--}}




    {{--</div>--}}

{{--@endsection--}}


{{--@section('script')--}}
    {{--<script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$(function () {--}}
            {{--$('.select-search').select2();--}}
        {{--});--}}

        {{--$(function () {--}}

            {{--$('.datatable').DataTable({--}}
                {{--order: [[ 0, "desc" ]],--}}
                {{--columnDefs: [--}}
                    {{--{ orderable: false, "targets": [2] }//For Column Order--}}
                {{--]--}}
            {{--});--}}
        {{--});--}}

        {{--$(function () {--}}
            {{--$('.ediBtn').click(function () {--}}
                {{--var id = $(this).data('id');--}}
                {{--var name = $(this).data('name');--}}
                {{--var imechessis = $(this).data('imechessis');--}}
                {{--var lplace = $(this).data('lplace');--}}
                {{--var goodscolor = $(this).data('goodscolor');--}}
                {{--var goodscategory = $(this).data('policestation');--}}
                {{--var goodssubcategory = $(this).data('goodssubcategory');--}}
                {{--var policestation = $(this).data('policestation');--}}
                {{--var missingdate = $(this).data('missingdate');--}}
                {{--var contact = $(this).data('contact');--}}
                {{--var tag = $(this).data('tag');--}}
                {{--var description = $(this).data('description');--}}


                {{--$('#ediID').val(id);--}}
                {{--$('#ediModal [name=name]').val(name);--}}
                {{--$('#ediModal [name=policeStationID]').val(policestation);--}}
                {{--$('#ediModal [name=imeChessis]').val(imechessis);--}}
                {{--$('#ediModal [name=lPlace]').val(lplace);--}}
                {{--$('#ediModal [name=goodsColor]').val(goodscolor);--}}
                {{--$('#ediModal [name=goodsCategoryID]').val(goodscategory);--}}
                {{--$('#ediModal [name=goodsSubcategoryID]').val(goodssubcategory);--}}
                {{--$('#ediModal [name=missingDate]').val(missingdate);--}}
                {{--$('#ediModal [name=contact]').val(contact);--}}
                {{--$('#ediModal [name=tag]').val(tag);--}}
                {{--$('#ediModal [name=description]').val(description);--}}

            {{--});--}}

        {{--});--}}

    {{--</script>--}}

{{--@endsection--}}
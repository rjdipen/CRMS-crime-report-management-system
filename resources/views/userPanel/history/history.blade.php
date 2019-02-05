@extends('layouts.userMaster')
@section('title')
    History
@endsection
@section('content')
    <div class="row m-20">
        <div class="breadcrumb-line mb-10">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active"><a href="">History</a></li>
            </ul>
        </div>

        <div class="panel-heading bg-slate  mb-20" style="border-radius: 0px; padding: 10px 20px;">
            <h3 class="panel-title text-uppercase text-bold text-center">History</h3>
        </div>

        @foreach($table as $row)
        <div class="panel">
            <div class="panel-heading bg-slate " style="border-radius: 0px; padding: 10px 20px;">
                <h6 class="panel-title text-uppercase text-semibold">{{$row->title}}</h6>
            </div>
            <div class="panel-body">
                <div class="content-group text-center">
                    <a href="#" class="display-inline-block">
                        <img src="{{asset('public/image/historyImg/'.$row->historyID.'.jpg')}}" style="height: 400px;" class="img-responsive" alt="">
                    </a>
                </div>
                <p class="text-justify">{{$row->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection


@section('script')

@endsection
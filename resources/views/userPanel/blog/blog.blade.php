@extends('layouts.userMaster')
@section('title')
    Blog
@endsection
@section('content')
    <div class="row mt-20 mb-20 position-absolute">
        <div class="col-md-9">
            @foreach($table as $row)
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-flat">

                        <div class="panel-body">
                            <div class="thumb content-group">
                                <img style="height: 300px;" src="{{asset('public/image/blogImg/'.$row->blogID.'.jpg')}}" alt="" class="img-responsive">
                                <div class="caption-overflow">
                                    <span>
                                        <a href="{{action('Blog\SingleBlogController@index', ['id' => $row->blogID])}}" class="btn btn-flat border-white text-white btn-rounded btn-icon"><i class="icon-arrow-right8"></i></a>
                                    </span>
                                </div>
                            </div>

                            <h5 class="text-semibold mb-5">
                                <a href="#" class="text-default">{{$row->title}}</a>
                            </h5>

                            <ul class="list-inline list-inline-separate text-muted content-group">
                                <li>By <a href="#" class="text-muted">{{$row->user['name']}}</a></li>
                                <li>{{$row->created_at->diffForHumans()}}</li>
                            </ul>
                            <p>{{str_limit($row->description, 200, '...')}}</p>
                        </div>

                        <div class="panel-footer panel-footer-condensed">
                            <div class="heading-elements not-collapsible">
                                <a href="{{action('Blog\SingleBlogController@index', ['id' => $row->blogID])}}" class="heading-text pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 invisible-sm invisible-xs">
            <div class="sidebar-detached">
                <div class="sidebar sidebar-default sidebar-separate">
                    <div class="sidebar-content">

                        <!-- Sidebar search -->
                        <div class="sidebar-category">
                            <div class="category-title text-semibold bg-slate-600">
                                <span>Search</span>
                                <ul class="icons-list">
                                    <li><a href="#" data-action="collapse"></a></li>
                                </ul>
                            </div>

                            <div class="category-content">
                                <form action="{{action('Blog\UserBlogController@index')}}" method="get" enctype="multipart/form-data">
                                    <div class="has-feedback has-feedback-left">
                                        <input type="search" class="form-control" placeholder="Search" name="s" value="{{isset($s)? $s : ''}}">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 text-size-base text-muted"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /sidebar search -->


                        <!-- Categories -->
                        <div class="sidebar-category">
                            <div class="category-title bg-slate-600">
                                <span>Categories</span>
                                <ul class="icons-list">
                                    <li><a href="#" data-action="collapse"></a></li>
                                </ul>
                            </div>

                            <div class="category-content no-padding">
                                <ul class="navigation navigation-bordered">
                                    @foreach($blogCat as $row)
                                        <li>
                                            <a href="{{action('Blog\CategoryWiseController@index', ['id' => $row->blogCategoryID])}}">
                                                <span class="text-muted text-size-small text-regular pull-right badge bg-slate">{{$row->countPost($row->blogCategoryID)}}</span>
                                                <i class="icon-arrow-right5"></i>
                                                {{$row->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- /categories -->


                        <!-- Share -->
                        <div class="sidebar-category">
                            <div class="category-title bg-slate-600">
                                <span>Share</span>
                                <ul class="icons-list">
                                    <li><a href="#" data-action="collapse"></a></li>
                                </ul>
                            </div>

                            <div class="category-content no-padding-bottom text-center">
                                <ul class="list-inline no-margin">
                                    <li>
                                        <a href="#" class="btn bg-indigo btn-icon content-group">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn bg-danger btn-icon content-group">
                                            <i class="icon-youtube3"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn bg-info btn-icon content-group">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn bg-orange btn-icon content-group">
                                            <i class="icon-feed3"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /share -->



                        <!-- Tags -->
                        <div class="sidebar-category">
                            <div class="category-title bg-slate-600">
                                <span>Tags</span>
                                <ul class="icons-list">
                                    <li><a href="#" data-action="collapse"></a></li>
                                </ul>
                            </div>

                            <div class="category-content no-padding-bottom">
                                <ul class="list-inline list-inline-condensed no-margin-bottom">
                                    @foreach($blogCat as $row)
                                        <li>
                                            <a href="{{action('Blog\CategoryWiseController@index', ['id' => $row->blogCategoryID])}}">
                                                <span class="label border-left-success label-striped content-group">{{$row->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- /tags -->


                        <!-- Thumbnails -->
                        <div class="sidebar-category">
                            <div class="category-title bg-slate-600">
                                <span>Photos from Flickr</span>
                                <ul class="icons-list">
                                    <li><a href="#" data-action="collapse"></a></li>
                                </ul>
                            </div>

                            <div class="sidebar-category-wrapper">
                                <div class="category-content">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="thumbnail no-padding no-border">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                                                        <span class="zoom-image"><i class="icon-plus22"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /thumbnails -->


                        {{--<!-- Archive -->--}}
                        {{--<div class="sidebar-category">--}}
                            {{--<div class="category-title bg-slate-600">--}}
                                {{--<span>Archive</span>--}}
                                {{--<ul class="icons-list">--}}
                                    {{--<li><a href="#" data-action="collapse"></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="category-content no-padding">--}}
                                {{--<ul class="navigation">--}}
                                    {{--<li><a href="#">January 2017</a></li>--}}
                                    {{--<li><a href="#">December 2016</a></li>--}}
                                    {{--<li><a href="#">November 2016</a></li>--}}
                                    {{--<li><a href="#">October 2016</a></li>--}}
                                    {{--<li><a href="#">September 2016</a></li>--}}
                                    {{--<li><a href="#">August 2016</a></li>--}}
                                    {{--<li><a href="#">July 2016</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /archive -->--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="text-center content-group-lg pt-20 mb-20">
        <ul class="pagination">
            {{$table->appends(['s' => $s])->links()}}
        </ul>
    </div>

@endsection


@section('script')

@endsection
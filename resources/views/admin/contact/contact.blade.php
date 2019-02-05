@extends('layouts.adminMaster')
@section('title')
Contact
@endsection
@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- List with text -->
        <div class="panel">
            <div class="panel-heading bg-slate pt-10 pb-10">
                <h5 class="panel-title">All Contact List</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <ul class="media-list media-list-linked">
                @foreach($table as $row)
                <li class="media">
                    <a href="{{action('Contact\ContactController@massage_details',['id' => $row->contactID])}}" class="media-link">
                        <div class="media-body">
                            <div class="media-heading text-semibold"><span class="icon-diamond3 pr-5"></span>{{$row->name}}</div>
                            <span class="text-muted">{{str_limit($row->massage, 50, '...')}}</span>
                        </div>
                        <div class="media-right media-middle text-nowrap">
                            <span class="text-muted">
                                {{$row->created_at->diffForHumans()}}
                            </span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- /list with text -->
    </div>
    <div class="col-md-6">
        <!-- List with text -->
        <div class="panel">
            <div class="panel-heading bg-slate pt-10 pb-10">
                <h5 class="panel-title">Contact Massage</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <ul class="media-list media-list-linked">
                <li class="media">
                    <div  class="media-link">
                        <div class="media-body">
                            <div class="media-heading text-semibold">James Alexander</div>
                            <span class="text-muted">alesjender@gmail.com</span>
                        </div>
                        <div class="media-right media-middle text-nowrap">
                            <span class="text-muted">
                                1 min ago
                            </span>
                        </div>

                            <div class="media-heading text-regular">Massage</div>
                            <p class="text-size-small text-lowercase text-muted pt-5">This is massage from user to the admin</p>
                        {{--<div class="panel-footer panel-footer-condensed">--}}
                            {{--<a href="#" class="heading-text pull-right">Reply <i class="icon-arrow-right14 position-right"></i></a>--}}
                        {{--</div>--}}
                    </div>
                </li>
            </ul>
        </div>
        <!-- /list with text -->
    </div>
</div>


@endsection

@section('script')

<script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">

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
            var description = $(this).data('dscr');


            $('#ediID').val(id);
            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=description]').val(description);

        });
    });



</script>

@endsection

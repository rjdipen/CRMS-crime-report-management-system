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
                    <h5 class="panel-title">All New Email List</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <ul class="media-list media-list-linked">
                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-body">
                                <div class="media-heading text-semibold">James Alexander</div>
                                <span class="text-muted">This is massage text from user..</span>
                            </div>
                            <div class="media-right media-middle text-nowrap">
                            <span class="text-muted">
                                1 min ago
                            </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /list with text -->
        </div>
        <div class="col-md-6">
            <!-- List with text -->
            <div class="panel">
                <div class="panel-heading bg-slate pt-10 pb-10">
                    <h5 class="panel-title">Create New Email</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <ul class="media-list media-list-linked">
                    <li class="media">
                        <form action="" method="" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="panel-body p-10">
                                <div class="form-group mb-15">
                                    <div class="input-group">
                                        <span class="input-group-addon bg-slate-700"><i class="icon-paperplane"></i></span>
                                        <input class="form-control bg-slate" placeholder="Enter  Email" type="email">
                                    </div>
                                </div>

                                <div class="form-group mb-15">
                                    <div class="input-group">
                                        <span class="input-group-addon bg-slate-700"><i class=" icon-user"></i></span>
                                        <input class="form-control bg-slate" placeholder="Enter Title" type="text">
                                    </div>
                                </div>

                                <div class="form-group mb-15">
                                    <div class="input-group">

                                        <textarea class="form-control bg-slate" rows="12" cols="63" placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn bg-slate-700">Send <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                            </div>
                        </form>
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

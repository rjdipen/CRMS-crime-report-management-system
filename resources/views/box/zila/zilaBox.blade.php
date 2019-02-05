@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Add New Zila</h5>
                </div>

                <form action="{{action('Zila\ZilaController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-3 control-label">Division Name:</label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="divisionID" >
                                        <option value="">Select Division</option>
                                        @foreach($division as $row)
                                            <option value="{{$row->divisionID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-3 control-label">Zila Name:</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="name" placeholder="Enter Zila Name" type="text" required>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic modal -->

    <!-- Basic Edi modal -->
    <div id="ediModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Zila </h5>
                </div>

                <form action="{{action('Zila\ZilaController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-3 control-label">Division Name:</label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="divisionID" >
                                        <option value="">Select Division</option>
                                        @foreach($division as $row)
                                            <option value="{{$row->divisionID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-3 control-label">Zila Name:</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="name" placeholder="Enter Zila Name" type="text" required>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->
@endsection

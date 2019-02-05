@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i>Create New Eamil</h5>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">To:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter email..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Subject:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter Subject Name" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Descripiton Here..."></textarea>
                            </div>
                        </div><br>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Attach File:</label>
                        <div class="col-lg-9">
                            <input class="form-control-file" name="name" placeholder="dd/mm/yy" type="file" required>
                        </div>
                    </div><br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i>Send Email</button>
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
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Email</h5>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">To:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Email address here" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Subject:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Subject Name" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Descripiton Here..." required></textarea>
                            </div>
                        </div><br>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Attach File:</label>
                        <div class="col-lg-9">
                            <input style="margin-bottom: 10px;" class="form-control-file" name="name" placeholder="dd/mm/yy" type="file" required>
                        </div>
                    </div><br>
                    <br>
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

@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i>Create New Blog Post</h5>
                </div>

                <form action="{{action('Blog\AdminBlogController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Catagory:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="blogCategoryID">
                                    <option selected="">Select Catagory</option>
                                    @foreach($blogCat as $row)
                                        <option value="{{$row->blogCategoryID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Enter Title" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Description Here..."></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input style="margin-bottom: 10px;" class="form-control" name="tag" placeholder="Enter Tag Name" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Post Image:</label>
                            <div class="col-lg-9">
                                <div class="uploader">
                                    <input class="file-styled required" name="postImg" type="file">
                                </div>
                            </div>
                        </div><br>

                    </div>

                    <div style="padding: 20px;text-align: right; border-top: 1px solid transparent; margin-top: 111px;" class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i>Post</button>
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
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Blog Post</h5>
                </div>

                <form action="{{action('Blog\AdminBlogController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Catagory:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="blogCategoryID">
                                    <option selected="">Select Catagory</option>
                                    @foreach($blogCat as $row)
                                        <option value="{{$row->blogCategoryID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Enter Title" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Description Here..."></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input style="margin-bottom: 10px;" class="form-control" name="tag" placeholder="Enter Tag Name" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Post Image:</label>
                            <div class="col-lg-9">
                                <div class="uploader">
                                    <input class="file-styled required" name="postImg" type="file">
                                </div>
                            </div>
                        </div><br>

                    </div>

                    <div style="padding: 20px;text-align: right; border-top: 1px solid transparent; margin-top: 111px;" class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i>Post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->
@endsection

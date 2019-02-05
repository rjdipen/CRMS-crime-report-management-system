<div id="myModalgoods" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"><i class="icon-file-plus pr-10"></i>Add Missing Goods</h5>
            </div>

            <form action="{{action('Dashboard\DashboardController@good_save')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="name" placeholder="Enter Name..." type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Catagory:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="goodsCategoryID" required>
                                <option value="">Select Category</option>
                                @foreach($goodsCategory as $row)
                                    <option value="{{$row->goodsCategoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Brand:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="goodsSubcategoryID" required>
                                <option value="">Select subcategory</option>
                                @foreach($goodsSubcategory as $row)
                                    <option value="{{$row->goodsSubcategoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Police station:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="policeStationID" required>
                                <option value="">Select Police station</option>
                                @foreach($policeStation as $row)
                                    <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">IME/Chassis No:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="imeChessis" placeholder="Enter number" type="text" >
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Place Name:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="lPlace" placeholder="Enter place name" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Goods color:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="goodsColor" placeholder="Enter color" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Missing Date:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="missingDate" placeholder="yy/mm/dd" value="15/11/2017"  type="date">
                        </div>
                    </div><br>


                    <div class="form-group">
                        <label class="col-lg-3 control-label">Contact:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="contact" maxlength="11" placeholder="Enter Mobile Number" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Goods Image:</label>
                        <div class="col-lg-9">
                            <div class="uploader"><input class="file-styled required" name="missingGoodsImg" type="file">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tag:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="tag" placeholder="Enter tag" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Description:</label>
                        <div class="col-lg-9">
                            <textarea style="margin-bottom: 21px;" class="form-control" rows="1" name="description" placeholder="Descripiton Here..."></textarea>
                        </div>
                    </div><br>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                    <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--/Add modal--}}

{{--======Edit modal====--}}
<div id="ediModalgoods" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Missing Goods</h5>
            </div>

            <form action="{{action('Dashboard\DashboardController@good_edit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="ediIDg" name="id">

                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="name" placeholder="Enter Name..." type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Catagory:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="goodsCategoryID" required>
                                <option value="">Select Category</option>
                                @foreach($goodsCategory as $row)
                                    <option value="{{$row->goodsCategoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Brand:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="goodsSubcategoryID" required>
                                <option value="">Select subcategory</option>
                                @foreach($goodsSubcategory as $row)
                                    <option value="{{$row->goodsSubcategoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Police station:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="policeStationID" required>
                                <option value="">Select Police station</option>
                                @foreach($policeStation as $row)
                                    <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">IME/Chassis No:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="imeChessis" placeholder="Enter number" type="text" >
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Place Name:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="lPlace" placeholder="Enter place name" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Goods color:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="goodsColor" placeholder="Enter color" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Missing Date:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="missingDate" placeholder="yy/mm/dd" value="15/11/2017"  type="date">
                        </div>
                    </div><br>


                    <div class="form-group">
                        <label class="col-lg-3 control-label">Contact:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="contact" placeholder="Enter Mobile Number" maxlength="11" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Goods Image:</label>
                        <div class="col-lg-9">
                            <div class="uploader"><input class="file-styled required" name="missingGoodsImg" type="file">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tag:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="tag" placeholder="Enter tag" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Description:</label>
                        <div class="col-lg-9">
                            <textarea style="margin-bottom: 21px;" class="form-control" rows="1" name="description" placeholder="Descripiton Here..."></textarea>
                        </div>
                    </div><br>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                    <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--======/Edit modal=====--}}
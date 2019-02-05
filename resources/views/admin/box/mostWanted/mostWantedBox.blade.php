@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i>Add New Mostwanted</h5>
                </div>

                <form action="{{action('MostWanted\MostWantedController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter Name..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Gender:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="genderID" required>
                                    <option selected="">Select Gender</option>
                                    @foreach($gender as $row)
                                        <option value="{{$row->genderID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Police station:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="policeStationID"  required>
                                    <option selected="">Select Police station</option>
                                    @foreach($policeStation as $row)
                                        <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Age:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="age" placeholder="Enter Age" type="text" minlength="1" maxlength="3" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Height:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="height" maxlength="3" minlength="1" placeholder="Enter height" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Weight:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="weight" placeholder="Enter weight" type="text" minlength="2" maxlength="3" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Body color:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="bodyColor" placeholder="Enter color" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Hair color:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="hairColor" placeholder="Enter hair color" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Types of Crime:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="crimeTypeID">
                                    <option selected="">Select Catagory</option>
                                    @foreach($crimeType as $row)
                                        <option value="{{$row->crimeTypeID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Prize Money:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="prizeMoney" placeholder="Enter Prize money.." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contact:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="contact" placeholder="Enter Mobile Number" maxlength="11" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Person Image:</label>
                            <div class="col-lg-9">
                                <div class="uploader"><input class="file-styled required" name="wantedImage" type="file"></div>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="tag" placeholder="Enter Tag..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Descripiton Here..."></textarea>
                            </div>
                        </div><br>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic modal -->

    <!-- Basic Edi modal -->
    <div id="ediModal2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Most Wanted</h5>
                </div>

                <form action="{{action('MostWanted\MostWantedController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="editID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter Name..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Gender:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="genderID" required>
                                    <option selected="">Select Gender</option>
                                    @foreach($gender as $row)
                                        <option value="{{$row->genderID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Police station:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="policeStationID" required>
                                    <option selected="">Select Police station</option>
                                    @foreach($policeStation as $row)
                                        <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Age:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="age" placeholder="Enter Age" maxlength="3" minlength="1" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Height:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="height" placeholder="Enter height" maxlength="3" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Weight:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="weight" placeholder="Enter weight" minlength="2" maxlength="3" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Body color:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="bodyColor" placeholder="Enter color" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Hair color:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="hairColor" placeholder="Enter hair color" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Types of Crime:</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="crimeTypeID">
                                    <option selected="">Select Catagory</option>
                                    @foreach($crimeType as $row)
                                        <option value="{{$row->crimeTypeID}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Prize Money:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="prizeMoney" placeholder="Enter Prize money.." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contact:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="contact" placeholder="Enter Mobile Number" type="text" maxlength="11" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Person Image:</label>
                            <div class="col-lg-9">
                                <div class="uploader"><input class="file-styled required" name="wantedImage" type="file"></div>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="tag" placeholder="Enter Tag..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Descripiton Here..."></textarea>
                            </div>
                        </div><br>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->


@endsection

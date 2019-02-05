<div id="myModalperson" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"><i class="icon-file-plus"></i>Add Missing Person</h5>
            </div>
            <form action="{{action('Dashboard\DashboardController@person_save')}}" method="post" enctype="multipart/form-data">
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
                            <select class="select-search" name="genderID" required>
                                @foreach($gender as $row)
                                    <option value="{{$row->genderID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Division:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="divisionID" required>
                                @foreach($division as $row)
                                    <option value="{{$row->divisionID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Police station:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="policeStationID" required>
                                @foreach($policeStation as $row)
                                    <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Age:</label>
                        <div class="col-lg-9">
                            <input class="form-control" maxlength="3" minlength="1" name="age" placeholder="Enter Age" type="text" required>
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
                            <input class="form-control" name="weight" maxlength="3"  minlength="2" placeholder="Enter weight" type="text" required>
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
                        <label class="col-lg-3 control-label">Clothes:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="clothes" placeholder="Enter Colthes.." type="text" required>
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
                            <input class="form-control" name="contact" minlength="11" maxlength="11" placeholder="Enter Mobile Number" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Person Image:</label>
                        <div class="col-lg-9">
                            <div class="uploader"><input class="file-styled required" name="missingPersonImg" type="file"></div>
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
                            <textarea style="margin-bottom: 21px;" class="form-control" rows="1" name="description" placeholder="Descripiton Here..."></textarea>
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
{{----/Add modal----}}

{{--=========Edit Modal=======--}}
<div id="ediModalperson" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Missing Person</h5>
            </div>

            <form action="{{action('Dashboard\DashboardController@person_edit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" id="ediID" name="id">
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
                            <select class="select-search" name="genderID">
                                @foreach($gender as $row)
                                    <option value="{{$row->genderID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Division:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="divisionID">
                                @foreach($division as $row)
                                    <option value="{{$row->divisionID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Police station:</label>
                        <div class="col-lg-9">
                            <select class="select-search" name="policeStationID">
                                @foreach($policeStation as $row)
                                    <option value="{{$row->policeStationID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Age:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="age" placeholder="Enter Age" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Height:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="height" placeholder="Enter height" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Weight:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="weight" placeholder="Enter weight" type="text" required>
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
                        <label class="col-lg-3 control-label">Clothes:</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="clothes" placeholder="Enter Colthes.." type="text" required>
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
                            <input class="form-control" name="contact" placeholder="Enter Mobile Number" type="text" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Person Image:</label>
                        <div class="col-lg-9">
                            <div class="uploader"><input class="file-styled required" name="missingPersonImg" type="file"></div>
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
{{--=========/Edit Modal=======--}}
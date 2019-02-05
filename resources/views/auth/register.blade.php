@extends('layouts.userMaster')

@section('content')
    <div class="row mt-20 mb-20">
        <div class="col-md-3 col-md-offset-4">
    <!-- Advanced login -->
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
            </div>

            <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" placeholder="User Name" name="name" value="{{ old('name') }}" required autofocus>
                <div class="form-control-feedback">
                    <i class="icon-user-check text-muted"></i>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Your email" name="email" value="{{ old('email') }}" required>
                <div class="form-control-feedback">
                    <i class="icon-mention text-muted"></i>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group hidden">
                <div class="input-group">
                    <span class="input-group-addon">User Role</span>
                    <select id="userRole" class="form-control" name="userType">
                        <option value="User">User</option>
                    </select>
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<div class="input-group" id="policeSationID" style="display: none; margin-bottom: 15px;">--}}
                    {{--<span class="input-group-addon">Police Station</span>--}}
                    {{--<select class="form-control" name="policeStationID">--}}
                        {{--<option value="">Select Police Station</option>--}}
                        {{--@foreach($table as $row)--}}
                            {{--<option value="{{$row->policeStationID}}">{{$row->name}}</option>--}}
                            {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Create password" name="password" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Allready have an account?</span></div>
            <a href="{{ route('login') }}" class="btn btn-default btn-block content-group">Sign in</a>

        </div>
    </form>
    <!-- /advanced login -->

        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript">
        $(".styled, .multiselect-container input").uniform({
            radioClass: 'choice'
        });

        $(function () {
           var payType = $('#userRole').val();

            if(payType == 'User'){
                $('#policeSationID').hide();
                $('#policeSationID').find('select').removeAttr('required', 'required');
            }else {
                $('#policeSationID').show();
                $('#policeSationID').find('select').attr('required', 'required');
            }

            $('#userRole').change(function () {
                var payType = $(this).val();

                if(payType == 'User'){
                    $('#policeSationID').hide();
                    $('#policeSationID').find('select').removeAttr('required', 'required');
                }else {
                    $('#policeSationID').show();
                    $('#policeSationID').find('select').attr('required', 'required');
                }
            });
        });
    </script>
@endsection

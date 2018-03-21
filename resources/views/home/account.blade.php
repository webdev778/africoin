@extends('layouts.dashboard')
@section('title', 'Account')
@section('content')
<h2>Account</h2>
<br />
<div class="row">

    <div class="col-sm-6 col-xs-12">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <div class="panel-title">Profile</div>
            </div>

            <div class="panel-body">

                <form role="profile" id="profile" method="post" class="validate">

                    <div class="form-group">
                        <label class="control-label">Username</label>

                        <input type="text" class="form-control" name="username" data-validate="required" data-message-required="This is custom message for required field." placeholder="Username Field" value="{{ Auth::user()->name }}"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>

                        <input type="text" class="form-control" name="email" data-validate="email" placeholder="Email Field" value="{{ Auth::user()->email }}"/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-blue">Save changes</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-xs-12">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <div class="panel-title">Password</div>
            </div>

            <div class="panel-body">

                <form role="reset_password" id="reset_password" method="post" class="validate">

                    <div class="form-group">
                        <label class="control-label">Current password</label>

                        <input type="password" class="form-control" name="current_password" data-validate="required" data-message-required="This is current for required field."/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">New password</label>

                        <input type="password" class="form-control" name="new_password" data-validate="required" data-message-required="This is new password for required field."/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Confirm new password</label>

                        <input type="password" class="form-control" name="confirm_password" data-validate="required" data-message-required="This is confirm for required field."/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-blue">Save changes</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-sm-6 col-xs-12">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <div class="panel-title">Team</div>
            </div>

            <div class="panel-body">

                <form role="profile" id="profile" method="post" class="validate">

                    <div class="form-group">
                        <label class="control-label">Team members</label>

                        <input type="text" class="form-control" readonly="readonly" value="3">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Total commision</label>

                        <input type="text" class="form-control" readonly="readonly" value="200">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Team members</label>
                        <div class="input-group minimal">
                            @if(Auth::user()->affiliate_id)
                                <input type="text" readonly="readonly" class="form-control input-transparent" style=""
                                    value="{{url('/register'.'/ref/'.Auth::user()->affiliate_id)}}">
                            @endif
                            <span id="copy_btn" class="input-group-addon"><i class="fa fa-file-text"></i></span>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-xs-12">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <div class="panel-title">Security</div>
            </div>

            <div class="panel-body">

                <form role="reset_password" id="reset_password" method="post" class="validate">

                    <div class="form-group bs-example">
                        <label class="control-label">Enable 2FA</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="make-switch is-radio switch-small" data-text-label="<i class='entypo-user'></i>">
                            <input type="radio" name="radio1" checked />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Phone number</label>

                        <input type="text" class="form-control" name="phone_number" value="+17054152265"/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-blue">Save changes</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
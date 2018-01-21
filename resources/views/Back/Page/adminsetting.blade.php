@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update User Info</h4>
                        </div>
                        @include($appType.'.Include.validationMessage')
                        @include($appType.'.Include.sessionMessage')
                        <div class="content">
                            <form action="{{route('admin-setting')}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="{{$UserData->id}}">
                                            <label for="user ">Username</label>
                                            <input type="text" value="{{!empty(old('Username')) ? old('Username') : $UserData->Username}}" class="form-control border-input"
                                                   placeholder="Username" id="user" name="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" value="{{!empty(old('Email')) ? old('Email') : $UserData->Email}}" class="form-control border-input"
                                                   placeholder="Email" id="email" name="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" value="{{!empty(old('FirstName')) ? old('FirstName') : $UserData->FirstName}}" class="form-control border-input"
                                                   placeholder="First Name" id="firstname" name="FirstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" value="{{!empty(old('LastName')) ? old('LastName') : $UserData->LastName}}" class="form-control border-input"
                                                   placeholder="Last Name" id="lastname" name="LastName" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" value="{{!empty(old('Address')) ? old('Address') : $UserData->Address}}" class="form-control border-input"
                                                   placeholder="Home Address" id="address" name="Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" value="{{!empty(old('City')) ? old('City') : $UserData->City}}" class="form-control border-input" placeholder="City"
                                                   id="city" name="City">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" value="{{!empty(old('Country')) ? old('Country') : $UserData->Country}}" class="form-control border-input"
                                                   placeholder="Country" id="country" name="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" value="{{!empty(old('Postcode')) ? old('Postcode') : $UserData->Postcode}}" class="form-control border-input"
                                                   placeholder="ZIP Code" id="postcode" name="Postcode">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update User Info
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Reset User Password</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('update-password')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" id='id' value="{{$UserData->id}}">
                                            <div class="form-group">
                                                <label for="oldPassword">Old Password</label>
                                                <input type="password"  class="form-control border-input"
                                                       placeholder="Old Password" id="oldPassword" name="oldPassword">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="newPassword">New Password</label>
                                                <input type="password"  class="form-control border-input"
                                                       placeholder="New Password" id="password" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="cpassword">Confirm Password</label>
                                                <input type="password" class="form-control border-input"
                                                       placeholder="Confirm Password" id="cpassword" name="password_confirmation" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Password
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
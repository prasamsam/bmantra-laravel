@extends($appType.'.Layouts.master')

@section('content')
    <div class="content">
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add User</h4>
            </div>
            @include($appType.'.Include.validationMessage')
            <div class="content">
                <form action="{{route('user-add')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="user ">Username</label>
                                <input type="text" value="{{old('Username')}}" class="form-control border-input"
                                       placeholder="Username" id="user" name="Username">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" value="{{old('Email')}}" class="form-control border-input"
                                       placeholder="Email" id="email" name="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" value="{{old('FirstName')}}" class="form-control border-input"
                                       placeholder="First Name" id="firstname" name="FirstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" value="{{old('LastName')}}" class="form-control border-input"
                                       placeholder="Last Name" id="lastname" name="LastName" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"  class="form-control border-input"
                                       placeholder="Password" id="password" name="Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control border-input"
                                       placeholder="Confirm Password" id="cpassword" name="Password_confirmation" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" value="{{old('Address')}}" class="form-control border-input"
                                       placeholder="Home Address" id="address" name="Address">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" value="{{old('City')}}" class="form-control border-input" placeholder="City"
                                       id="city" name="City">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" value="{{old('Country')}}" class="form-control border-input"
                                       placeholder="Country" id="country" name="Country">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" value="{{old('Postcode')}}" class="form-control border-input"
                                       placeholder="ZIP Code" id="postcode" name="Postcode">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add User
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
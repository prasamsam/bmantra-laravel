@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Service</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-services' ,$service->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select Image To Update</label>

                                        <input type="file" name="serviceimage" >
                                    </div>
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <textarea name="servicename" class="form-control"
                                                  placeholder="Type service name">{{$service->servicename}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Detail</label>
                                        <textarea name="servicedetail" class="form-control"
                                                  placeholder="Type service detail">{{$service->servicedetail}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Price</label>
                                        <textarea name="serviceprice" class="form-control"
                                                  placeholder="Type service price">{{$service->serviceprice}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('manage-home')}}" type="button" class="btn btn-default">Close</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
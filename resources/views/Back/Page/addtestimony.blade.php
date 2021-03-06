@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add New Testimony</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('upload-testimony')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select Banner Image</label>
                                        <input type="file" name="testheroimage">
                                    </div>

                                    <div class="form-group">
                                        <label>Select Client Image</label>
                                        <input type="file" name="testownerimage">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Client Company Logo</label>
                                        <input type="file" name="clientcompanylogo">
                                    </div>
                                    <div class="form-group">
                                        <label>Client Name</label>
                                        <textarea name="testowner" class="form-control"
                                                  placeholder="Type client name"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="testimony" class="form-control"
                                                  placeholder="Type message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <textarea name="testownerinfo" class="form-control"
                                                  placeholder="Type post and company"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('manage-home')}}" type="button" class="btn btn-default">Close</a>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update Other Information</h4>
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-other-info',$other->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select Company Logo</label>
                                        <input type="file" name="companylogo">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Address</label>
                                        <textarea name="companyaddress" class="form-control"
                                                  placeholder="Enter company address">{{$other->companyaddress}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Opening Hour</label>
                                        <textarea name="openinghour" class="form-control"
                                                  placeholder="Enter opening hour">{{$other->openinghour}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Closing Hour</label>
                                        <textarea name="closinghour" class="form-control"
                                                  placeholder="Enter closing hour">{{$other->closinghour}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Opening Day</label>
                                        <textarea name="openingdayfrom" class="form-control"
                                                  placeholder="Enter opening day">{{$other->openingdayfrom}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Closing Day</label>
                                        <textarea name="closingdayto" class="form-control"
                                                  placeholder="Enter closing day">{{$other->closingdayto}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Company Number</label>
                                        <textarea name="companynumber" class="form-control"
                                                  placeholder="Enter company number">{{$other->companynumber}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Company Email</label>
                                        <textarea name="companyemail" class="form-control"
                                                  placeholder="Enter company email">{{$other->companyemail}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Company Fax</label>
                                        <textarea name="companyfax" class="form-control"
                                                  placeholder="Enter company fax no.">{{$other->companyfax}}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <a href="{{route('manage-page')}}" type="button" class="btn btn-default">Close</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
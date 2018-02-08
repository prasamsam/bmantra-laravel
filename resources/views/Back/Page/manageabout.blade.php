@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update About Page</h4>
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-about',$about->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <input type="file" name="firstimage">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <input type="file" name="secondimage">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Overview</label>
                                        <textarea name="companyoverview" class="form-control">{{$about->companyoverview}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Our Mission</label>
                                        <textarea name="ourmission" class="form-control">{{$about->ourmission}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Banner Info</label>
                                        <textarea name="bannerinfo" class="form-control"
                                                  placeholder="Type service price">{{$about->bannerinfo}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Bloquote</label>
                                        <textarea name="bloquote" class="form-control">{{$about->bloquote}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <a href="" type="button" class="btn btn-default">Close</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



@endsection


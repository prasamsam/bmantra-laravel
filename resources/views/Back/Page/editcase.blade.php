@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Case</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-cases' ,$case->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select Image To Update</label>

                                        <input type="file" name="caseimage" >
                                    </div>
                                    <div class="form-group">
                                        <label>Case Name</label>
                                        <textarea name="casename" class="form-control"
                                                  placeholder="Type case name">{{$case->casename}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Case Category</label>
                                        <textarea name="casecategory" class="form-control"
                                                  placeholder="Type case category">{{$case->casecategory}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Case Detail</label>
                                        <textarea name="casedetail" class="form-control"
                                                  placeholder="Type case detail">{{$case->casedetail}}</textarea>
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
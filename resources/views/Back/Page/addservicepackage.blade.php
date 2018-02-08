@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Service Package</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('upload-package')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Package Name</label>
                                        <textarea name="packagename" class="form-control"
                                                  placeholder="Type package name"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Package Service 1</label>
                                        <textarea name="packageservice1" class="form-control"
                                                  placeholder="Type Package Service 1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Package Service 2</label>
                                        <textarea name="packageservice2" class="form-control"
                                                  placeholder="Type Package Service 2"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Package Service 3</label>
                                        <textarea name="packageservice3" class="form-control"
                                                  placeholder="Type Package Service 3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Package Service 4</label>
                                        <textarea name="packageservice4" class="form-control"
                                                  placeholder="Type Package Service 4 "></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Package Service 5 </label>
                                        <textarea name="packageservice5" class="form-control"
                                                  placeholder="Type Package Service 5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Package Price</label>
                                        <textarea name="packageprice" class="form-control"
                                                  placeholder="Type Package Price"></textarea>
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
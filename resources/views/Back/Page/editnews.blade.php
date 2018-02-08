@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit News</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-news',$news->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Select News Image</label>
                                        <input type="file" name="newsimage">
                                    </div>
                                    <div class="form-group">
                                        <label>News Heading</label>
                                        <textarea name="newsheading" class="form-control"
                                                  placeholder="Type news heading">{{$news->newsheading}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>News Detail</label>
                                        <textarea name="newsdetail" class="form-control"
                                                  placeholder="Type news detail">{{$news->newsdetail}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Author Image</label>
                                        <input type="file" name="newsauthorimage">
                                    </div>
                                    <div class="form-group">
                                        <label>News Author</label>
                                        <textarea name="newsauthor" class="form-control"
                                                  placeholder="Type author name">{{$news->newsauthor}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <a href="" type="button" class="btn btn-default">Close</a>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
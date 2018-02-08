@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Slide</h4>
                            @include($appType.'.Include.validationMessage')
                            <br>
                            <div class="container-fluid">
                                <form action="{{route('update-home-slide' ,$slider->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="#slide">Select Image To Update</label>

                                        <input type="file" name="slide" id="slide" >
                                    </div>
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <textarea name="sliderdescription" class="form-control"
                                                  placeholder="Type slider heading">{{$slider->sliderdescription}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Summary</label>
                                        <textarea name="slidesummary" class="form-control"
                                                  placeholder="Type slider summary">{{$slider->slidesummary}}</textarea>
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
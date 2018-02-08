@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        @include($appType.'.Include.sessionMessage')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Manage Site</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>#</th>
                                <th>Page</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="{{route('manage-home')}}">Home Page</a></td>
                                </tr>
                                <tr>
                                    @foreach($abouts as $key => $about)
                                    <td>2</td>
                                    <td id="{{$key}}"><a href="{{route('manage-about',$about->id)}}">About Page</a></td>
                                        @endforeach
                                    </tr>
                                <tr>
                                    @foreach($others as $key => $other)
                                    <td>3</td>
                                    <td id="{{++$key}}"><a href="{{route('edit-other-info',$other->id)}}">Others</a></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


@endsection
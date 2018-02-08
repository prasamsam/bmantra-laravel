@extends($appType.'.Layouts.master')

@section('content')
    {{--manage homepage slide--}}
    <div class="content">
        @include($appType.'.Include.sessionMessage')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Manage Home Page Slide</h4>
                        </div>
                        <div class="header">
                            <a href="{{route('add-home-slide')}}" type="button"
                               class="btn btn-group btn-default btn-fill btn-sm"><i
                                        class="glyphicon glyphicon-plus"></i> Add New
                                Slide
                            </a>

                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>#</th>
                                <th>Slide</th>
                                <th>Slide Heading</th>
                                <th>Slide Description</th>
                                <th>Created at</th>
                                <th>Action</th>

                                </thead>
                                <tbody>
                                @forelse( $sliders as $key => $slider)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>Slide {{$key}}</td>
                                        <td>{{$slider->sliderdescription}}</td>
                                        <td>{{$slider->slidesummary}}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit-home-slide',$slider->id)}}"
                                               class="btn btn-group btn-info btn-fill btn-sm"><i
                                                        class="glyphicon glyphicon-edit"></i> Edit</a>
                                            <form action="{{route('delete-slide',$slider->id)}}" method="post"
                                                  class="pull-right">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-group btn-fill btn-danger btn-sm">
                                                    <i class="glyphicon glyphicon-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Data!</td>
                                    </tr>

                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{--manage services--}}
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Manage Services</h4>
                                    </div>

                                    <div class="header">
                                        <a href="{{route('home-services')}}" type="button"
                                           class="btn btn-group btn-default btn-fill btn-sm"
                                        ><i
                                                    class="glyphicon glyphicon-plus"></i> Add New Service
                                        </a>

                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Service Name</th>
                                            <th>Slide Detail</th>
                                            <th>Service Price</th>
                                            <th>Created at</th>
                                            <th>Action</th>

                                            </thead>
                                            <tbody>
                                            @forelse( $services as $key => $service)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>Service {{$key}}</td>
                                                    <td>{{$service->servicename}}</td>
                                                    <td>{{$service->servicedetail}}</td>
                                                    <td>{{($service->serviceprice)}}</td>
                                                    <td>{{$service->created_at}}</td>
                                                    <td>
                                                        <a href="{{route('edit-services',$service->id)}}"
                                                           class="btn btn-group btn-info btn-fill btn-sm"><i
                                                                    class="glyphicon glyphicon-edit"></i> Edit</a>
                                                        <form action="{{route('delete-services',$service->id)}}"
                                                              method="post" class="pull-right">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit"
                                                                    class="btn btn-group btn-fill btn-danger btn-sm"><i
                                                                        class="glyphicon glyphicon-trash"></i>Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td>No Data!</td>
                                                </tr>

                                            @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            {{--manage packages--}}
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Manage Service Packages</h4>
                                                </div>
                                                <div class="header">
                                                    <a href="{{route('add-package')}}" type="button"
                                                       class="btn btn-group btn-default btn-fill btn-sm"><i
                                                                class="glyphicon glyphicon-plus"></i> Add New Package
                                                    </a>

                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <th>#</th>
                                                        <th>Package Name</th>
                                                        <th>Package Service 1</th>
                                                        <th>Package Service 2</th>
                                                        <th>Package Service 3</th>
                                                        <th>Package Service 4</th>
                                                        <th>Package Service 5</th>
                                                        <th>Package Price</th>
                                                        <th>Created at</th>
                                                        <th>Action</th>
                                                        </thead>
                                                        <tbody>
                                                        @forelse($packages as $key => $package)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$package->packagename}}</td>
                                                                <td>{{$package->packageservice1}}</td>
                                                                <td>{{$package->packageservice2}}</td>
                                                                <td>{{$package->packageservice3}}</td>
                                                                <td>{{$package->packageservice4}}</td>
                                                                <td>{{$package->packageservice5}}</td>
                                                                <td>{{$package->packageprice}}</td>
                                                                <td>{{$package->created_at}}</td>
                                                                <td>
                                                                    <a href="{{route('edit-package',$package->id)}}"
                                                                       class=" pull-left btn btn-group btn-info btn-fill btn-xs"><i
                                                                                class="glyphicon glyphicon-edit"></i>
                                                                        Edit</a>
                                                                    <form action="{{route('delete-package',$package->id)}}"
                                                                          method="post">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <button type="submit"
                                                                                class="btn btn-group btn-fill btn-danger btn-xs">
                                                                            <i class="glyphicon glyphicon-trash"></i>Delete
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td>No Data!</td>
                                                            </tr>
                                                        @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        {{--manage cases--}}
                                        <div class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h4 class="title">Manage Cases</h4>
                                                            </div>
                                                            <div class="header">
                                                                <a href="{{route('add-cases')}}" type="button"
                                                                   class="btn btn-group btn-default btn-fill btn-sm"><i
                                                                            class="glyphicon glyphicon-plus"></i> Add
                                                                    New Case</a>

                                                            </div>
                                                            <div class="content table-responsive table-full-width">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <th>#</th>
                                                                    <th>Case Name</th>
                                                                    <th>Case Category</th>
                                                                    <th>Case Detail</th>
                                                                    <th>Created at</th>
                                                                    <th>Action</th>
                                                                    </thead>
                                                                    <tbody>
                                                                    @forelse($cases as $key => $case)
                                                                        <tr>
                                                                            <td>{{++$key}}</td>
                                                                            <td>{{$case->casename}}</td>
                                                                            <td>{{$case->casecategory}}</td>
                                                                            <td>{{$case->casedetail}}</td>
                                                                            <td>{{$case->created_at}}</td>
                                                                            <td>
                                                                                <a href="{{route('edit-cases',$case->id)}}"
                                                                                   class=" pull-left btn btn-group btn-info btn-fill btn-xs"><i
                                                                                            class="glyphicon glyphicon-edit"></i>
                                                                                    Edit</a>
                                                                                <form action="{{route('delete-cases',$case->id)}}"
                                                                                      method="post" class="pull-right">
                                                                                    {{csrf_field()}}
                                                                                    {{method_field('DELETE')}}
                                                                                    <button type="submit"
                                                                                            class="btn btn-group btn-fill btn-danger btn-xs">
                                                                                        <i class="glyphicon glyphicon-trash"></i>Delete
                                                                                    </button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td>No Data!</td>
                                                                        </tr>
                                                                    @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{--manage testimonials--}}
                                                    <div class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="header">
                                                                            <h4 class="title">Manage Testimonials</h4>
                                                                        </div>
                                                                        <div class="header">
                                                                            <a href="{{route('add-testimony')}}"
                                                                               type="button"
                                                                               class="btn btn-group btn-default btn-fill btn-sm"><i
                                                                                        class="glyphicon glyphicon-plus"></i>
                                                                                Add
                                                                                New Testimony</a>

                                                                        </div>
                                                                        <div class="content table-responsive table-full-width">
                                                                            <table class="table table-striped">
                                                                                <thead>
                                                                                <th>#</th>
                                                                                <th>Client Name</th>
                                                                                <th>Testimony</th>
                                                                                <th>Company and Post</th>
                                                                                <th>Created at</th>
                                                                                <th>Action</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                @forelse($testimonials as $key => $testimony)
                                                                                    <tr>
                                                                                        <td>{{++$key}}</td>
                                                                                        <td>{{$testimony->testowner}}</td>
                                                                                        <td>{{$testimony->testimony}}</td>
                                                                                        <td>{{$testimony->testownerinfo}}</td>
                                                                                        <td>{{$testimony->created_at}}</td>
                                                                                        <td>
                                                                                            <a href="{{route('edit-testimony',$testimony->id)}}"
                                                                                               class=" pull-left btn btn-group btn-info btn-fill btn-sm"><i
                                                                                                        class="glyphicon glyphicon-edit"></i>
                                                                                                Edit</a>
                                                                                            <form action="{{route('delete-testimony',$testimony->id)}}"
                                                                                                  method="post"
                                                                                                  class="pull-right">
                                                                                                {{csrf_field()}}
                                                                                                {{method_field('DELETE')}}
                                                                                                <button type="submit"
                                                                                                        class="btn btn-group btn-fill btn-danger btn-sm">
                                                                                                    <i class="glyphicon glyphicon-trash"></i>Delete
                                                                                                </button>
                                                                                            </form>
                                                                                        </td>
                                                                                    </tr>
                                                                                @empty
                                                                                    <tr>
                                                                                        <td>No Data!</td>
                                                                                    </tr>
                                                                                @endforelse
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{--manage news--}}
                                                                <div class="content">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="card">
                                                                                    <div class="header">
                                                                                        <h4 class="title">Manage
                                                                                            News</h4>
                                                                                    </div>
                                                                                    <div class="header">
                                                                                        <a href="{{route('add-news')}}" type="button"
                                                                                           class="btn btn-group btn-default btn-fill btn-sm">
                                                                                            <i class="glyphicon glyphicon-plus"></i>
                                                                                            Add New
                                                                                            News
                                                                                        </a>

                                                                                    </div>
                                                                                    <div class="content table-responsive table-full-width">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                            <th>#</th>
                                                                                            <th>News Heading</th>
                                                                                            <th>News Description</th>
                                                                                            <th>News Author</th>
                                                                                            <th>Created at</th>
                                                                                            <th>Action</th>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            @forelse($newses as $key => $news)
                                                                                            <tr>
                                                                                                <td>{{++$key}}</td>
                                                                                                <td>{{$news->newsheading}}</td>
                                                                                                <td>{{$news->newsdetail}}</td>
                                                                                                <td>{{$news->newsauthor}}</td>
                                                                                                <td>{{$news->created_at}}</td>
                                                                                                <td>
                                                                                                    <a href="{{route('edit-news',$news->id)}}"
                                                                                                       class=" pull-left btn btn-group btn-info btn-fill btn-sm"><i
                                                                                                                class="glyphicon glyphicon-edit"></i>
                                                                                                        Edit</a>
                                                                                                    <form action="{{route('delete-news',$news->id)}}"
                                                                                                          method="post"
                                                                                                          class="pull-right">
                                                                                                        {{csrf_field()}}
                                                                                                        {{method_field('DELETE')}}
                                                                                                        <button type="submit"
                                                                                                                class="btn btn-group btn-fill btn-danger btn-sm">
                                                                                                            <i class="glyphicon glyphicon-trash"></i>Delete
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </td>
                                                                                            </tr>
                                                                                                @empty
                                                                                                <tr>
                                                                                                    <td>No Data!</td>
                                                                                                </tr>
                                                                                                @endforelse
                                                                                            </tbody>
                                                                                        </table>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


@endsection
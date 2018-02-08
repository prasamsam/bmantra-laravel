@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Users</h4>
                        </div>
                        @include($appType.'.Include.sessionMessage')
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Postcode</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $key=> $user)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->Username}}</td>
                                        <td>{{$user->Email}}</td>
                                        <td>{{$user->FirstName}}</td>
                                        <td>{{$user->LastName}}</td>
                                        <td>{{$user->Address}}</td>
                                        <td>{{$user->City}}</td>
                                        <td>{{$user->Country}}</td>
                                        <td>{{$user->Postcode}}</td>
                                        <td>
                                            @if($user->status==0)
                                                <a href="" data-type="enable" data-id="{{$user->id}}"
                                                   class="btn-user-update btn btn-primary btn-fill btn-xs"> Enable</a>
                                            @else
                                                <a href="" data-type="disable" data-id="{{$user->id}}"
                                                   class="btn-user-update btn btn-warning btn-fill btn-xs"> Disable</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-danger btn-fill btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" align="center">No Users Found! <a href="{{route('user-add')}}"
                                                                                          class="btn btn-info btn-fill btn-wd">Add
                                                User</a></td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>


@endsection
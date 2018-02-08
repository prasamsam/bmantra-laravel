@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Clients</h4>
                        </div>
                        @include($appType.'.Include.sessionMessage')
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($clients as $key=> $client)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$client->firstname}}</td>
                                        <td>{{$client->middlename}}</td>
                                        <td>{{$client->lastname}}</td>
                                        <td>{{$client->email}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" align="center">No Clients Found! </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {{$clients->links()}}
                        </div>
                    </div>
                </div>



@endsection
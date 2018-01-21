@section('sidebar')
    <body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
                Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
            -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{route('admin')}}" class="simple-text">
                        Businessmantra
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="{{route('admin')}}">
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-user')}}">
                            <i class="ti-user"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user-add')}}">
                            <i class="ti-plus"></i>
                            <p>Add User</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user-update')}}">
                            <i class="ti-write"></i>
                            <p>Add Pages</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="ti-files"></i>
                            <p>Applications</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('client-detail')}}">
                            <i class="ti-save"></i>
                            <p>Client Details</p>
                        </a>
                    </li>
                    <li>
                </ul>
            </div>
        </div>

@endsection
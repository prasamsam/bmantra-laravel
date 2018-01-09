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
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Businessmantra
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="ti-user"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="ti-plus"></i>
                            <p>Add User</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="ti-reload"></i>
                            <p>Update User</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="ti-files"></i>
                            <p>Applications</p>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="ti-save"></i>
                            <p>Client Details</p>
                        </a>
                    </li>
                    <li>
                </ul>
            </div>
        </div>

@endsection
@section('foot')


    <footer class="footer">
        <div class="container-fluid">

            <div class="copyright pull-right">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                , <a href="http://www.creative-tim.com">BusinessMantra</a>
            </div>
        </div>
    </footer>

    </div>
    </div>



        <!--   Core JS Files   -->
        <script src="{{asset('/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>


        <!--  Checkbox, Radio & Switch Plugins -->
        <script src="{{asset('/js/bootstrap-checkbox-radio.js')}}"></script>

        <!--  Charts Plugin -->
        <script src="{{asset('/js/chartist.min.js')}}"></script>

        <!--  Notifications Plugin    -->
        <script src="{{asset('/js/bootstrap-notify.js')}}"></script>

        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
        <script src="{{asset('/js/paper-dashboard.js')}}"></script>

    <!------AJAX CRUD------->
    <script type="text/javascript" src="{{asset('/js/ajaxcrud.js')}}"></script>
    <script>
        var token = '{{csrf_token()}}';
        var url = '{{URL::to('/')}}';
    </script>
        </html>

@endsection
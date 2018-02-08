@section('foot')

    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 logfooter">
                <span id=" loginfooter">2017 All Rights Reserved &copy; Blink Consulting</span>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <div class="modal fade" id="picuploadmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload Profile Picture</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{URL::to('images/clients/'.$ClientData->image)}}" class="image-thumbnail image-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="row">

                            <form action="{{route('client-picture-upload')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="hidden" name="id" value="{{$ClientData->id}}">
                                <label for="picupload" class="btn btn-primary">Add Image</label>
                                <input type="file" id="picupload" name="userImage">
                                </div>
                                <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/vendor/jquery-library.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/final-countdown.js')}}"></script>
    <script src="{{asset('js/chartsloader.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/pogoslider.js')}}"></script>
    <script src="{{asset('js/morris.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/parallax.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script src="{{asset('js/kinetic.js')}}"></script>
    <script src="{{asset('js/countTo.js')}}"></script>
    <script src="{{asset('js/appear.js')}}"></script>
    <script src="{{asset('js/gmap3.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
        var token = '{{csrf_token()}}';
        var url = '{{URL::to('/')}}';
    </script>
    </body>
    </html>

@endsection
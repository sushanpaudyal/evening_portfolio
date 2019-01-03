@extends('admin.adminLayouts.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Portfolio Category </h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Details</h4>
                        @if(Session::has('flash_message_info'))
                            <div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                                <strong class="text-info">{!! session('flash_message_info') !!}</strong>
                            </div>
                        @endif
                        <form class="m-t-30" action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data" id="add_service">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>

                            <button type="submit" class="btn btn-primary">Insert</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->


    </div>
@endsection



@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminpanel/assets/libs/summernote/dist/summernote-bs4.css')}}">
@endsection

@section('script')
    <script src="{{asset('public/adminpanel/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script>
        /************************************/
        //default editor
        /************************************/
        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        /************************************/
        //inline-editor
        /************************************/
        $('.inline-editor').summernote({
            airMode: true
        });

        /************************************/
        //edit and save mode
        /************************************/
        window.edit = function() {
            $(".click2edit").summernote()
        },
            window.save = function() {
                $(".click2edit").summernote('destroy');
            }

        var edit = function() {
            $('.click2edit').summernote({ focus: true });
        };

        var save = function() {
            var markup = $('.click2edit').summernote('code');
            $('.click2edit').summernote('destroy');
        };

        /************************************/
        //airmode editor
        /************************************/
        $('.airmode-summer').summernote({
            airMode: true
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js?fbclid=IwAR0gve14W2V8EXN6DR0mdbmJ6_pcNkxyRRcUjMPer_eKY7pwwSj8E-WcaKM">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#add_service").validate({
                rules: {
                    name: {
                        required: true
                    },

                } ,
                messages : {
                    name: {
                        required: "<span class='text-danger'> You Cannot Leave Name Field Blank </span>"
                    },


                }
            });
        });

    </script>
@endsection
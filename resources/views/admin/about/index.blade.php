@extends('admin.adminLayouts.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">About</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">About</li>
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
                        <h4 class="card-title">About Details</h4>
                        @if(Session::has('flash_message_info'))
                            <div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                                <strong class="text-info">{!! session('flash_message_info') !!}</strong>
                            </div>
                        @endif
                        <form class="m-t-30" action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" rows="5" class="form-control summernote">
                                  {{$about->content}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                            </div>

                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="text" class="form-control" name="dob" id="dob" value="{{$about->dob}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$about->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$about->email}}">
                            </div>

                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" name="skype" id="skype" value="{{$about->skype}}">
                            </div>

                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" name="website" id="website" value="{{$about->website}}">
                            </div>
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <input type="text" class="form-control" name="fb" id="fb" value="{{$about->fb}}">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter" value="{{$about->twitter}}">
                            </div>
                            <div class="form-group">
                                <label for="gmail">Gmail </label>
                                <input type="text" class="form-control" name="gmail" id="gmail" value="{{$about->gmail}}">
                            </div>
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$about->linkedin}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Info</button>
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
@endsection

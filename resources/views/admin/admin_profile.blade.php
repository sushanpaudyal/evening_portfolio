@extends('admin.adminLayouts.admin_design')


@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Profile Page</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{asset('public/adminpanel/uploads/profile/'.$user->image)}}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">{{$user->name}}</h4>

                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{$user->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{$user->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>{{$user->address}}</h6>
                        <small class="text-muted p-t-30 db">Social Profile</small>
                        <br/>
                        <a href="{{$user->facebook}}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$user->twitter}}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></a>
                        <a href="{{$user->linkedin}}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                        </li>
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">{{$user->name}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">{{$user->phone}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{$user->email}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                        <br>
                                        <p class="text-muted">{{$user->address}}</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="m-t-30">
                                    {!! htmlspecialchars_decode($user->about) !!}
                                </p>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="{{route('admin.update', $user->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="name" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-line" name="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="phone" value="{{$user->phone}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Image</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">About</label>
                                        <div class="col-md-12">
                                                  <textarea rows="10" cols="20" class="form-control form-control-line summernote" name="about">
                                                     {{$user->about}}
                                                  </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="address" value="{{$user->address}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Facebook</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="facebook" value="{{$user->facebook}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Twitter</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="twitter" value="{{$user->twitter}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Linkedin</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="linkedin" value="{{$user->linkedin}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="btn btn-success" type="submit" value="Update Profile">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

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
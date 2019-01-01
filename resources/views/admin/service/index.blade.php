@extends('admin.adminLayouts.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Services</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
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
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Services</h4>
                        @if(Session::has('flash_message_success')) 
                            <div class="alert alert-success alert-block"> 
                                <button type="button" class="close" data-dismiss="alert">x</button> 
                                <strong>{!! session('flash_message_success') !!}</strong> 
                            </div> 
                        @endif

                        @if(Session::has('flash_message_info'))
                            <div class="alert alert-primary alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{!! session('flash_message_info') !!}</strong>
                            </div>
                        @endif

                        @if(Session::has('flash_message_danger'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{!! session('flash_message_danger') !!}</strong>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Body</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                               <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$loop->index +1}}</td>
                                            <td>{{$service->name}}</td>
                                            <th>
                                                <i class="fa {{$service->icon}}"></i>
                                            </th>
                                            <th>
                                                {!! htmlspecialchars_decode($service->body) !!}
                                            </th>
                                            <th>
                                                <a href="{{route('service.edit', $service->id)}}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a id="delete_service" href="{{route('service.delete', $service->id)}}" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </th>
                                        </tr>
                                        @endforeach
                               </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    @endsection


@section('style')
    <link href="{{asset('public/adminpanel/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{asset('public/adminpanel/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('public/adminpanel/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#delete_service").click(function(){
               if(confirm('Are You Sure to delete')){
                   return true;
               }
               return false;
            });
        });
    </script>
    @endsection
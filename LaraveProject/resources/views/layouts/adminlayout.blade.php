<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="author" content="">
    <link href="{{URL::to('admintemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admintemplate/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{ URL::to('admintemplate/css/toastr.min.css')}}" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                 <img class="img-profile rounded-circle" style="width:20%"
                                    src="{{URL::to('admintemplate/img/undraw_profile.svg')}}">
                <div class="sidebar-brand-text" style="padding-left: 2px;font-size:12px">Surfweb Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">
            {{-- course  --}}
            <li class="nav-item {{ Request::is('course/*') ? 'active' : '' }}">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#courseDem"
                    aria-expanded="true" aria-controls="courseDem">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Courses</span>
                </a>
                <div id="courseDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="{{route('course.create')}}">Create Course</a>
                        <a class="collapse-item" href="{{route('course.index')}}">View Courses</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
             {{-- Trainers --}}
            <li class="nav-item {{ Request::is('trainer/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#trainerDem"
                    aria-expanded="true" aria-controls="trainerDem">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Trainers</span>
                </a>
                <div id="trainerDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('trainer.create')}}">Create Trainer</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
            {{-- Sponsorsips --}}
            <li class="nav-item {{ Request::is('sponsorship/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sponsorsipDem"
                    aria-expanded="true" aria-controls="sponsorsipDem">
                    <i class="fas fa-fw fa-credit-card "></i>
                    <span>Sponsorships</span>
                </a>
                <div id="sponsorsipDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('sponsorship.create')}}">Create Sponsorship</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
                     {{-- participants --}}
            <li class="nav-item {{ Request::is('participant/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#participantsDem"
                    aria-expanded="true" aria-controls="participantsDem">
                    <i class="fas fa-fw fa-handshake"></i>
                    <span>Participants</span>
                </a>
                <div id="participantsDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('participant.create')}}">Create Participants</a>
                        <a class="collapse-item" href="{{route('participant.index')}}">View Participants</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
                     {{-- modeOfTraining --}}
            <li class="nav-item {{ Request::is('mode_of_training/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#modeOfTrainingDem"
                    aria-expanded="true" aria-controls="modeOfTrainingDem">
                    <i class="fas fa-fw fa-headset"></i>
                    <span>Mode of Training</span>
                </a>
                <div id="modeOfTrainingDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('mode_of_training.create')}}">Create ModeOfTraining</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
                     {{-- courseDate --}}
            <li class="nav-item {{ Request::is('training_date/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#courseDateDem"
                    aria-expanded="true" aria-controls="courseDateDem">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Course Date</span>
                </a>
                <div id="courseDateDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('training_date.create')}}">Create Course Date</a>

                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
                     {{-- courseTime --}}
            <li class="nav-item {{ Request::is('training_time/*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#courseTimeDem"
                    aria-expanded="true" aria-controls="courseTimeDem">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Course Time</span>
                </a>
                <div id="courseTimeDem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('training_time.create')}}">Create Course Time</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{URL::to('admintemplate/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile.edit')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Surfweb Solutions {{date("Y")}}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" style="color:#ffffff" >
                            <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                       <span style="color:#ffffff"> {{ __('Log Out') }}</span>
                                    </x-dropdown-link>
                              </form>

                    </button>

                </div>
            </div>
        </div>
    </div>

  <script src="{{URL::to('admintemplate/vendor/jquery/jquery.min.js')}}"></script>

    @yield('jquery')

    <script>

        $(document).ready(function(){
            $('.submitbutton').click(function(){

                setTimeout(function() {
                    $('.submitbutton').prop('disabled', true);
                }, 10)

                setTimeout(function() {
                    $('.submitbutton').prop('disabled', false);
                }, 5000)
            })

        })

    </script>

  <script src="{{asset('admintemplate/js/toastr.min.js')}}"></script>
<script>
    // success message popup notification
    @if(session()->has('success'))
    toastr.success("{{ session()->get('success') }}");
    @endif

    // info message popup notification
    @if(session()->has('info'))
    toastr.info("{{ session()->get('info') }}");
    @endif

    // warning message popup notification
    @if(session()->has('warning'))
    toastr.warning("{{ session()->get('warning') }}");
    @endif

    // error message popup notification
    @if(session()->has('error'))
    toastr.error("{{ session()->get('error') }}");
    @endif
</script>


    <script src="{{URL::to('admintemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('admintemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{URL::to('admintemplate/js/sb-admin-2.min.js')}}"></script>
    <script src="{{URL::to('admintemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('admintemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::to('admintemplate/js/demo/datatables-demo.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{URL::to('admintemplate/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{URL::to('admintemplate/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{URL::to('admintemplate/js/demo/chart-pie-demo.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>


</body>

</html>

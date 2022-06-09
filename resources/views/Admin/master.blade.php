<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('public/web_assist/images/3.png')}}">
    <title>Sarmayah Admin</title>
    <!-- Custom CSS -->
    <link href="{{asset('public/dist/css/style.min.css')}}" rel="stylesheet">
    @yield('css')

    <style>
    @yield('styles')
   
    .iconfont{
        font-size:10px  !important;
    }
    </style>

</head>

<body class="horizontal-nav skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" >
        <div class="loader">
            <div class="loader__figure" class="bg-success"></div>
            <p class="loader__label" class="text-success">Dashbord- Sarmayah.com</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                      
        
                            <!-- Light Logo icon -->

                        </b>
                        <!--End Logo icon -->
                       <span class="hidden-sm-down">
                         <!-- dark Logo text -->
            
                         <!-- Light Logo text -->    
                       <a href="{{url('ad/home')}}">  <img src="{{asset('public/web_assist/images/sarmayah_logo.png')}}"
                          height="34" class="light-logo" alt="homepage"/></a>
                      </span> 
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                            @php $not=DB::table('admin_notifications')->where('status',null)->orderBy('created_at','DESC')->get(); @endphp
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark"  title="Notification" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email" ></i>
                                <div class="notify"> @if($not->count()>0) <span class="heartbit"></span> <span class="point"></span> @endif </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                   
                                        <div class="message-center">
                                            <!-- Message -->

                                            @foreach($not as $row)
                                            
                                             <a href="{{url('ad/notification/center')}}">
                                                <div class="d-flex">
                                                <div class="btn btn-info btn-circle d-flex"><i class="fas fa-chart-bar "></i></div>
                                                </div>
                                                <div class="mail-contnet">
                                                 <h5>{{$row->type}}</h5> <span class="mail-desc">{{$row->notification_content}}</span> <span class="time">@php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</span> </div>
                                            
                                            </a>
                                            
                                            @endforeach
                                        </div>
                                    <li>
                                        <a class="nav-link text-center link" href="{{url('ad/notification/center')}}"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                  
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                      <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('storage/app')}}/{{Auth::user()->profile_photo_path}}" alt="user"  style="width:38px;height:43px"> <span class="hidden-md-down">{{Auth::user()->name}} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">

                                <!-- text-->
                                <a href="{{url('ad/account/settings')}}" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                         
                                    <a href="{{url('/logout')}}">
                                           <button type="submit" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</button>
                                           </a>
                                <!-- text-->
                            </form>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                                              
                 <li ><a href="{{url('ad/home')}}" class="iconfont"><i class="icon-speedometer"></i> Dashboard
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>

                <li> <a  href="{{url('ad/business')}}" class="iconfont" ><i class="fas fa-chart-line"></i><span class="hide-menu">Businesses</span></a>
                <ul aria-expanded="false" class="collapse">
                <li><a href="{{url('ad/business/not_verified')}}">Unverified Business</a></li>
                <li><a href="{{url('ad/business/draft')}}">Draft Businesses</a></li>
                <li><a href="{{url('ad/business/submited')}}">Submitted Businesses</a></li>
                <li><a href="{{url('ad/business/approved')}}">Approved Businesses </a></li>
                <li><a href="{{url('ad/business/rejected')}}">Rejected Businesses</a></li>
              
                </ul>
               </li> 


                  <li><a href="{{url('ad/sectors')}}" class="iconfont"><i class="fa fa-industry"></i> Sectors
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>


                  <li><a href="{{url('ad/featured/business')}}" class="iconfont"><i class=" fas fa-clipboard-check"></i> Feature Business
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>
                  <li><a href="{{url('ad/invited_user')}}" class="iconfont"><i class=" fas fa-clipboard-check"></i> User Invitations 
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>


                  <li><a href="{{url('ad/investors')}}" class="iconfont"><i class="fas fa-donate"></i> Investors
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>
                   <li><a href="{{url('ad/users')}}" class="iconfont"><i class="fas fa-users"></i> Users
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>
     
               <li > <a  aria-expanded="false" class="iconfont"><i class="fas fa-columns"></i></i><span class="hide-menu">Invest Process</span></a>
                <ul aria-expanded="false" class="collapse" >
                <li><a href="{{url('ad/saved_business')}}"> Saved Businesses
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>
                 <li><a href="{{url('ad/cancel_request')}}">Canceled Requests
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>

                 <li><a href="{{url('ad/investment_request')}}">Investment Requests
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>

                </ul>
               </li> 
                
             <li> <a  href="{{url('ad/website_pages')}}" class="iconfont" aria-expanded="false"><i class="fas fa-columns"></i></i><span class="hide-menu">Website pages</span></a>
                <ul aria-expanded="false" class="collapse" style="z-index:1000">
                <li><a href="{{url('ad/website_pages')}}">All Pages</a></li>
                <li><a href="{{url('ad/blogs')}}">Blogs</a></li>
                <li><a href="{{url('ad/press-news')}}">Press & News</a></li>
                <li><a href="{{url('ad/Careers')}}">Careers</a></li>
                <li><a href="{{url('ad/partners')}}">Partners</a></li>

                </ul>
            </li> 
          
              <li> <a class="has-arrow waves-effect waves-dark iconfont"href="javascript:void(0)" aria-expanded="false"><i class="fas fa-shield-alt"></i>
                <span class="hide-menu">Firewalls</span></a>
                <ul aria-expanded="false" class="collapse">
                <li><a href="{{url('ad/ip_block')}}">Ip Block</a></li>
                </ul>
               </li> 


                 <li><a href="{{url('https://app.smartsupp.com/app/dashboard/conversations')}}" class="iconfont" target="_blank"><i class=" fas fa-clipboard-check"></i> Live Chat 
                    </i><span class="hide-menu"><span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                 </li>
           
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">@yield('page_title')</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active">@yield('page_directory')</li>
                            </ol>
                           <!--  <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        @yield('content1')
                        
                        <div class="card card1">
                            <div class="card-body">
                                @yield('content')
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
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                         
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Sarmayah.com
            <!-- <iframe id="if1" width="100%" height="254" style="visibility:visible" src="http://facebook.com"></iframe> -->

    

        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('public/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('public/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('public/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('public/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('public/dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('public/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('public/dist/js/custom.min.js')}}"></script>
    @yield('jquery')
</body>

</html>
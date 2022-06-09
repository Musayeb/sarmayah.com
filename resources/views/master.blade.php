<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta property="og:title" content="Investment Opportunities in Afghanistan">
      <meta property="og:description" content="A platform to connect entrepreneurs to investors">
      <meta property="og:image" content="{{asset('public/web_assist/images/website.png')}}">
      <meta property="og:url" content="https://sarmayah.com">

     <title> @yield('title') </title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{asset('public/web_assist/images/3.png')}}">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" async> 

      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" async />

     <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" async>       
         <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.1.99/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" async>
            <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet" async>  

      <!-- Slick -->
      <link href="{{asset('public/web_assist/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css" async>
      <!-- Lightgallery -->
      <!-- Select2 CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" async />
      <!-- Custom styles for this template -->
      <!-- loader -->
        <script src="{{asset('public/loader/js/vendor/modernizr-2.6.2.min.js')}}" async></script>
        <!-- js -->
              <link href="{{asset('public/web_assist/css/style.css')}}" rel="stylesheet" async > 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" async />

      @yield('css')

      <style type="text/css">
      .gsc-control-cse{
      margin-top:5px !important;
      padding:0px  !important;
      margin-left: 10px !important; 
     }
     .gsc-input{
      height: 15px !important;
     }
     .gsc-search-button{
      height: 28px !important;
     }
      .blur{
           filter: blur(5px);
        }
       @media (min-width:990px) { 
        #navbarResponsive{
          display:none;
        }
      }
      @media (max-width:990px) { 
        .div_market_position{
          display:none;
        }
      } 

    @media (max-width:600px) { 
      #sarmayah{
        height:20px;
        width:80px;

      }
    .home_row{
      margin-top:50px;
    }
    }  
    @media (min-width: 400px) {
        .bg{
            margin-top:20px;
        }
        
    }
    
    .iti--allow-dropdown{
       width:100%; 
       display:block;
      }
      
   .product_cards{
    position: absolute;
     background: #54b997;
     padding: 7px ;
     text-align: center;
     display: inline-block;
     font-size: 10px;
     font-weight: 600;
     color: #ffffff;
     margin-left:0.1px;
     opacity:0.7;
   }
   
   body{
   overflow-x:hidden;
   height: 100%;

  }
   @media screen and (max-width:767px){
       .txt-center{
           text-align: center;
       }
  }
  .card_border{
  border-radius:15px !important;
  border:2px solid rgb(145, 145, 145);
}

.bg-blue{
  background-color: rgba(80, 129, 219, 0.877) !important;
}

.bg-white-light{
  background-color: rgba(169, 169, 169, 0.863) !important;
}

.bg-blut-light{
  background-color: rgba(67, 103, 151, 0.589) !important;
}

.max-height-md{
  min-height:150px !important;
}

.max-height-lg{
  min-height:260px !important;
}

.bg{
  position: relative;
  height: 95vh;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
 

}
.search{
    align-items: center;
  justify-content: center;

}

#demo {
  object-fit: cover;
  width: 99vw;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
}
   @yield('styles')
    </style>
<script src="https://cse.google.com/cse.js?cx=d43464b0d76fc04d8" defer></script>
<script  src="https://www.googletagmanager.com/gtag/js?id=G-SWLTLJGGJQ" defer></script>
<script data-ad-client="ca-pub-7868466832589233"  src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" defer></script>


<script type="text/javascript" >

              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', 'G-SWLTLJGGJQ');
              
            var _smartsupp = _smartsupp || {};
                _smartsupp.key = 'f5b95a25714c91155849f9d83568c13d2d49e0d3';
                window.smartsupp||(function(d) {
                  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
                  c.type='text/javascript';c.charset='utf-8';c.async=true;
                  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
                })(document);
       

</script>
<script data-ad-client="ca-pub-7868466832589233" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

   </head>
   <body>

  
      <nav class="cont navbar navbar-expand-lg navbar-light topbar sticky-top shadow-sm bg-white osahan-nav-top px-0"
      style="z-index:1000">
         <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/web_assist/images/sarmayah_logo.png')}}" height="100"  alt="" id="sarmayah"></a>
       
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
         <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
             data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('businesses')}}">Investment Opportunities</a>
                  </li>

                      <li class="nav-item ">
                     <a class="nav-link" href="{{url('about_us')}}">About Us 
                     </a>
                  </li>              
               </ul>
            </div>
        </div>
      </nav>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav align-items-center ml-auto">
               <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                  <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-search fa-fw"></i>
                  </a>

                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                     <form class="w-100 ">
                           <div class="gcse-search"></div>
                    
                     </form>
                  </div>
               </li>

               <!-- investor -->
               @if(!empty(session('investor')))
               @php  
                $invest = DB::table('investors')
                ->where('investor_id',session('investor'))->get();

                 $notfi = DB::table('notifications')
                ->where('investor_id',session('investor'))
                ->where('status',null)
                ->orderBy('not_id','DESC')->get();

                $count = DB::table('notifications')
                ->select(DB::raw('count(investor_id)as count'))
                ->where('investor_id',session('investor'))
                ->where('status',null)->get();


               $name=$invest[0]->env_name;
               $last=$invest[0]->env_last_name;
               @endphp
              <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">

               <a class="btn btn-icon" id="navbarDropdownAlerts" href="javascript:void(0);" style="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell " style="margin-top:10px" ></i>
                   @if($count[0]->count!==0)
                <div style="position:absolute;">

                   <i class="text-white bg-danger" style="-webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;   
                    background-color: #FF6B6B;
                    position: absolute;
                    top: -35px;
                    left: -10px;
                    font-size: 10px;
                    line-height: 20px;
                    width:18px;"> {{$count[0]->count}}</i>
                </div>                                              
                  @endif
                  </a>


                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
            
                     <h6 class="dropdown-header dropdown-notifications-header">
                         <i class="far fa-bell mr-2"></i>
                        Notifications Center
                     </h6> 
                      @foreach($notfi as $row)
                   <a class="dropdown-item dropdown-notifications-item" href="{{url('investor/notificatios')}}">
                        <div class="dropdown-notifications-item-content">
                           <div class="dropdown-notifications-item-content-text">
                            {{$row->description}}
                           </div>
                          <small> @php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</small>
                        </div>
                    </a>
                    @endforeach
                     <a class="dropdown-item dropdown-notifications-footer" href="{{url('investor/notificatios')}}">View All Alerts</a>
                  </div>
               </li>

            <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                  <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

               <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">

                     <h6 class="dropdown-header d-flex align-items-center">
                          <a class="btn btn-icon btn-transparent-dark dropdown-toggle mr-2" href="{{url('investor_profile')}}" 
                           role="button" >
                       <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>

                  <a href="{{url('investor_profile')}}" >
                    <div class="dropdown-user-details">
                           <div class="dropdown-user-details-name">{{$invest[0]->env_name.' '.$invest[0]->env_last_name}}</div>
                           <div class="dropdown-user-details-email">{{$invest[0]->env__email}}</div>
                        </div>
                     </h6>
                   </a>  
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{url('investor_profile')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Account Settings
                     </a>
                       <a class="dropdown-item" href="{{url('interested-businesses')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-thumbs-up"></i>
                        </div>
                        Intrested Businesses
                     </a>
                     <a class="dropdown-item" href="{{url('matched-business')}}">
                        <div class="dropdown-item-icon">
                       <i class="fas fa-handshake"></i>
                        </div>
                        Matched Businesses
                     </a>

                      <a class="dropdown-item" href="{{url('saved-businesses')}}">
                        <div class="dropdown-item-icon">
                       <i class="fas fa-save"></i>
                        </div>
                        Saved Businesses
                     </a>




                     <a class="dropdown-item" href="{{url('inv_logout')}}">
                        <div class="dropdown-item-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                              <polyline points="16 17 21 12 16 7"></polyline>
                              <line x1="21" y1="12" x2="9" y2="12"></line>
                           </svg>
                        </div>
                        Logout
                     </a>
                  </div>
               </li> 
            </ul>


              @endif
              @if(!empty(session('startup')))
               @php  
                $invest = DB::table('entrepreneurs')
                ->where('entrepreneurs_id',session('startup'))->get();
                 

                 $notfi = DB::table('notifications')
                ->where('entreprenure_id',session('startup'))
                ->where('status',null)
                ->orderBy('not_id','DESC')->get();

                $count = DB::table('notifications')
                ->select(DB::raw('count(entreprenure_id)as count'))
                ->where('entreprenure_id',session('startup'))
                ->where('status',null)->get();
          
               $name=$invest[0]->entre_name;
               $last=$invest[0]->entre_last_name;
               @endphp
             <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications" >
                 
                  <a class="btn btn-icon" id="navbarDropdownAlerts" href="javascript:void(0);" style="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell " style="margin-top:10px" ></i>
                   @if($count[0]->count!==0)
                <div style="position:absolute;">

                   <i class="text-white bg-danger" style="-webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;   
                    background-color: #FF6B6B;
                    position: absolute;
                    top: -35px;
                    left: -10px;
                    font-size: 10px;
                    line-height: 20px;
                    width:18px;"> {{$count[0]->count}}</i>
                </div>                                              
                  @endif
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
            
                     <h6 class="dropdown-header dropdown-notifications-header">
                         <i class="far fa-bell mr-2"></i>
                        Notifications Center
                     </h6>
                       @foreach($notfi as $row)
                     <a class="dropdown-item dropdown-notifications-item  border-top" href="{{url('notifications')}}">
                        <div class="dropdown-notifications-item-content">
                           <div class="dropdown-notifications-item-content-text">{{$row->description}}</div>
                          <small> @php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</small>
                        </div>
                    </a>
                     @endforeach
                     <a class="dropdown-item dropdown-notifications-footer" href="{{url('notifications')}}">View All Alerts</a>
                  </div>
               </li>
            <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                  <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">

                     <h6 class="dropdown-header d-flex align-items-center">
                          <a class="btn btn-icon btn-transparent-dark dropdown-toggle mr-2" href="{{url('ent/startup/profile')}}" 
                           role="button" >
                       <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>  
                  <a href="{{url('ent/startup/profile')}}" >
                    <a href="{{url('ent/startup/profile')}}">
                    <div class="dropdown-user-details">
                           <div class="dropdown-user-details-name">{{$invest[0]->entre_name.' '.$invest[0]->entre_last_name}}</div>
                           <div class="dropdown-user-details-email">{{$invest[0]->entre_email}}</div>
                        </div>
                     </h6>
                   </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{url('ent/startup/profile')}}">
                        <div class="dropdown-item-icon">
                      <i class="mdi mdi-account"></i>
                        </div>
                        Business Profile
                     </a>

                     <a class="dropdown-item" href="{{url('ent/startup/edit/account')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Account Settings
                     </a>
                       <a class="dropdown-item" href="{{url('ent/startup/profile/edit')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Edit Business
                     </a>
                     <a class="dropdown-item" href="{{url('ent/startup/logout')}}">
                        <div class="dropdown-item-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                              <polyline points="16 17 21 12 16 7"></polyline>
                              <line x1="21" y1="12" x2="9" y2="12"></line>
                           </svg>
                        </div>
                        Logout
                     </a>
                  </div>
               </li> 
            </ul>

           
              @endif
               @if(!empty(session('sme')))
               @php  
                $entre = DB::table('entrepreneurs')
                ->where('entrepreneurs_id',session('sme'))->get();
                               
                  $notfi = DB::table('notifications')
                ->where('entreprenure_id',session('sme'))
                ->where('status',null)
                ->orderBy('not_id','DESC')->get();

                $count = DB::table('notifications')
                ->select(DB::raw('count(entreprenure_id)as count'))
                ->where('entreprenure_id',session('sme'))
                ->where('status',null)->get();
                             
               $name=$entre[0]->entre_name;
               $last=$entre[0]->entre_last_name;
               @endphp
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications" >
                 
                  <a class="btn btn-icon" id="navbarDropdownAlerts" href="javascript:void(0);" style="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell " style="margin-top:10px" ></i>
                   @if($count[0]->count!==0)
                <div style="position:absolute;">

                   <i class="text-white bg-danger" style="-webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;   
                    background-color: #FF6B6B;
                    position: absolute;
                    top: -35px;
                    left: -10px;
                    font-size: 10px;
                    line-height: 20px;
                    width:18px;"> {{$count[0]->count}}</i>
                </div>                                              
                  @endif
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts" style="position:flex;align-items: center;">
                     <h6 class="dropdown-header dropdown-notifications-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2">
                           <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                           <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        Notifications Center

                     </h6>
                       @foreach($notfi as $row)
                     <a class="dropdown-item dropdown-notifications-item" href="{{url('notifications')}}">
                        <div class="dropdown-notifications-item-content">
                       
                           <div class="dropdown-notifications-item-content-text">{{$row->description}}</div>
                          <small> @php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</small>
                           
                        </div>
                    </a>
                    @endforeach
                     </a>
                      <a class="dropdown-item dropdown-notifications-footer" href="{{url('notifications')}}">View All Notifications</a>
                  </div>
               </li>       
        
            <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                  <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

               <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">

                     <h6 class="dropdown-header d-flex align-items-center">
                          <a class="btn btn-icon btn-transparent-dark dropdown-toggle mr-2" href="{{url('ent/sme/profile')}}" 
                           role="button" >
                       <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>
                  <a href="{{url('ent/sme/profile')}}">
                    <div class="dropdown-user-details">

                           <div class="dropdown-user-details-name">{{$entre[0]->entre_name.' '.$entre[0]->entre_last_name}}</div>
                           <div class="dropdown-user-details-email">{{$entre[0]->entre_email}}</div>
                        </div>
                     </h6>
                    </a> 
                     <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('ent/sme/profile')}}">
                        <div class="dropdown-item-icon">
                      <i class="mdi mdi-account"></i>
                        </div>
                        Business Profile
                     </a>

                     <a class="dropdown-item" href="{{url('ent/sme/edit/account')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Account Settings
                     </a>
                      <a class="dropdown-item" href="{{url('ent/sme/profile/edit')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Edit Business
                     </a>
                   
                     <a class="dropdown-item" href="{{url('ent/sme/logout')}}">
                        <div class="dropdown-item-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                              <polyline points="16 17 21 12 16 7"></polyline>
                              <line x1="21" y1="12" x2="9" y2="12"></line>
                           </svg>
                        </div>
                        Logout
                     </a>
                  </div>
               </li> 
            </ul>
              @endif
               @if(!empty(session('idea')))
               @php  
                $entre = DB::table('entrepreneurs')
                ->where('entrepreneurs_id',session('idea'))->get();
                 $notfi = DB::table('notifications')
                ->where('entreprenure_id',session('idea'))
                ->where('status',null)
                ->orderBy('not_id','DESC')->get();

                $count = DB::table('notifications')
                ->select(DB::raw('count(entreprenure_id)as count'))
                ->where('entreprenure_id',session('idea'))
                ->where('status',null)
                ->get();

               $name=$entre[0]->entre_name;
               $last=$entre[0]->entre_last_name;
               @endphp

                 <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                 <a class="btn btn-icon" id="navbarDropdownAlerts" href="javascript:void(0);" style="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell " style="margin-top:10px" ></i>
                   @if($count[0]->count!==0)
                <div style="position:absolute;">

                   <i class="text-white bg-danger" style="-webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;   
                    background-color: #FF6B6B;
                    position: absolute;
                    top: -35px;
                    left: -10px;
                    font-size: 10px;
                    line-height: 20px;
                    width:18px;"> {{$count[0]->count}}</i>
                </div>                                              
                  @endif
                  </a>
                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
            
                     <h6 class="dropdown-header dropdown-notifications-header">
                       <i class="far fa-bell mr-2"></i>
                        Notifications Center
                     </h6>
                     @foreach($notfi as $row)
                     <a class="dropdown-item dropdown-notifications-item" href="{{url('notifications')}}">
                        <div class="dropdown-notifications-item-content">
                       
                           <div class="dropdown-notifications-item-content-text">{{$row->description}}</div>
                          <small> @php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</small>
                           
                        </div>
                    </a>
                    @endforeach
                    
                    
                     <a class="dropdown-item dropdown-notifications-footer"href="{{url('notifications')}}">View All Alerts</a>
                  </div>
               </li>
               
                 
            <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                  <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

               <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">

                     <h6 class="dropdown-header d-flex align-items-center">
                          <a class="btn btn-icon btn-transparent-dark dropdown-toggle mr-2" href="{{url('ent/idea/profile')}}" 
                           role="button" >
                       <h5 class="img-fluid mt-2">{{$name[0]}}{{$last[0]}}</h5>
                  </a>
                    <a href="{{url('ent/idea/profile')}}" >
                    <div class="dropdown-user-details">
                           <div class="dropdown-user-details-name">{{$entre[0]->entre_name.' '.$entre[0]->entre_last_name}}</div>
                           <div class="dropdown-user-details-email">{{$entre[0]->entre_email}}</div>
                        </div>
                     </h6>
                   </a>
                     <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="{{url('ent/idea/profile')}}">
                        <div class="dropdown-item-icon">
                       <i class="mdi mdi-account"></i>
                        </div>
                        Business Profile
                     </a>

                    <a class="dropdown-item" href="{{url('ent/idea/edit/account')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Account Settings
                     </a>
                      <a class="dropdown-item" href="{{url('ent/idea/profile/edit')}}">
                        <div class="dropdown-item-icon">
                       <i class="fa fa-cog"></i>
                        </div>
                        Edit Business
                     </a>
                     <a class="dropdown-item" href="{{url('ent/idea/logout')}}">
                        <div class="dropdown-item-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                              <polyline points="16 17 21 12 16 7"></polyline>
                              <line x1="21" y1="12" x2="9" y2="12"></line>
                           </svg>
                        </div>
                        Logout
                     </a>
                  </div>
               </li> 
            </ul>
              @endif
         

                  @if(empty(session('investor'))&& empty(session('sme'))
                  && empty(session('startup'))&& empty(session('idea')))
              <a href="{{url('account/login')}}"><button class="btn btn-outline-success" style="margin-right:15px">Log in</button></a>
                  <a href="{{url('registration')}}"><button class="btn btn-outline-success">Register</button></a>

               <form class=" d-none d-sm-inline-block ">
  
                <div class="gcse-search"></div>
              
            </form> 
                    
               @else 
              <form class="  d-none d-sm-inline-block ">
  
                <div class="gcse-search"></div>
              
            </form> 
               @endif 

            <!-- Topbar Search -->

         </div>

      </nav>
      <!-- Navigation -->
        <nav>
        <div class="collapse navbar-collapse bg-white fixed-top" id="navbarResponsive" 
        style="margin-top:70px" >
           <ul class="navbar-nav pl-4">
              <li class="nav-item">
                 <a class="nav-link" href="{{url('businesses')}}">Investment Opportunities</a>
              </li>

               <li class="nav-item ">
                 <a class="nav-link" href="{{url('about_us')}}">About Us 
                 </a>
              </li>
           </ul>
        </div>
     </div>
   </nav>
  <!-- Navigation -->











      @yield('content')


      <!--       footer -->
      <footer  style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);" class="cont text-white">
         <div class="container ">
            <div class="d-flex justify-content-between m-3">
              
               <div class="footer-list float-left">
                  <h2 class="text-white">About</h2>
                  <ul class="list" >
                     <li><a href="{{url('about_us')}}" class="text-white">About us</a></li>
                     <li><a href="{{url('careers')}}" class="text-white">Careers</a></li>
                     <li><a href="{{url('press-news')}}" class="text-white">Press &amp; News</a></li>
                     <li><a href="{{url('blogs')}}" class="text-white">Blogs</a></li>

                  </ul>
               </div>
                 <div class="footer-list float-right">
                  <h2 class="text-white">Community</h2>
                  <ul class="list">
                     <li><a href="{{url('partners')}}" class="text-white">Partnerships</a></li>
                     <li><a href="{{url('investors-relationship')}}" class="text-white">Investor Relations</a></li>
                     <li><a href="#" class="text-white">Events</a></li>
                     <li><a href="{{url('invite-friends')}}" class="text-white">Invite a Friend</a></li>
                  
                  </ul>
               </div>

          
                <div class="footer-list float-left" >
                  <h2 class="text-white">Terms & Conditions</h2>
                  <ul class="list" >
                    <li><a href="{{url('privacy-policy')}}" class="text-white">Privacy Policy</a></li>
                    <li><a href="{{url('terms-of-use')}}" class="text-white">Terms of Service</a></li>
                     <li><a href="{{url('intellectual-property')}}" class="text-white ">Intellectual Property Claims</a></li>
                  </ul>
               </div>
          <div class="footer-list float-left">
              <h2 class="text-white">Support</h2>
              <ul class="list">
                 <li><a href="https://www.smartsupp.com/widget/f5b95a25714c91155849f9d83568c13d2d49e0d3" target="_blank" class="text-white" >Help &amp; Support</a></li>
                 <li><a href="#" class="text-white">Investing with Sarmayah</a> </li>
                 <li><a href="#" class="text-white">Get Investment with Sarmayah</a></li>
              </ul>
           </div>
     

             
            </div>
            <div class="copyright">
               <div class="logo">
                  <a href="{{url('/')}}">
                  <img src="{{asset('public/web_assist/images/sarmayah_footer.png')}}">

                  </a>
               </div>
               <p class="text-white">© Copyright 2021 Sarmayah. All Rights Reserved</p>
               <ul class="social">
                  <li>
                     <a href="https://www.facebook.com/SarmayahLLC" target="_blank"><i class="fab fa-facebook-f text-white" aria-hidden="true"></i></a>
                  </li>

                  <li>
                     <a href="https://www.linkedin.com/company/armayah-com/"  target="_blank"><i class="fab fa-linkedin-in text-white" aria-hidden="true"></i></a>
                  </li>
      
                  <li>
                     <a href="https://www.instagram.com/sarmayahllc/"  target="_blank"><i class="fab fa-instagram text-white" aria-hidden="true" ></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </footer>
      <!--       footer-->
      <!-- Bootstrap core JavaScript -->
 <script src="{{asset('public/web_assist/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('public/web_assist/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <!-- Slick -->
      <script src="{{asset('public/web_assist/vendor/slick-master/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
      <!-- lightgallery -->
      <!-- select2 Js -->
      <script src="{{asset('public/web_assist/vendor/select2/js/select2.min.js')}}"></script>
      <!-- Custom -->
      <script src="{{asset('public/web_assist/js/custom.js')}}"></script>
        <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>

    
      @yield('jquery')
 

   </body>
</html>
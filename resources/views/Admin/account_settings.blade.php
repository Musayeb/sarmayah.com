@extends('Admin.master')

@section('css')
   <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
       <link href="{{asset('public/assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('public/dist/css/pages/user-card.css')}}" rel="stylesheet">

@endsection
@section('content')
     <div class="row el-element-overlay">

                        <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{url('storage/app')}}/{{ Auth::user()->profile_photo_path}}" alt="user">
                                    <div class="el-overlay scrl-dwn">
                                        <ul class="el-info">
                                            <li>
                                                <a class="btn default btn-outline image-popup-vertical-fit" href="{{url('storage/app')}}/{{ Auth::user()->profile_photo_path}}">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="box-title">{{Auth::user()->name}}</h4>
                                    <small>{{Auth::user()->email}}</small>
                                    <br> </div>
                            </div>
                        </div>
                    </div>


                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-7 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                                <li class="nav-item"> <a class="nav-link password" data-toggle="tab" href="#security" role="tab">Password</a> </li>
                                <li class="nav-item"> <a class="nav-link  " data-toggle="tab" href="#step" role="tab">Two Step Verfication</a> </li>


                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">      
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="{{url('update/admin/info')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name"  class="form-control form-control-line" value="{{Auth::user()->name}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email"   class="form-control form-control-line" name="email" value="{{Auth::user()->email}}" required>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-md-12">Photo</label>
                                                <div class="col-md-12">
                                                    <input type="file" class="form-control form-control-line" name="photo">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                  <div class="tab-pane " id="security" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="post" action="{{url('password/change')}}">
                                           @csrf
                                            <div class="form-group">
                                                <label class="col-md-12">Current Password </label>
                                                <div class="col-md-12">
                                                    <input type="password" name="current_password"  class="form-control form-control-line" required>
                                                        {!!$errors->first('current_password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                                                </div>
                                            </div>
                                          
                                          <div class="form-group">
                                                <label class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="new_password"  class="form-control form-control-line" required>
                                                       {!!$errors->first('new_password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Confirm Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="confirm_password" class="form-control form-control-line" required>
                                                   {!!$errors->first('confirm_password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Password</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                  <div class="tab-pane " id="step" role="tabpanel">
                                    <div class="row">
                                      <div class="col-md-6">
                                       <form action="{{url('user/two-factor-authentication')}}" method="post">
                                          @csrf
                                          @if(Auth::user()->two_factor_secret)
                                          @method('delete')
                                          <h5 class="p-3">Bar Code</h5>

                                         <div class="pl-4 pr-4 pt-2 pb-3"> {!!Auth::user()->twoFactorQrCodeSvg()!!}  </div> 
                                          <button class="btn btn-danger btn-block">Disable</button>
                                            @else
                                          <button class="btn btn-success mt-2 btn-block">Enable</button>
                                          @endif 
                                     </form>
                                  </div>
                                  <div class="col-md-6">
                                    @if(Auth::user()->two_factor_secret)
                                      <h5 class="p-3">Recovery Codes</h5>
                                    <div id="recovery_code" > 
                                      @foreach(json_decode(decrypt(Auth::user()->two_factor_recovery_codes)) as $row)
                                     <p>{{$row}}</p>
                                      @endforeach 
                                      </div>

                                      @endif
                                
                                      <button id="show" class="btn btn-warning btn-block mt-2">Recovery Code</button>
                                    </div>  
                                </div>

                              </div>
                            </div>
                            </div>
                          </div>
                
                  </div>
                    <!-- Column -->
                </div>

@endsection
@section('page_title')
Account Settings
@endsection
@section('page_directory')
Account Settings
@endsection
@section('jquery')
<script type="text/javascript" src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>

@if ($errors->has('current_password')||$errors->has('new_password')||$errors->has('confirm_password'))
  <script>
      $('.password').trigger('click');
</script>       
 @endif
  @if(session()->has('notif'))
   <script type="text/javascript">
    $.toast({
               heading: '<small>{{session()->get("notif")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#ff6849',
              icon: 'success',
              hideAfter: 4500, 
              stack: 6
            });
    </script>                  
    @endif

<script type="text/javascript">
  $('#recovery_code').css('display','none');
  $('#show').click(function() {
     $('#recovery_code').toggle('slow');
  });
</script>
@endsection


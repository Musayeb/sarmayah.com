@extends('master')
@section('content')
  <div class="bg-white">
<div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
               <div class="col-lg-4 mx-auto">
                  <div class="osahan-login py-4 ">    	
                     <div class="text-center mb-4">
      	             <a href="{{url('/')}}"><img  style="height:35px;width:140px" class="mb-3" src="{{asset('public/web_assist/images/sarmayah_logo.png')}}"></a> 
                        <h5 class="font-weight-bold mt-3">First, let's find your account!</h5>
                        <p class="text-muted">Please enter your email</p>
                     </div>
                       @if(session()->has('loginerror'))
                      <p style="text-align: center;" class="text-danger">{{session()->get('loginerror')}}</p>
                       @endif
                        @if(session()->has('notif'))
                      <p style="text-align: center;" class="text-success">{{session()->get('notif')}}</p>
                       @endif
                       

                     <form action="{{url('password_change_reset')}}" method="post">
                     	@csrf
                        <div class="form-group">
                           <label class="mb-1">Email</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-account position-absolute"></i>
                              <input type="email" class="form-control" name="email" required>
                           </div>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Reset Link </button>
                        <div class="py-3 d-flex align-item-center">
                           <a href="{{url('account/login')}}">Log In</a>
                            <span class="ml-auto"> New to Sarmayah? <a href="{{url('registration')}}"> Join Our Community Now!</a></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
     </div>
     
@endsection
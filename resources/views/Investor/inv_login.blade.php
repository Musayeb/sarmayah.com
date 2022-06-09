@extends('master')

@section('content')
<div class="bg-white">
         <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
               <div class="col-lg-4 mx-auto">
                  <div class="osahan-login py-4">
                     <div class="text-center mb-4">
                        <a href="{{url('/')}}"><img  style="height:50px;width:120px" src="{{asset('public/web_assist/images/2 (2).png')}}"></a>
                        <h5 class="font-weight-bold mt-3">Sign In </h5>
                        <p class="text-muted">Sign in to start investing or securing investment to your business.</p>
                     </div>
                       @if(session()->has('loginerror'))
                        <p style="color: red;text-align: center;">{{session()->get('loginerror')}}</p>
                         @endif
                     <form  method="post" action="{{url('inv_login_check')}}">
                     	@csrf
                        <div class="form-group">
                           <label class="mb-1">Email</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-account position-absolute"></i>
                              <input  value="{{  old('email')  }}"  class="form-control" type="email"  name="email">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Password</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-key-variant position-absolute"></i>
                              <input type="password" class="form-control" value="{{old('password')}}" name="password">
                           </div>
                        </div>
            
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Sign in </button>
             
                        <div class="py-3 d-flex align-item-center">
                           <!-- <a href="forgot-password.html">Forgot password?</a> -->

                           <span class="ml-auto"> New to Sarmayah? <a href="{{url('investor_registration')}}"> Join our Community Now!</a></span>

                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

@endsection
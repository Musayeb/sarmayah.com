@extends('master')
 @section('title')
 Login - Sarmayah.com
 @endsection

@section('css')
    <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="bg-white">
         <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
               <div class="col-lg-4 mx-auto">
                  <div class="osahan-login py-4">
                     <div class="text-center mb-4">
                        <a href="{{url('/')}}"><img  style="height:35px;width:140px" src="{{asset('public/web_assist/images/sarmayah_logo.png')}}"></a>
                        <h5 class="font-weight-bold mt-3">Sign In </h5>
                        <p class="text-muted">Sign in to start investing or securing investment for your business.</p>
                     </div>
                       @if(session()->has('loginerror'))
                        <p style="color:red;text-align:center;font-size:12px"> @php echo html_entity_decode(session()->get('loginerror')) @endphp</p>
                         @endif
                     <form action="{{route('entre_login')}}" method="post">
                     	@csrf
                        <div class="form-group">
                           <label class="mb-1">Email</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-account position-absolute"></i>
                              <input type="email" class="form-control" required  name="email" value="{{ old('email') }}">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Password</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-key-variant position-absolute"></i>
                              <input type="password" class="form-control" required  name="password">
                           </div>
                        </div>
                      <a  href="{{url('password_reset')}}"><p>Forgot password?</p></a>

                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Sign in </button>
             
                        <div class="py-3 d-flex align-item-center">
                           <span class="ml-auto"> New to Sarmayah? <a href="{{url('registration')}}"> Join Our Community Now!</a></span>

                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

@endsection
@section('jquery')
 <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>

          @if(session()->has('error'))
                 <script>
    $.toast({
        heading: '<small>{{session()->get("error")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'error',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
            @endif
@endsection
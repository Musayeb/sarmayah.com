@extends('master')
@section('title')
Invite Friend -Sarmayah.com
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
                        <a href="{{url('/')}}">
                        	<img src="{{url('public/web_assist/images/sarmayah_logo.png')}}" style="height:40px;width:60%" alt="Sarmayah.com">
                        </a>
                        <h5 class="font-weight-bold mt-3">Invite a Friend</h5>
                     </div>
                     <form action="{{'invite_frinds'}}" method="post" >
                     	@csrf
                        <div class="form-row">
                           <div class="col">
                              <div class="form-group">
                                 <label class="mb-1">Inviter name</label>
                                 <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-account position-absolute"></i>
                                    <input type="text" class="form-control" name="inviter_name" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-1">Inviter email</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-email-outline position-absolute"></i>
                              <input type="email" class="form-control" name="inviter_email" required>
                           </div>
                        </div>
                      <div class="form-group">
                           <label class="mb-1">Friend's name</label>
                           <div class="position-relative icon-form-control">
                           <i class="mdi mdi-account position-absolute"></i>
                              <input type="text" class="form-control" name="friend_name" required>
                           </div>
                        </div>
                          <div class="form-group">
                           <label class="mb-1">Friend email</label>
                           <div class="position-relative icon-form-control">
                              <i class="mdi mdi-email-outline position-absolute"></i>
                              <input type="email" class="form-control" name="friend_email" required>
                           </div>
                        </div>
           
                     
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Send </button>
                  
                      
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
               heading: '{{session()->get("error")}}',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'error',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
            @endif
 @if(session()->has('notif'))
     <script>
    $.toast({
               heading: '<small>{{session()->get("notif")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'success',
              hideAfter: 6500, 
              stack: 6
            });

    </script>       
            @endif

@endsection

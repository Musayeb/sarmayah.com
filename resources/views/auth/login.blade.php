
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        <img src="{{asset('public/web_assist/images/sarmayah_logo.png')}}" style="height:40px;width:180px">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

       
             <section id="wrapper">
            <div class="login-box card">
                <div class="card-body">
                         <form method="POST" action="{{ url('login') }}">
                            @csrf

                        <h3 class="text-center m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="email" name="email" :value="old('email')" class="form-control" placeholder="Email" required > </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div> 
                                    <div class="ml-auto">
                                  @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn btn-success btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        
                       
                    </form>
                  
                </div>
            </div>
        </div>
    </section>
    </x-jet-authentication-card>
</x-guest-layout>

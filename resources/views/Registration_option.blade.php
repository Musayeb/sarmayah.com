@extends('master')
 @section('title')
 Registration option - Sarmayah.com
 @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/animation.css')}}">
@endsection

@section('styles')

.investor:hover {
	display:absolute;
	bottom:10px;
 }
 .entrepre:hover {
	display:absolute;
	bottom:10px;
 }

 td{
 font-size:11px;
}

 
@endsection
@section('content')

<div class="bg-white pb-5 ">
         <div class="container">
                <h5 class="font-weight-bold pt-4" align="center">Register - It’s FREE!</h5>

            <div class="row justify-content-center align-items-center py-md-5  ">

				<div class="col-lg-4 col-md-6 entrepre" style="padding:10px;">
		            <!-- Card -->
		            <div class="card">
		                <div class="card-body ">
		                	<div class="text-center">
		                	   <img class="card-img-top img-responsive rounded-circle " src="{{asset('public/web_assist/images/entre.png')}}"  alt="Entreprenure" style="height:130px;width: 130px">
		                	</div>
		                    <h4 class="card-title text-center">Entrepreneur </h4>
		          
		                   <table class="table " style="margin-bottom:60px;">
		                       <tr>
		                        <td>Create a business account</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>
		                      <tr>
		                        <td >Post your busniess in idea, startup or growth phase</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>
		                      <tr>
		                        <td>Secure investment for your business</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>

		                </table>
		                <div class="text-center">
		                    <a href="{{url('enterpreneur_registration')}}" class="btn btn-success btn-circle text-center"  >Join as an Entrepreneur  </a>
		                </div>
		                </div>
		            </div>
		        </div>

		        <div class="col-lg-4 col-md-6 investor" style="padding:10px;">
		            <!-- Card -->
		            <div class="card">
		                <div class="card-body">
		                	 <div class="text-center m-b-20">
		                	   <img class="card-img-top img-responsive rounded-circle" src="{{asset('public/web_assist/images/investor.png')}}" alt="Investor" style="height:130px;width: 130px">
		                	</div>
		                    <h4 class="card-title text-center">Investor</h4>
		                   <table class="table" style="margin-bottom:60px;">
		                   	      <tr>
		                        <td>Find investment opportunities</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>
		                      <tr>
		                        <td>Connect with like-minded entrepreneurs</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>
		                      <tr>
		                        <td>Invest in commercially viable busniesses</td>
	                           <td> <i class="fa fa-check text-success"></i></td>
		                      </tr>
		                        
		                </table>
						<div class="text-center">
		                    <a href="{{url('investor_registration')}}" class="btn btn-success text-center"  >Join as an Investor </a>
		                </div>
		                </div>
		            </div>
		        </div>

            </div>
         </div>
</div>   
@endsection

@section('jquery')

@endsection


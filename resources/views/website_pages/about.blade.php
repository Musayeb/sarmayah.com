@extends('master')
 @section('title')
 About Us - Sarmayah.com
 @endsection

@section('css')
@endsection
@section('content')
      <!-- End Inner Header -->
      <!-- About -->
      <section class="py-5 bg-white">
         <div class="container">
           <nav class="bg-white" aria-label="breadcrumb" >
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
             </nav>
            
            <div class="row align-items-center">
               <div class="pl-4 col-lg-5 col-md-5 pr-4">
                  <img class="rounded img-fluid" src="{{asset('public/web_assist/images/about1.jpg')}}" alt="Card image cap">
               </div>
               <div class="col-lg-6 col-md-6 pl-5 pr-5" style="text-align: justify;text-justify: inter-word">
                  <h5>ABOUT US</h5>
                  <p class="mb-5">Sarmayah.com is a matchmaking platform that connects investors with businesses in three different stages of ideation, startup, and growth. Sarmayah.com provides the technology that an investor can deeply analyze, and ultimately find and fund their favorite investment opportunities. 
                  </p>
                  <h5 class="mt-2" style="text-align: justify;text-justify: inter-word">OUR MISSION</h5>
                  <p>Our mission is to  help investors find and invest in commercially viable businesses.</p>
                  <h5 class="mt-4" style="text-align: justify;text-justify: inter-word">OUR GOAL</h5>
                  <p>Our goal is to provide a platform where people can easily invest in businesses.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- End About -->
      <!-- What We Provide -->
     
      <!-- Trusted Agents -->
     
      <!-- <div style="height:40px" class="row bg-white"></div> -->

@endsection

@section('jquery')
@endsection 
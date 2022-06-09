@extends('master')
 @section('title')
{{$career->blog_title}} - Sarmayah.com
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
                   <li class="breadcrumb-item"><a href="{{url('/careers')}}">Careers</a></li>

                   <li class="breadcrumb-item active" aria-current="page">{{$career->blog_title}}</li>

                </ol>
             </nav>
             
             <div class="row">
                <div class="col-md-12">
                  
                     <div class="mt-4">
                    @php  $newDate1 = date("F,d,Y", strtotime($career->blog_reg_date)); @endphp
                         <label>{{ $newDate1}}</label>
                         
                         <h1>{{$career->blog_title}}</h1>

                        @php echo html_entity_decode($career->blog_content) @endphp
                    </div>
                    @php $lineArray = explode(",", $career->tags)@endphp
                    <h5 class="mt-5">Keywords :</h5>
                    @foreach($lineArray as $t)                                   
                    <label class="badge badge-success" style="background-color:#27d6ad;font-size:16px">{{'#'.$t}}</label>
                   @endforeach
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
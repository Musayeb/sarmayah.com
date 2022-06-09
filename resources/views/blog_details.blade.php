@extends('master')
 @section('title')
 {{$blog->blog_title}} - Sarmayah.com
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
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Blog</li>
                   <li class="breadcrumb-item active" aria-current="page">{{$blog->blog_title}}</li>

                </ol>
             </nav>
             
             <div class="row">
                <div class="col-md-9">
                    <div class="img" >
                     <img class="img-fluid" alt="{{$blog->blog_title}}" src="{{url('storage/app')}}/{{$blog->blog_feture_img}}" style="width:100%;height:400px;object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;">
                    </div>
                     <div class="mt-4">
                    @php  $newDate1 = date("F,d,Y", strtotime($blog->blog_reg_date)); @endphp
                         <label>{{ $newDate1}}</label>
                         
                         <h1>{{$blog->blog_title}}</h1>

                        @php echo html_entity_decode($blog->blog_content) @endphp
                    </div>
                    @php $lineArray = explode(",", $blog->tags)@endphp
                    <h5 class="mt-5">Keywords :</h5>
                    @foreach($lineArray as $t)                                   
                    <label class="badge badge-success" style="background-color:#27d6ad;font-size:16px">{{'#'.$t}}</label>
                   @endforeach
                </div>
              <div class="col-md-3">
                <h2>Recent Blogs <hr></h2>

               
              
              

                @foreach($blogs as $b)
                <a href="{{url('blog')}}/{{$b->slug}}">
                <h5>{{$b->blog_title}}</h5>
                @php   $newDate = date("F,d,Y", strtotime($b->blog_reg_date)); @endphp
                <label>{{ $newDate}}</label>
                <hr>
                </a>
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
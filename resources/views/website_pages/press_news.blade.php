@extends('master')
 @section('title')
Press & News - Sarmayah.com
 @endsection


@section('styles')

@endsection
@section('content')
   <div class="container p-5">
   	  <nav class="bg-white" aria-label="breadcrumb" >
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Press & News</li>
        </ol>
     </nav>
         <h3 style="color:#2bdc9f" class="text-center font-weight-bold ">Press & News</h3>

          <div class="col-lg-12 view_slider recommended mt-4" data-select2-id="9">
              <div class="row">
                  @foreach($news as $row)
                   <div class="col-md-3 bg-white p-2 ml-2">
                              <a href="{{url('/news')}}/{{$row->slug}}" class="guide" style="text-align:center;text-decoration:none;color:inherit;">
                                 <img src="{{url('storage/app')}}/{{$row->blog_feture_img}}" class="img-fluid" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;">
                                 <div class="content">
                               
                                    <div style="height:200px;overflow:hidden"  >
                                    <strong style="font-size:15px"> {{$row->blog_title}}</strong>
                                    <div class="text-left">
                                     <p class="show-read-more" >
                                   @php 
                                     $text=html_entity_decode($row->blog_content);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 30));
                                       echo $final.'...';
                                      @endphp
                                  </p> 
                                    </div>
                                    </div>

                                 </div>
                                 <button class="btn btn-success mt-3" style=" text-align: center;">Read More</button>
                              </a>
                           </div>
              @endforeach

              {{$news->links()}}         
          </div>
        </div>
  </div>

@endsection


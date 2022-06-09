@extends('master')
 @section('title')
 Blogs - Sarmayah.com
 @endsection


@section('styles')

@endsection
@section('content')
   <div class="container p-5">
   	  <nav class="bg-white" aria-label="breadcrumb" >
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        </ol>
     </nav>
         <h3 style="color:#2bdc9f" class="text-center font-weight-bold ">Blogs</h3>

          <div class="col-lg-12 view_slider recommended mt-4" data-select2-id="9">
              <div class="row">
                  @foreach($blogs as $row)
                     <div class="col-md-3 mt-2">
                      <div class="bg-white p-2">
                        <a href="{{url('/blog')}}/{{$row->slug}}" class="guide" style="text-decoration:none;color:inherit;">
                          @if(!empty($row->blog_feture_img))
                            <img src="{{url('storage/app')}}/{{$row->blog_feture_img}}"  class="img-fluid" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;">
                            @else
                            <img src="images/list/v1.png"  class="img-fluid" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;">
                            @endif

                           <div class="content">

                              <div style="height:170px;overflow:hidden" class="pl-2 pr-2 pb-3" >
                                <div style="text-align: center;">
                              <strong style="font-size:15px;text-align: center;"> {{$row->blog_title}}</strong>
                            </div>
                               <p>
                             @php 
                               $text=html_entity_decode($row->blog_content);
                               $final=implode(' ', array_slice(explode(' ', $text), 0, 30));
                                 echo $final.'...';
                                @endphp
                            </p> 
                              </div>
                           </div>
                           <div class="text-center">
                           <button class="btn btn-success mt-3" style=" text-align: center;">Read More</button>
                         </div>
                        </a>
                  </div>
               </div>
              @endforeach

              {{$blogs->links()}}         
          </div>
        </div>
  </div>

@endsection


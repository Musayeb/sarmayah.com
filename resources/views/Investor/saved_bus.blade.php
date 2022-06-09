@extends('master')
 @section('title')
Saved Business - Sarmayah.com
 @endsection

@section('styles')
    
.a:hover{
    text-decoration: underline;
    color: inherit;

}
a:hover{color: inherit;}
a{
    color: inherit;
  
}
@endsection
@section('content')
<div class="container mt-5 "> 
   <div  class="row  justify-content-center">
      
               <div class="col-lg-12 ">
                  <div class="box shadow-sm rounded bg-white mb-3 " >
                     <div class="box-title border-bottom p-3">
                        <h5 class="m-0 font-weight-bold">Saved Business</h5>
                     </div>
                     @foreach($savedd as $saved)
                    @php $id=encrypt($saved->entrepreneurs_id) @endphp

                     <div class="row pl-4 pr-4 justify-content-center" id="row{{$saved->entrepreneurs_id}}">
                        <div class="col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                     <a href="{{url('business/p/')}}/business={{$id}}">                     
                        <img src="{{url('storage/app')}}/{{$saved->logo}}" alt="" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;height:214px;width:100%;">    
                      </a>
                        </div>
                        <div class="col-md-6 col-lg-6" >
                        <a href="{{url('business/p/')}}/business={{$id}}" class="a" >                     

                        <h4 class="mt-5 d-flex">@if($saved->catagory=="IDEA" || $saved->catagory=="STARTUP") {{$saved->startup_name}} @else {{$saved->company_name}} @endif  
                            @if($saved->catagory=="IDEA")
                              <small class="font-weight-bold ml-1"><span class="badge badge-warning badge-pill" style="font-size:10px">{{$saved->catagory}}</span></small>
                           @elseif($saved->catagory=="SME")  
                           <small class="font-weight-bold ml-1"><span class="badge badge-success badge-pill" style="font-size:10px">{{"Growth"}}</span></small>
                                                        
                            @else
                             <small class="font-weight-bold ml-1"><span class="badge badge-primary badge-pill" style="font-size:10px">{{$saved->catagory}}</span></small> @endif

                          </h4>
                        </a>
                        <a href="{{url('business/p/')}}/business={{$id}}" >                     

                            <p style="top:100px;position:relative; justify-content:center;">
                               @php 
                                     $text=html_entity_decode($saved->elavator_picth);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 45));
                                       echo $final.'...';
                                @endphp
                            </p>
                        </a>
                        
                        </div>
                     
                       <div class="col-lg-3 col-lg-3">
                          <div class="mt-5">
                           <button class="form-control action btn btn-danger"  data-id="{{$saved->entrepreneurs_id}}">Unsave</button>
                
                        </div>

                        </div>



                    </div><hr>
                    @endforeach
                    <div class="row justify-content-center">
                          <div class="text-center justify-content-center">{{ $savedd->links() }}</div>
                    </div>
                  
        </div>

   </div>
</div>     
</div>      
@endsection

@section('jquery')

<script>
    $(".action").click(function () {
  
       var proces=$(this).attr('data-id');
        // alert(proces);
        var url="{{url('invest/business/save')}}";
        $.get(url,{type: proces,investor:@php echo session('investor');@endphp,ent:proces },function(data){     
      
          $('#row'+proces).hide();
       });
       
    });
       

  </script>
@endsection
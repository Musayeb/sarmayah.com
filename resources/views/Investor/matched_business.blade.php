@extends('master')
 @section('title')
Matched Business - Sarmayah.com
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
.socails{
  border-radius: 24px;margin: 0 0px 0 5px;color: #7a7c84; border: 1px solid #ccc;
  width: 30px;
  height: 30px;
  display: inline-block;
  text-align: center;
  line-height: 28px;
}
@endsection
@section('content')
<div class="container mt-5 "> 
   <div  class="row  justify-content-center">
      
               <div class="col-lg-12 ">
                  <div class="box shadow-sm rounded bg-white mb-3 " >
                     <div class="box-title border-bottom p-3">
                        <h5 class="m-0 font-weight-bold">Matched Business</h5>
                     </div>
                     @foreach($intrested as $row)
                    @php $id=encrypt($row->entrepreneurs_id) @endphp

                     <div class="row pl-4 pr-4 " id="row{{$row->entrepreneurs_id}}">
                        <div class="col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                     <a href="{{url('business/p/')}}/business={{$id}}">                     
                        <img src="{{url('storage/app')}}/{{$row->logo}}" alt="" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;height:214px;width:100%;">    
                      </a>
                        </div>
                        <div class="col-md-5 col-lg-5" >
                        <a href="{{url('business/p/')}}/business={{$id}}" class="a" >                     

                          <h4 class="mt-5 d-flex">@if($row->catagory=="IDEA" || $row->catagory=="STARTUP") {{$row->startup_name}} @else {{$row->company_name}} @endif  
                            @if($row->catagory=="IDEA")
                              <small class="font-weight-bold ml-1"><span class="badge badge-warning badge-pill" style="font-size:10px">{{$row->catagory}}</span></small>
                         @elseif($row->catagory=="SME")  
                           <small class="font-weight-bold ml-1"><span class="badge badge-primary badge-pill" style="font-size:10px">{{"Growth"}}</span></small>
                                                        
                            @else
                             <small class="font-weight-bold ml-1"><span class="badge badge-success badge-pill" style="font-size:10px">{{$row->catagory}}</span></small> @endif

                          </h4>
                        </a>
                        <a href="{{url('business/p/')}}/business={{$id}}" >                     

                            <p style="top:100px;position:relative; justify-content:center;">
                               @php 
                                     $text=html_entity_decode($row->elavator_picth);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 45));
                                       echo $final.'...';
                                @endphp
                            </p>
                            <a href="{{url('business/p/')}}/business={{$id}}"><button class="btn btn-success ">See More</button></a>
                        </a>
                        
                        </div>
                        <div class="col-lg-4 col-lg-4">
                          <h4 class="mt-5">Contact Detail</h4>
                         <div class="p-4">
         
                         <div class="d-flex align-items-top ">
                           <label class="mb-0 text-muted">Country</label>
                           <label class="font-weight-bold text-dark ml-auto">{{$row->country}}</label>
                         </div>
                      
                        <div class="d-flex align-items-top ">
                           <label class="mb-0 text-muted">Phone</label>
                           <label class="font-weight-bold text-dark ml-auto">{{$row->entre_phone}}</label>
                         </div>
                      
                         <div class="d-flex align-items-top ">
                           <label class="mb-0 text-muted">Email</label>
                           <label class="font-weight-bold text-dark ml-auto">{{$row->entre_email}}</label>
                         </div>
                  
                  @if($row->catagory!=="IDEA")
                         <div class=" pb-2">
                                 <div class="d-flex align-items-top mb-2">
                                        <label class="mb-0 text-muted">Socials</label>

                                        <div  style="border-top:none;margin-left:70px ">
                                          <ul class="social" style="list-style:none;display:flex;">
                                            @if(!empty($row->website_url))
                                            <li>
                                              <a href="{{$row->website_url}}" target="_blank" class="socails"><i class="mdi mdi-earth " aria-hidden="true"></i></a>
                                           </li> 
                                            @endif
                                            @if(!empty($row->facebook_url))
                                            <li>
                                                <a href="{{$row->facebook_url}}" target="_blank" class="socails"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                             </li>
                                            @endif
                                            @if(!empty($row->linkedin_url))
                                             <li>
                                                <a href="{{$row->linkedin_url}}" target="_blank" class="socails"><i class="fab fa-linkedin-in " aria-hidden="true"></i></a>
                                             </li>
                                             @endif
                                             @if(!empty($row->instagram_url))
                                           
                                             <li>
                                                <a href="{{$row->instagram_url}}" target="_blank" class="socails"><i class="fab fa-instagram " aria-hidden="true" ></i></a>
                                             </li>
                                          @endif
                                            </ul>
                                       </div>
                                     </div>
                                </div>
                     @endif
                                            
                     </div>
              
                    </div>

                    </div><hr>
                    @endforeach
                    <div class="row justify-content-center">
                          <div class="text-center justify-content-center">{{ $intrested->links() }}</div>
                    </div>

        </div>

   </div>
</div>     
</div>      
@endsection

@section('jquery')

@endsection
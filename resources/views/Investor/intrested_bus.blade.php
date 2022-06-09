@extends('master')
 @section('title')
Intrested Business - Sarmayah.com
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
                        <h5 class="m-0 font-weight-bold">Intrested Business</h5>
                     </div>
                     @foreach($intrested as $row)
                    @php $id=encrypt($row->entrepreneurs_id) @endphp

                     <div class="row pl-4 pr-4 justify-content-center" id="row{{$row->entrepreneurs_id}}">
                        <div class="col-md-3 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                     <a href="{{url('business/p/')}}/business={{$id}}">                     
                        <img src="{{url('storage/app')}}/{{$row->logo}}" alt="" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;height:214px;width:100%;">    
                      </a>
                        </div>
                        <div class="col-md-6 col-lg-6" >
                        <a href="{{url('business/p/')}}/business={{$id}}" class="a" >                     

                     
                        <h4 class="mt-5 d-flex">@if($row->catagory=="IDEA" || $row->catagory=="STARTUP") {{$row->startup_name}} @else {{$row->company_name}} @endif  
                            @if($row->catagory=="IDEA")
                              <small class="font-weight-bold ml-1"><span class="badge badge-warning badge-pill" style="font-size:10px">{{$row->catagory}}</span></small>
                            @elseif($row->catagory=="SME")  
                              <small class="font-weight-bold ml-1"><span class="badge badge-success badge-pill" style="font-size:10px">{{"Growth"}}</span></small>
                            @else
                           <small class="font-weight-bold ml-1"><span class="badge badge-primary badge-pill" style="font-size:10px">{{$row->catagory}}</span></small>
                            @endif

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
                        </a>
                        
                        </div>
                        <div class="col-lg-3 col-lg-3">
                          <div class="mt-5">
                           <button class="form-control action btn btn-danger" data-toggle="modal" data-target="#myModal3" data-id="{{$row->entrepreneurs_id}}">Cancel Request</button>
                
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

  @php
   $investor=DB::table('investors')
   ->select('env_name','env_last_name','investor_id','env__email')
   ->where('investor_id',session('investor'))
   ->get();
   @endphp

 <div id="myModal3" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h6 class="modal-title" id="myModalLabel">Canceling Request</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('invest/request/cancel')}}">
                  @csrf
                <div class="form-group">
                  <label>Full Name</label>
                <div class="position-relative icon-form-control mb-2">
                      <i class="fas fa-user position-absolute text-muted"></i>

                   <input type="text" class="form-control" readonly name="full_name" value="{{$investor[0]->env_name}} {{$investor[0]->env_last_name}}">
                   </div>
                </div>
                
                <input type="hidden" name="ent" id="ent">
                <input type="hidden" name="inv" value="{{$investor[0]->investor_id}}">

                 <div class="form-group">
                  <label>Email</label>
                   <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-email-outline  position-absolute text-muted"></i>
                      <input type="text" class="form-control" readonly name="email_name" value="{{$investor[0]->env__email}}">                           
                   </div>

                </div>       
   
                   <div class="form-group">
                  <label>Please write the reasone behind canceling this request </label>
                 <textarea class="form-control" rows="5" required name="summary"></textarea>

                {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                </div>

              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success" >Send</button>
                  </form>
                  <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@section('jquery')


<script>


    $(".action").click(function () {
  
       var proces=$(this).attr('data-id');
        // alert(proces);
        $('#ent').val(proces);
       
    });
       

  </script>
@endsection
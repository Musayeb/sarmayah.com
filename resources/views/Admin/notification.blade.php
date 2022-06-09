@extends('Admin.master')
@section('content1')
<div class="container">

      <div class="box shadow-sm rounded mb-3 card">
         <div class="box-title border-bottom p-3">
            <h6 class="m-0 font-weight-bold">Recent Notifications</h6>
         </div><br>

         <div class="box-body p-0 row39 ">
          @foreach($not as $row)

    
            <div class="align-items-center osahan-post-header">
 				@if(!empty($row->investor_id))
               <div class="alert alert-success m-1">
 				<div class="btn-group float-right">
                     <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-vertical"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item delete" data-d="39" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                     </div>
                  </div>
				  <a href="{{url('ad/investor_profile')}}/{{$row->investor_id}}">  <h6 class="text-success"><i class="fas fa-user"></i>&nbsp;{{$row->type}}</h6> 
				    {{$row->notification_content}}<br>
				    <span class="time">@php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</span>
				</a>
				</div>

				@endif
			@if(!empty($row->entre_id))
               <div class="alert alert-info m-1">
                  <div class="btn-group float-right">
                     @php $id = encrypt($row->entre_id); @endphp
                  <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-vertical"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item delete" data-d="39" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                     </div>
                  </div>
                 
				  <a href="{{url('ad/business_profile_show')}}/{{$id}}">  <h6 class="text-info"><i class="fas fa-chart-bar"></i>&nbsp;{{$row->type}}</h6> 
				    {{$row->notification_content}}<br>
				    <span class="time">@php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp</span>
			  	 </a>

			
				</div>
				
            	@endif
				
    
            </div>
    
              
         @endforeach
         </div>

    </div>     
</div>

@endsection
@section('page_title')
Notifications
@endsection
@section('page_directory')
Notifications
@endsection

@section('jquery')
<script type="text/javascript">
	$('.card1').css('display','none');
</script>
@endsection

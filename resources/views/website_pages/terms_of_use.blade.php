@extends('master')
 @section('title')
Terms of Services - Sarmayah.com
 @endsection

@section('styles')

@endsection
@section('content')
<div class="card">
   <div class="container p-5">
      <nav class="bg-white" aria-label="breadcrumb" >
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Terms of Services</li>
        </ol>
     </nav>
         <h3 style="color:#2bdc9f" class="text-center font-weight-bold">Terms of Services</h3>
     
   @if(!empty($content[0]->page_content))
      @php echo html_entity_decode($content[0]->page_content)@endphp  
  @endif
      </div>
  </div>
@endsection


@extends('master')
 @section('title')
 Careers - Sarmayah.com
 @endsection


@section('content')

     <section class="py-5 bg-white">
         <div class="container">
           <nav class="bg-white" aria-label="breadcrumb" >
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
             </nav>
         <h3 style="color:#2bdc9f" class="text-center font-weight-bold">Careers</h3>
            
            <div class="row align-items-center">
         
               <div class="col-lg-12 col-md-12 pl-5 pr-5">
                  <p class="mb-5">Sarmayah, is a platform that exists to serve people from all backgrounds and experiences without any descrimination. We are always actively looking for technical and skilled individuals to join our team and help us easily achieve our ultimate goals. We work to provide a platform for entrepreneurs to meet their new visions. Join us in this exciting journey!  
                  </p>
                  <h5>Current Opportunities</h5>
               <div class="table-responsive">

                  <table class="table table-struped">
          		 	<tbody>
                  			<tr>
                  				<th>No</th>
                  				<th>Job title</th>
                  				<th>Job Catagory </th>
                  				<th>Location</th>
                          <th>Type</th>
                          <th>Closing Date</th>

                  				<th>View</th>

                 			</tr>
                  		</tbody>
                  		<tbody>
                        @php $number=1; @endphp
                        @foreach($career as $row)
                  			<tr>
	              				<td>{{$number++}}</td>
	              				<td>{{$row->blog_title}}</td>
                        <td>{{$row->job_catagory}}</td>
                        <td>{{$row->job_location}}</td>
                        <td>{{$row->job_type}}</td>
                        <td>{{$row->job_close_date}}</td>
	              				<td><a href="Careers/{{$row->slug}}"><button class="btn btn-success">More <i class="fas fa-long-arrow-alt-right"></i></button></a></td>
                 			</tr>
                      @endforeach
                  		</tbody>
                  </table>

               </div>

               </div>
            </div>
         </div>
      </section>

@endsection
@section('jquery')
@endsection

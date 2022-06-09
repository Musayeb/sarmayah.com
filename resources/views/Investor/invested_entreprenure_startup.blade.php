@extends('master')
@section('css')

             <link href="{{asset('public/assets/icons/font-awesome/css/all.css')}}" rel="stylesheet">

@endsection
@section('styles')
@endsection
@section('content')

   <div class="profile-cover text-center">
    </div>
      <div class="bg-white shadow-sm-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="d-flex align-items-center py-3">
                     <div class="profile-left">
                        <h5 class="font-weight-bold text-dark mb-1 mt-0">{{$ent->startup_name}} Profile
                                             
                     </div>
                     <div class="profile-right ml-auto">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="py-5">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Overview</h6>
                     </div>
                     <div class="box-body p-3">
                        @php echo html_entity_decode($ent->elavator_picth)@endphp
                     </div>
                  </div>
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">SME Details</h6>
                     </div>
                     <div class="box-body">
                        <table class="table table-borderless mb-0">
                           <tbody>
                               <tr class="border-bottom">
                                 <th class="p-3">Busniess Name</th>
                                 <td class="p-3">{{$ent->company_name}} {{$ent->startup_name}}
                                 </td>
                              </tr>
                              @if(!empty($ent->company_address))
                               <tr class="border-bottom">
                                 <th class="p-3">company_Address</th>
                                 <td class="p-3">{{$ent->company_address}}
                                 </td>
                              </tr>
                              @endif
                              <tr class="border-bottom">
                                 <th class="p-3">Industry/ Sector</th>
                                 <td class="p-3">{{$ent->ent_industry_sector}}
                                 </td>
                              </tr>
                              <tr class="border-bottom">
                                 <th class="p-3">Kind of needed Investment</th>
                                 <td class="p-3">{{$ent->kind_of_investment}}</td>
                              </tr>
                              <tr class="border-bottom">
                                 <th class="p-3">minimum amount of investment are your looking for</th>
                                 <td class="p-3">{{$ent->mainimum_amount_looking}} $
                                 </td>
                              </tr>
                                 <tr class="border-bottom">
                                 <th class="p-3">Invest Round</th>
                                 <td class="p-3">{{$ent->round_invest}}</td>
                              </tr>
                               <tr class="border-bottom">
                                 <th class="p-3">Establishment Date</th>
                                 <td class="p-3">{{$ent->establishment_date}}</td>
                              </tr>
                               <tr class="border-bottom">
                                 <th class="p-3">Top Competitors</th>
                   <td class="p-3"> @php $top=explode(',', $ent->top_three_campatitors); @endphp
                   <span class="badge badge-success">@if(isset($top[0])){{$top[0]}}@endif</span>
                   <span class="badge badge-success">@if(isset($top[1])){{$top[1]}}@endif</span>
                   <span class="badge badge-success">@if(isset($top[2])){{$top[2]}}@endif</span>
                     </td>
                              </tr>


                                 <tr class="border-bottom">
                                 <th class="p-3">Monthly Revenue</th>
                                 <td class="p-3">{{$ent->ent_revenue}}$</td>
                              </tr>
                              </tr>
                                 <tr class="border-bottom">
                                 <th class="p-3"> Monthly Operation cost</th>
                                 <td class="p-3">{{$ent->ent_operation_cost}}$</td>
                              </tr>
                             </tr>
                                 <tr class="border-bottom">
                                 <th class="p-3">Team Size</th>
                                 <td class="p-3">{{$ent->team_size}}</td>
                              </tr>

                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="box mb-3 shadow-sm rounded bg-white osahan-post">
                     <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="dropdown-list-image mr-3">
                        @if(!empty($ent->logo))
                        <img class="rounded-circle" src="{{url('storage/app')}}/{{($ent->logo)}}"  alt="Business logo ">
                        @else
                        <img class="rounded-circle" src="{{url('storage/Extension/logo.png')}}"  alt="Business logo ">
                        @endif

                        </div>
                        <div class="font-weight-bold">
                           <div class="text-truncate">{{$ent->startup_name}}</div>
                           <div class="small text-gray-500">info</div>
                        </div>
  
                     </div>

                    <div class="p-3 osahan-post-body" >
                  <div class="content"> @php echo html_entity_decode($ent->problem_sulotion)@endphp</div>
                       
                     </div>
                     
                  </div>
               </main>
               <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
                  <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
                     <div class="p-5">
                      @if(!empty($ent->logo))
                        <img src="{{url('storage/app')}}/{{($ent->logo)}}" class="img-fluid" alt="Business logo ">
                        @else
                        <img src="{{url('storage/Extension/logo.png')}}" class="img-fluid" alt="Business logo ">
                        @endif
                     </div>
                     <div class="p-3 border-top border-bottom">
                        <h5 class="font-weight-bold text-dark mb-1 mt-0">{{$ent->startup_name}}</h5>
                        <p class="mb-0 text-muted">{{$ent->country}}</p>
                        
                     </div>
                     <h6>Owner</h6>
                     <div class="p-3">
                        <div class="d-flex align-items-top mb-2">
                           <p class="mb-0 text-muted">Full Name</p>
                           <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto">{{$ent->entre_name}} {{$ent->entre_last_name}}</p>

                        </div>
                        <div class="d-flex align-items-top mb-2">
                           <p class="mb-0 text-muted">Email</p>
                           <small class="font-weight-bold text-dark ml-auto">{{$ent->entre_email}}</small>

                        </div>
                         <div class="d-flex align-items-top mb-2">
                           <p class="mb-0 text-muted">phone</p>
                           <small class="font-weight-bold text-dark mb-0 mt-0 ml-auto">{{$ent->entre_phone}}</small>

                        </div>
                         <div class="d-flex align-items-top mb-2">
                           <p class="mb-0 text-muted">Account Type</p>
                           <small class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><span class="badge badge-pill  badge-success" style="font-size:14px">{{$ent->catagory}}</span></small>

                        </div>
                        <h6>Socials</h6><hr>
                        @if(!empty($ent->website_url))
                        <div class="d-flex align-items-top">
                           <p class="mb-0 text-muted">Website</p>
                           <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><a href="{{$ent->website_url}}" target="_blanck"><i class="fas fa-globe fa-lg"></i></a></p>
                        </div>
                        @endif
                        @if(!empty($ent->facebook_url))
                        
                          <div class="d-flex align-items-top">
                           <p class="mb-0 text-muted">Facebook</p>
                           <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><a href="{{$ent->facebook_url}}" target="_blanck"><i class="fab fa-facebook fa-lg"></i></a></p>
                        </div>
                        @endif
                        @if(!empty($ent->instagram_url))

                          <div class="d-flex align-items-top">
                           <p class="mb-0 text-muted">Instagram</p>
                           <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><a href="{{$ent->instagram_url}}" target="_blanck"><i class="fab fa-instagram fa-lg"></i></a></p>
                        </div>
                        @endif
                        @if(!empty($ent->linkedin_url))
                        <div class="d-flex align-items-top">
                           <p class="mb-0 text-muted">Linkedin</p>
                           <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><a href="{{$ent->linkedin_url}}" target="_blanck"><i class="fab fa-linkedin fa-lg"></i></a></p>
                        </div>
                        @endif

          <!--              <button class="btn btn-success" style="margin-top:20px;">intrested</button> -->

                     </div>
                  </div>
         
               </aside>
               <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
                <!--   <button type="button" class="btn btn-lg btn-block btn-danger mb-3"> <i class="fa fa-bell"></i> Set alert for jobs </button> -->
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">More Details
                        </h6>
                     </div>



                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <p class="m-0">Related Documents </p>
                     </div>
                     <div class="box-body p-3">
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                           
                           <div class="dropdown-list-image mr-3">
                              @if(!empty($ent->company_profile))
                                <a href="{{url('storage/app')}}/{{$ent->company_profile}}" target="_blanck"> <img height="100px" width="100px" src="@php echo  url('storage/Extension/').'/'.pathinfo($ent->company_profile,PATHINFO_EXTENSION).'.'.'png' @endphp"></a>
                             
                              @else     <img height="100px" width="100px" src="{{url('storage/Extension/file.png')}}"> @endif
                           </div>
                           <div class="font-weight-bold mr-2">
                              <div class="text-truncate">company profile</div>
                           </div>
                        </div>

                       <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                           
                           <div class="dropdown-list-image mr-3">
                                @if(!empty($ent->pitch_presentation))
                            <a href="{{url('storage/app')}}/{{$ent->pitch_presentation}}" target="_blanck"> <img height="100px" width="100px" id="1" src="@php echo  url('storage/Extension/').'/'.pathinfo($ent->pitch_presentation,PATHINFO_EXTENSION).'.'.'png' @endphp"></a>                                         
                              @else     <img height="100px" width="100px" src="{{url('storage/Extension/file.png')}}"> @endif
                           </div>
                           <div class="font-weight-bold mr-2">
                              <div class="text-truncate">Presentation File</div>
                           </div>
                        </div>
                       <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                           
                           <div class="dropdown-list-image mr-3">
                              <a href="{{$ent->pitch_video_link}}" target="_blanck">
                            <i class=" fab fa-youtube fa-3x bg-red"></i></a>
                           </div>
                           <div class="font-weight-bold mr-2">
                           <div class="text-truncate">vedio pitch Link</div>
                           </div>
                        </div>

              


            
               </aside>
            </div>
         </div>
      </div>
@endsection
@section('jquery')

@endsection
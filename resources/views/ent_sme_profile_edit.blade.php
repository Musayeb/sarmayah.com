@extends('master')
@section('title')
Grouth Profile Edit - Sarmayah.com
@endsection


@section('css')

  <link href="{{asset('public/dist/css/pages/tab-page.css')}}" rel="stylesheet">  
  <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">  
  <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/assets/node_modules/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('styles')
 body{overflow-x:hidden;}


 .table-custom{
  margin:auto;
  min-width: 700px !important;
  text-align: start;
}

.table-custom td,th{
  max-width:100px !important;
  min-width:50px !important;
  font-size:12px ;
}

#table-custom__id{
  min-width:15px !important;
  max-width:50px !important;
  text-align: center;
}


.th-big{
  width:50% ;
}

.font-big{
  font-size:13px !important;
  text-align: start !important;
}
.card_border{
  border-radius:15px !important;
  border:2px solid rgb(145, 145, 145);
}

.bg-blue{
  background-color: rgba(80, 129, 219, 0.877) !important;
}

.bg-white-light{
  background-color: #b5b5b5 !important;
}

.bg-blut-light{
  background-color: rgba(67, 103, 151, 0.589) !important;
}

.max-height-md{
  min-height:150px !important;
}

.max-height-lg{
  min-height:260px !important;
}

  .a{
    text-align:center;
  }
  .c{
    text-align:center;
  }
  .d{
    text-align:center;
  }
  .e{
    text-align:center;
  }


.table-swot .table-swot__th{
  background-color: #21cebf;
}

.table-swot .table-swot__td{
  background-color:#f0f2f5;
}

.table-swot .table-swot__th th{
  border-color: #595a5c !important;
  
  border-bottom: none !important;
  width:25% !important;
}

.table-swot  .table-swot__td td{
  border-color: #595a5c !important;
  width:25% !important;
  padding:10px 4px ;
}

.table-swot  .table-swot__td td ul{
  min-height:220px;
}

[contenteditable][placeholder]:empty:before {
  content: attr(placeholder);
  position: absolute;
  color: gray;
  background-color: transparent;
}


@endsection

@section('content')


    <div class="card" >
        <div class="card-body" >
            
            <div class="sticky-center">
             
            

       <h4 class="card-title text-center" >Business Profile</h4>
          <h5 class="card-title text-center"> Growth Application </h5>
           <h6 class="text-center">
                 @if($ent->admin_status=="Draft")<span class="badge badge-warning " data-toggle="tooltip"title="Complete your profile to be approved by admin">{{$ent->admin_status}}</span>@endif
                  @if($ent->admin_status=="Approved")<span class="badge badge-success">{{$ent->admin_status}}</span>@endif
                 @if($ent->admin_status=="Rejected")<span class="badge badge-danger">{{$ent->admin_status}}</span>@endif
                 @if($ent->admin_status=="Submitted")<span class="badge badge-primary">{{$ent->admin_status}}</span>@endif

            </h6> 

            <div class="container p-0">  
              <div class="tabs ">
                  <ul class="nav nav-tabs customtab2 " role="tablist"  >
                   <li class="nav-item"> <a class="nav-link active " data-toggle="tab" href="#home1" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Team </span></a> </li>


                    <li class="nav-item"> <a class="nav-link second_tab " data-toggle="tab" href="#home3" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">About Business</span></a> </li>




                  <li class="nav-item"> <a class="nav-link forth_tab "  data-toggle="tab" href="#messages10" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Business Model</span></a> </li>

                    <li class="nav-item"> <a class="nav-link five_tab "  data-toggle="tab" href="#messages11" role="tab"><span class="hidden-sm-up">
                   Business Trends </span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link third_tab " data-toggle="tab" href="#profile3" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Product</span></a> </li>
 
                    <li class="nav-item"> <a class="nav-link market_tab "  data-toggle="tab" href="#messages12" role="tab"><span class="hidden-sm-up">
                        Market </span></a>
                    </li>

                    <li class="nav-item"> <a class="nav-link swot_analyze "  data-toggle="tab" href="#messages13" role="tab"><span class="hidden-sm-up">
                       Expansion Plan</span></a>
                    </li>
                    

                   <li class="nav-item"> <a class="nav-link six_tab "  data-toggle="tab" href="#messages6" role="tab"><span class="hidden-sm-up">
                   Market Positioning </span></a>
                    </li>


                    <li class="nav-item"> <a class="nav-link eight_tab "  data-toggle="tab" href="#messages9" role="tab"><span class="hidden-sm-up">
                      Manage Investment </span></a>
                    </li>

                   
                    
                    <li class="nav-item"> <a class="nav-link  ninght_tab " data-toggle="tab" href="#messages3" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Financial</span></a> </li>

                     <li class="nav-item"> <a class="nav-link upload  " data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Uploads</span></a> </li>
                  

                </ul>
              </div>
             </div> 
                <!-- Tab panes -->
                <div class="tab-content">

                <div class="tab-pane active" id="home1" role="tabpanel" style="padding:40px">
                  <div class="container">
                    <a href="{{url('ent/sme/add/team/member')}}"><button class="btn btn-success float-right mb-2">Add Team Member <i class="mdi mdi-plus"></i></button></a>
                    @php $number=1;@endphp
                   <div class="table-responsive "> 
                    <table class="table table-hover">
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>Avatar</th>
                            <th>Full Name</th>
                            <th>Positon</th>
                            <th>Short Bio</th>   
                            <th>Action</th>      

                         </tr>
                      </thead>
                      <tbody>
                        @foreach($team as $row)

                        @php $id=encrypt($row->team_id) @endphp
                        <tr id="row{{$id}}">

                         <td style="text-align:center; display: table-cell;vertical-align: middle;">{{$number++}}</td>
                         <td style="text-align:center; display: table-cell;vertical-align: middle;"><img src="{{url('storage/app')}}/{{$row->photo}}" class="rounded-circle" 
                          style="width:80px;height:80px"></td>
                         <td style="text-align:center; display: table-cell;vertical-align: middle;">{{$row->full_name}}</td>
                         <td style="text-align:center; display: table-cell;vertical-align: middle;">{{$row->position}}</td>
                         <td style="text-align:center; display: table-cell;vertical-align: middle;" >@php echo html_entity_decode($row->summary) @endphp</td>
                       
                         <td style="text-align:center; display: table-cell;vertical-align: middle;">
                            <a href="{{url('ent/startup/edit/team/member')}}/member={{$id}}"><i class="mdi mdi-pencil text-info mdi-lg" style="font-size:20px"></i></a>
                            <a href="javascript:void()"><i class="mdi mdi-delete text-danger delete" data-id="{{$id}}" style="font-size:20px"></i></a>

                         </td>

                       </tr>
                       @endforeach
                      </tbody>
                    </table>
                   </div>

                  </div>
                  <div class="container">
                <button id="first_btn" class="btn btn-success float-right">Next</button>
              </div>
                </div>



                    <div class="tab-pane " id="home3" role="tabpanel" style="padding:40px">
                       <div class="container"> 
  
                      <form id="first" method="post" action="">
                        @csrf
                      <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Business Registered Name <label class="text-danger h5">*</label></label>
                                <input type="text" class="form-control required"  value="{{$ent->company_name}}" 
                                id="registered_name" placeholder="Registered Name" required> 
                          {!!$errors->first('registered_name', '<small class="text-danger ml-1">:message</small>')!!}

                            </div>
                        </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label >Business Establishment Date <label class="text-danger h5">*</label></label>
                                <input type="date" required value="{{$ent->establishment_date}}" class="form-control" id="establishment_date"> 
                        {!!$errors->first('establishment_date', '<small class="text-danger ml-1">:message</small>')!!}
                            </div>
        
                        </div>
                     
                    </div>
                 

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Trademark Name </label>
                               <input type="text"  value="{{$ent->trademark_name}}" id="trademark_name"  class="form-control"
                                placeholder="Trademark Name">
                        </div>
                    </div>


                      <div class="col-md-6">
                            <div class="form-group">
                                <label >Busniess License Number </label>
                               <input type="text" id="license_number" value="{{$ent->license_number}}" placeholder="License Number" class="form-control">
                            </div>
                        </div>   
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label > <abbr title=" If your business is registered with a different name than your business name, please write it down here">Registered Entity</abbr> <label class="text-danger h5">*</label></label>
                           <input type="text"  value="{{$ent->registred_entity}}" id="registered_entity"  class="form-control"
                            placeholder="Registered Entity" required>
                    </div>
                </div>


                  <div class="col-md-6">
                        <div class="form-group">
                            <label ><abbr title=" Based on your business license, please write your TIN here">  Business Tax Identification Number</abbr> <label class="text-danger h5">*</label></label>
                           <input type="text" id="tax_identification_number" required value="{{$ent->tax_identification_number}}" placeholder="Tax Identification Number" class="form-control">
                        </div>
                    </div>   
               </div>

                   <div class="row">
   
                      <div class="col-md-6">
                         <div class="form-group">
                           <label> Business Sector <label class="text-danger h5">*</label></label>
                                 <select required class="custom-select form-control required"  id="business_sector"   >
                                    <option value="">Select Sector</option>
                             @php $sectors=DB::table('sectors')->get();@endphp
                                @foreach($sectors as $row)
                                      <option value="{{$row->sector_id}}"
                              @if($ent->ent_industry_sector==$row->sector_id) selected @endif>{{$row->sector_name}}</option>
                             @endforeach   

                                </select>
                          {!!$errors->first('business_sector', '<small class="text-danger ml-1">:message</small>')!!}
                            </div>
                      </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label >Minimum amount of investment are you looking for ? <label class="text-danger h5">*</label></label>
                              
                                  <div class="position-relative icon-form-control mb-2">
                                      <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                        <input required class="form-control" placeholder="Minimum investment amount"
                                 @if(!empty($ent->mainimum_amount_looking))value="{{ number_format($ent->mainimum_amount_looking, 2, '.', ',')}}"@endif

                                        pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  id="minimum_ammount_of_investment" data-type="currency" >
                                   </div> 

                       {!!$errors->first('minimum_ammount_of_investment', '<small class="text-danger ml-1">:message</small>')!!}
                            </div>
                        </div>
                   </div>
      

                    <div class="row">
                       
                    <div class="col-md-6">    
                        <label>Pitch Video (Please pitch your business in one minute)<label class="text-danger h5">*</label></label>

                        <div class="form-group ">
                        <div class="position-relative icon-form-control mb-2">
                          <i class="mdi mdi-youtube-play position-absolute text-muted"></i>
                             <input type="url" class="form-control url pitch_video" required id="youtube" value="{{$ent->pitch_video_link}}">
                             {!!$errors->first('pitch_video', '<small class="text-danger ml-1">:message</small>')!!}

                            </div>  
                        </div>
                    </div>   
                    <div class="col-md-6">
                    <div class="form-group">
                      <label >Website Link </label>
                                                
                    <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-earth position-absolute text-muted"></i>
                      <input type="url" id="website_url" value="{{$ent->website_url}}"  class="form-control url">  
                    </div>

                </div>
            </div>
             </div>
             <div class="row">
                
               <div class="col-md-6">
                    <div class="form-group">
                  <label >Business Social Media Channels </label>
                   <div class="row"><br>

                  <div class="col-md-4">
                    <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-facebook position-absolute text-muted"></i>
                        <input type="url" value="{{$ent->facebook_url}}"  id="facebook_url" class="form-control url">
                    </div>
                  </div>

                  
                  <div class="col-md-4">
                   <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-instagram position-absolute text-muted"></i>
                      <input type="url" value="{{$ent->instagram_url}}" id="instagram_url" class="form-control url">
                    </div>
                  </div>
               
                  <div class="col-md-4">
                    <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-linkedin position-absolute text-muted"></i>
                      <input type="url" value="{{$ent->linkedin_url}}" name="linkedin_url"  class="form-control url">
                    </div>
                  </div>

                  </div> 
                </div>
            </div>
                 
          </div>
           <button type="submit" id="sub12" class="btn btn-success float-right">Next</button>
        </form>
      </div>
    </div>



    <div class="tab-pane p-20" id="messages12" role="tabpanel" style="padding:40px">
       <div class="container">
       <div class="row justify-content-center">
               <div class="col-md-12"> 
                <label data-toggle="tooltip" title="Define your marketing strategy">Calculate the cost of customer Acquisition (100-400 Words)<label class="text-danger h5">*</label></label>
                <textarea id="mymce16">{{$market[0]->calculate_the_cost}}</textarea>
                <span id="character_count16" class="float-right"></span><br>
                <button class="btn btn-success float-right" id="calculate_btn" >Save</button>
                <label class="mt-4">Market Segmentation<label class="text-danger h5">*</label></label>
                <section>
                    <div class="container">
                        
                        <div class="row mb-5">
                            <!-- col-3 -->
                            <div class="col-lg-3 col-md-6">
                                <!-- card -->
                                <div class="mb-3">
                                    <div class="card text-center text-white card_border border-secondary" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                                        <div class="card-body">
                                            <p>Geographic</p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <!-- card-->
                                <div class="mb-3">
                                    <div class="card text-center bg-success text-white card_border pt-3 pb-3"  style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                                        <div class="card-body">
                                            <p> E.g. "Customers
                                                whithin 10 miles of 
                                                th M25"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                               <div class="mb-3">
                                <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f " >
                                    <div class="card-body" contenteditable="true" id="segment1">
                                   
                                    @php   echo html_entity_decode($market[0]->segment1)   @endphp
                                    </div>
                                </div><!-- End card -->
                               </div>
                                
                            </div>
                            <!-- col-3 -->
                            
                            
                            <!-- col-3 -->
                            <div class="col-lg-3 col-md-6">
                                <!-- card -->
                                <div class="mb-3">
                                    <div class="card text-center text-white card_border" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                                        <div class="card-body">
                                            <p>Demograpics</p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <!-- card-->
                                <div class="mb-3" >
                                    <div class="card text-center  text-white card_border  pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                                        <div class="card-body">
                                            <p>
                                                E.g "A level &
                                                University
                                                student"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <div class="mb-3">
                                    <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                                        <div class="card-body" contenteditable="true" id="segment2">
                                    @php   echo html_entity_decode($market[0]->segment2)   @endphp
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            <!-- col-3 -->
            
                            <!-- col-3 -->
                            <div class="col-lg-3 col-md-6">
                                <!-- card -->
                                <div class="mb-3">
                                    <div class="card text-center text-white card_border"  style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9)">
                                        <div class="card-body">
                                            <p>Behavioral</p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <!-- card-->
                                <div class="mb-3">
                                    <div class="card text-center  text-white card_border   pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                                        <div class="card-body ">
                                            <p>
                                                E.g. "Customers
                                                vanting a value
                                                for money
                                                impulse"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <div class="mb-3">
                                    <div class="card text-center text-black card_border pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                                        <div class="card-body" contenteditable="true" id="segment3">
                                    @php   echo html_entity_decode($market[0]->segment3)   @endphp
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- col-3 -->
                            
                            
                            <!-- col-3 -->
                            <div class="col-lg-3 col-md-6">
                                <!-- card -->
                                <div class="mb-3">
                                    <div class="card text-center  text-white card_border" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                                        <div class="card-body">
                                            <p>Psychographic</p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <!-- card-->
                                <div class="mb-3">
                                    <div class="card text-center bg-blut-light text-white card_border  pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                                        <div class="card-body">
                                            <p>
                                                E.g " Customers
                                                who prefer to
                                                by organic food"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End card -->
                                
                                <div class="mb-3">
                                   <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                                        <div class="card-body" contenteditable="true" id="segment4">
                                    @php   echo html_entity_decode($market[0]->segment4)   @endphp
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- col-3 -->
             
                                
                        </div>
                    <button class="btn btn-success float-right mb-5" id="segment_market_btn">Save</button> 
                    </section>

                    <form action="" method="post" id="question_form" >
                    <label class="mt-4">Beachhead Market<label class="h5 text-danger">*</label></label>
                    <table class="table">
                        <tbody >
                           <tr>
                            <td>Is the target customer well-funded & readily accessible to the sales force?</td>
                              <td>
                                <select required id="qus1">
                                    <option value=""  selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu1=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu1=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                           <tr>
                            <td>Do they have a compelling reason to buy?</td>
                              <td>
                                <select required id="qus2">
                                    <option value=""  selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu2=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu2=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                           <tr>
                            <td>Can you today, with the help of partners, deliver a whole product? </td>
                              <td>
                                <select required id="qus3">
                                    <option value=""  selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu3=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu3=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                           <tr>
                            <td>Is there entrenched competition that could block you?</td>
                              <td>
                                <select required id="qus4">
                                    <option value=""  selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu4=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu4=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                           <tr>
                            <td>Can you leverage this segment to another segment?</td>
                              <td >
                                <select required id="qus5">
                                    <option value=""  selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu5=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu5=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                           <tr>
                            <td>Can you show results in an acceptable timeframe?</td>
                              <td>
                                <select required id="qus6">
                                    <option value="" selected disabled>Select</option>
                                    <option @if($market[0]->b_head_qu6=="Yes") selected @endif>Yes</option>
                                    <option @if($market[0]->b_head_qu6=="No") selected @endif>No</option>
                                </select>
                              </td>
                           </tr>
                       </tbody>
                    </table>
                     <hr>
                    <button type="submit" id="question_btn" class="float-right btn btn-success">Save</button>
                    </form>   
                   
                    <label class="mt-5">Beachhead Market Summary (Maximum words 50)<label class="text-danger">*</label></label>
                    <div class="form-group">
                    <textarea id="mymce17">{{$market[0]->beachhead_summary}}</textarea>
                    <span id="character_count17" class="float-right"></span><br>
                    <button class="btn btn-success mt-3 float-right" id="beachhead_summary_btn" >Save</button>
                </div>   

          </div>
       </div> 

       <div class="row justify-content-center">
            <div class="col-md-12">
                <section>
                    <label class="mt-3">Total Available Market Size for the Beachead Market<label class="text-danger h5">*</label></label>                                                                     
                        <div class=" mb-1 table-responsive">
                            <table class="table table-bordered table-custom table_total_market_size">
                                @if(empty($market[0]->total_available_market_size))
                                <thead>
                                    <tr>
                                        <th id="table-custom__id">#</th>
                                        <th>Feature/ Function</th>
                                        <th contenteditable="true"></th>
                                        <th>Source/based on:</th>
                                        <th contenteditable="true"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">1</th>
                                        <th>Total # of end users in the broad market segment</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">2</th>
                                        <th>Total # of end user in the targeted subsegment of your Beachhead Market</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">3</th>
                                        <th>Annual monetizable revenue pre end user</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">4</th>
                                        <th class="th-big">Estimate of top-down TAM(line 2 times line 3)</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <tr>
                                        <th id="table-custom__id">5</th>
                                        <th class="th-big">Estimate of range of profitability for your product</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <tr>
                                        <th id="table-custom__id">6</th>
                                        <th class="th-big">Estimated Compound Annual Growth Rate(CAGR)</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <tr>
                                        <th id="table-custom__id">7</th>
                                        <th class="th-big">Estimate time to achieve 20 percent market share</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                    <tr>
                                        <th id="table-custom__id">8</th>
                                        <th class="th-big">Anticipated market shares achieved if you are reasonably successful</th>
                                        <td contenteditable="true"></td>
                                        <th>Source/based on:</th>
                                        <td contenteditable="true"></td>
                                    </tr><!--End tr -->
                                   
                                    
                                      <tr>
                                        <th id="table-custom__id">9</th>
                                        <th class="th-big">What are the three top assumptions that could affect the attractiveness of the Beachhead market for your product(besides the product itself)</th>
                                        <td colspan="3" contenteditable="true">
                                            <p>1:</p>
                                            <p>2:</p>
                                            <p>3:</p>
                                        </td>
                                        
                                      </tr>            
                                </tbody>
                                @else @php echo html_entity_decode($market[0]->total_available_market_size) @endphp
                                @endif
                            </table>
                        </div>
                    <button class="btn btn-success float-right" id="total_market_size" >Save</button>
                        
                </section>
               
            </div>   
        </div>   
<button class="btn btn-success float-right mt-2" id="life_cycle_btn_next">Next</button>
</div>
</div>{{-- end of tab --}}  


<div class="tab-pane justify-content-center p-20" id="messages13" role="tabpanel" style="padding:40px">
       <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-md-12">
               <div class="form-group mb-3 " style="margin-top:10px;" >
                    <label> <abbr title="Please summarize your findings from the above questions for your expansion plan">Executive Summary</abbr> (100-400 Words) <label class="text-danger">*</label></label>
                        <textarea   id="mymce19" >{{$market[0]->executive_summary}}</textarea>
                        <span id="character_count19" class="float-right"></span> <br>
                        <small class="text-danger ml-1 "></small>
                        <button type="button" id="expansion_summary" class="btn btn-success float-right">Save</button>
                 </div>

              <div class="form-group " style="margin-top:10px;" >
                <label ><abbr title="Please write down your expansion plan if you raise the investment amount">Expansion Plan</abbr> (100-400 Words) <label class="text-danger">*</label></label>
                    <textarea  id="mymce18" >{{$market[0]->expansion_plan}}</textarea>
                    <span id="character_count18" class="float-right"></span> <br>
                    <small class="text-danger ml-1 "></small>
                    <button type="button" id="expansion_plan" class="btn btn-success float-right">Save</button>

                </div>
         


                <div class="form-group mb-3 " style="margin-top:10px;" >
                    <label> <abbr title="Please define your target market in case of business expansion">Target Market(s) for expansion plan</abbr> (100-400 Words)<label class="text-danger">*</label></label>
                        <textarea   id="mymce20" >{{$market[0]->target_market}}</textarea>
                        <span id="character_count20" class="float-right"></span> <br>
                        <small class="text-danger ml-1 "></small>
                        <button type="button" id="target_market" class="btn btn-success float-right">Save</button>
                </div>
                
                <div class="form-group mb-3 " style="margin-top:10px;" >
                    <label> <abbr title="Please write down what type of and to what extent of market study do you need for your business expansion" >Market Study for business expansion </abbr> (100-400 Words) <label class="text-danger">*</label></label>
                        <textarea    id="mymce21" >{{$market[0]->market_study}}</textarea>
                        <span id="character_count21" class="float-right"></span> <br>
                        <small class="text-danger ml-1 "></small>
                        <button type="button" id="market_study" class="btn btn-success float-right">Save</button>
                </div>
                
                <div class="form-group mb-3 " style="margin-top:10px;" >
                    <label><abbr title="Please define your plan for your product/service development in case of business expansion">Product/Service Upgrading/development</abbr> (100-400 Words) <label class="text-danger">*</label></label>
                        <textarea    id="mymce22" >{{$ent->product_upgrading}}</textarea>
                        <span id="character_count22" class="float-right"></span> <br>
                        <small class="text-danger ml-1 "></small>
                        <button type="button" id="product_upgrade" class="btn btn-success float-right">Save</button>
                </div>
                
                <div class="form-group mb-3 " style="margin-top:10px;" >
                    <label> <abbr title=" Please specify what types and to what context technical support and financial resources you need in your business expansion phase?
">Required Technical and Financial Resources for Expansion </abbr>(100-400 Words) <label class="text-danger">*</label></label>
                        <textarea  id="mymce23" >{{$market[0]->tech_resource}}</textarea>
                        <span id="character_count23" class="float-right"></span> <br>
                        <small class="text-danger ml-1 "></small>
                        <button type="button" id="required_tech" class="btn btn-success float-right">Save</button>
                </div>
        </div>
  </div>
  <button class="btn btn-success float-right mt-3" id="expan_next">Next</button>
</div>
</div>


  <div class="tab-pane justify-content-center p-20" id="profile3" role="tabpanel" style="padding:40px">
        <div class="container">
          <div class="row justify-content-center">
          <div class="col-md-12">
            <label class="">Define the business minimum viable product <label class="text-danger h5">*</label></label>
            <div class="table-responsive  mb-2">
                <table class="table table-bordered table-custom submit_define" >
                   @if(!empty($ent->business_minimum_viable_product))
                   @php echo html_entity_decode($ent->business_minimum_viable_product) @endphp
                    @else<thead>
                        <tr >
                            <th align="center" >Objectives</th>
                            <th class="font-big">How specifically does your minimum viable business product meet this objective?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- tr -->
                        <tr>
                            <td id="table-custom__id" class="font-big">Value: Provides consistent value to end user</td>
                            <td class="font-big " contenteditable="true"></td>
                        </tr><!--End tr -->
                        <!-- tr -->
                        <tr>
                            <td id="table-custom__id" class="font-big">Pay: Prove that the economic buyer will pay something for the product placement</td>
                            <td class="font-big" contenteditable="true"></td>
                        </tr><!--End tr -->
                        <!-- tr -->
                        <tr class="font-big">
                            <td id="table-custom__id" class="font-big">Feedback: Creates meaningful feedback loop with customer (end user, economic buyer and champion)</td>
                            <td class="font-big" contenteditable="true"></td>
                        </tr><!--End tr -->
     
                    </tbody>
                    @endif
                </table>
            <button type="button" id="submit_define" class="btn btn-success mt-2 float-right">Save</button>
            </div>

            <label> High-level Product Specifications (100-400 Words) <label class="text-danger h5">*</label></label>
            <textarea id="mymce14" name="high-level_product">{{$ent->high_level_product_specifications}}</textarea>
            <span id="character_count14" class="float-right"></span><br>
            <button class="btn btn-success float-right mt-2 mb-2 " id="product_specifications">Save</button><br>

            <label> Why the customers need your product/service and why they have to pay for it? (100-400 Words) <label class="text-danger h5 mt-2">*</label></label>
            <textarea id="mymce15" name="product_need ">{{$ent->product_needs}}</textarea>
            <span id="character_count15" class="float-right"></span><br>
            <button class="btn btn-success float-right mt-2 mb-2" id="product_need">Save</button>

            <label> Develop a Product Plan <label class="text-danger h5 mt-2">*</label></label>
            <div class="table-responsive mb-5">
              <table class="table table-bordered table-custom product_plan_table">

                @if(!empty($ent->develop_product_plan))
                @php echo html_entity_decode($ent->develop_product_plan); @endphp 
                @else
                <thead>
                    <tr>
                        <th id="table-custom__id">#</th>
                        <th>Feature/ Function</th>
                        <th>Benefit</th>
                        <th>For whom?  End user, economic buyer</th>
                        <th>Hoe does it leverage your core?</th>
                        <th>Priority</th>
                        <th>Estimated resources</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tr -->
                    <tr>
                        <td id="table-custom__id">1</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr><!--End tr -->
                    <!-- tr -->
                    <tr>
                        <td id="table-custom__id">2</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr><!--End tr -->
                    <!-- tr -->
                    <tr>
                        <td id="table-custom__id">3</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr><!--End tr -->
                    <!-- tr -->
                    <tr>
                        <td id="table-custom__id">4</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr><!--End tr -->
                </tbody>
                @endif
                 
                
            </table>
            <button class="btn btn-success float-right mt-3" id="product_plan_btn" >Save</button>
            </div>
            <label >Full Life Cycle User Case <label class="text-danger h5" >*</label></label>                                                                                      
                
            <div class="table-responsive ">
                <table class="table table-bordered  life_cycle">
                    @if(empty($market[0]->full_life_cycle_user_case))
                    <thead>
                        <tr>
                            <th>Stage#</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                        </tr>
                         <!-- tr -->
                    </thead>
                    <tbody>
                        <tr >
                            <th>Action</th>
                            <th>How do they determine need, and what is their catalyst to take action?</th>
                            <th>How do they find out about their options?</th>
                            <th>How do they analyze their options?</th>
                            <th>How do they acquire your products?</th>
                            <th>How do they pay for your products?</th>
                            <th>How they install or set up your products?</th>
                            <th>How do they use and get value out of your products?</th>
                            <th>How to they determine the value they gain from your products?</th>
                            <th>How do they buy more of your products?</th>
                            <th>How do they tell others about your products?</th>
                        </tr><!--End tr -->
                        <!-- tr -->
                        <tr>
                            <th>Who is involved</th>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                           
                        </tr><!--End tr -->
                        <!-- tr -->
                        <tr>
                            <th>When</th>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>

                        </tr><!--End tr -->
                        <!-- tr -->
                        <tr>
                            <th>Where</th>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>


                        </tr><!--End tr -->
                        <tr>
                            <th>How</th>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>
                            <td contenteditable="true"></td>

                        </tr><!--End tr -->
                    </tbody>
                    @else  @php echo html_entity_decode($market[0]->full_life_cycle_user_case) @endphp
                    @endif
                </table>
            </div>
            <button class="btn btn-success float-right mt-2" id="life_cycle_btn">Save</button>

           </div>
        </div>    
     
          <button class="btn btn-success float-right mt-3" id="product_need_btn" >Next</button>
        </div>
  </div>






{{-- elaveator pitch and busniess model convas --}}
      <div class="tab-pane justify-content-center p-20" id="messages10" role="tabpanel" style="padding:40px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group " style="margin-top:10px;" >
                    <label >Elevator Pitch (Please define your business in 100-400 words) <label class="text-danger h5">*</label></label>
                        <textarea  name="elavator_picth"  id="mymce1" >{{$ent->elavator_picth}}</textarea>
                        <span id="character_count" class="float-right"></span> <br>
                            <small class="text-danger ml-1 elavetor_error"></small>
                            <button type="button" id="elavtor_submit" class="btn btn-success float-right">Save</button>

                        </div>
                </div>
            </div> 
        </div>
        <div class="container mt-2 p-4 bus">
            <label>Business Model Canvas <label class="text-danger h5">*</label></label>
                 <div class="row salaam pl-3 pr-3">
                   <div class="col-md-2 pr-1 p-0">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                      data-data1="Key_Partners" data-data="Key Partners" data-toggle="modal" data-target="#myModal">1. Key Partners
                    <i class="mdi mdi-lead-pencil float-right"></i></div>

                     <div class="bg-light p-4" style="height:27em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Key_Partners)@endphp</div>

                   </div>
                   <div class="col-md-3 pr-1 p-0 ">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                     data-toggle="modal" data-target="#myModal" data-data="Key Activities" data-data1="Key_Activities">2. Key Activities <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Key_Activities)@endphp</div>
                     <!--  -->
                    <div class="btn btn-success form-control  pt-2 pb-2 mb-1 text-center model-text data"  data-toggle="modal" data-target="#myModal" data-data="Key Resources" data-data1="Key_Resources" >6. Key Resources
                    <i class="mdi mdi-lead-pencil float-right"></i></div>
                    <div class="bg-light p-4" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Key_Resources)@endphp</div> 

                   </div>
                   <div class="col-md-2 p-0 pr-1">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                      data-toggle="modal" data-target="#myModal" data-data="Value Propositions" data-data1="Value_Propositions" >3. Value Propositions
                    <i class="mdi mdi-lead-pencil float-right"></i></div>
                    <div class="bg-light p-4" style="height:27em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Value_Propositions)@endphp</div> 
                     <!--  -->
                    
                   </div>
                   <div class="col-md-3  pr-1 p-0">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data" 
                     data-data="Customer Relationships" data-data1="Customer_Relationships" data-toggle="modal" 
                     data-target="#myModal">4. Customer Relationships
                     <i class="mdi mdi-lead-pencil float-right"></i></div>
                       <div class="bg-light p-4" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Customer_Relationships)@endphp</div> 
         
                      <!--  -->
                       <div class="btn btn-success form-control pl-1 pt-2 pb-2 mb-1 text-center data model-text"
                        data-data="Channels" data-data1="Channels" data-toggle="modal" data-target="#myModal">7. Channels
                      <i class="mdi mdi-lead-pencil float-right"></i></div>
                       <div class="bg-light p-4" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Channels)@endphp</div> 


                   </div>
                     <div class="col-md-2  pr-1 p-0">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                     data-data="Customer Segments" data-data1="Customer_Segments" data-toggle="modal" data-target="#myModal" >5. Customer Segments <i class="mdi mdi-lead-pencil float-right"></i></div>
                       <div class="bg-light p-4" style="height:27em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Customer_Segments)@endphp</div> 
                  
                   </div>
                 </div>   
                 <div class="row pl-3 pr-3">
                   <div class="col-md-6 " style="padding:0px 0px">
                      <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                      data-data="Cost Structure" data-data1="Cost_Structure"  data-toggle="modal" data-target="#myModal">8. Cost Structure <i class="mdi mdi-lead-pencil float-right"></i></div>
                       <div class="bg-light p-5" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Cost_Structure)@endphp</div> 
                   </div>
                   <div class="col-md-6 " style="padding:0px 5px">
                       <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text data"
                       data-data="Revenue Streams" data-data1="Revenue_Streams"  data-toggle="modal" data-target="#myModal" >9. Revenue Streams <i class="mdi mdi-lead-pencil float-right"></i></div>
                       <div class="bg-light p-5" style="height:12em;overflow-y:scroll">@php echo html_entity_decode($model[0]->Revenue_Streams)@endphp</div> 
                   </div>
                   
                 </div>
                   <button type="button" id="elavtor_submits_btn" class="btn btn-success float-right mt-3">Next</button>

          </div>
      
        </div>





         <div class="tab-pane p-20" id="messages3" role="tabpanel" style="padding:40px">
          <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <table class="table total_table " style="margin-bottom:60px;">
                             <tr>
                                    @php $total_intial=$intial_total+$raised_total;
                                    $annual_operation=$operation_total*12;
                                    $annual_revenue=$total_revenue*12;
                                    @endphp
                                 <td class="font-weight-bold">Total Investment</td>
                                 <td>$ {{ number_format($total_intial, 2, '.', ',')}}</td>
                             </tr>
                             <tr>
                                 <td class="font-weight-bold"> Annual Operation Cost</td>
                                 <td>$ {{ number_format($annual_operation, 2, '.', ',')}}</td>
                             </tr>

                             <tr>
                                 <td class="font-weight-bold">First Year Annual Revenue</td>
                                 @php $Ftotal=$finance[0]->f_number_of_products_sold*$finance[0]->f_price_per_sale_unit @endphp
                                 <td>$ {{ number_format($Ftotal, 2, '.', ',')}}</td>
                             </tr>

                             <tr>
                                 <td class="font-weight-bold"> Second Year Annual Revenue</td>
                                  @php $stotal=$finance[0]->s_number_of_products_sold*$finance[0]->s_price_per_sale_unit @endphp   
                                 <td>$ {{ number_format($stotal, 2, '.', ',')}}</td>
                             </tr>

                             <tr>
                                 <td class="font-weight-bold">Third Year Annual Revenue</td>
                                 @php $ttotal=$finance[0]->t_number_of_products_sold*$finance[0]->t_price_per_sale_unit @endphp   
                                 <td>$ {{ number_format($ttotal, 2, '.', ',')}}</td>
                             </tr>
                         </table>
                     </div>



                     <div class="col-md-7">
                         <div id="accordion">
                             <div class="card">
                                 <div class="card-header" id="headingOne">
                                     <h5 class="mb-0">
                                         <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                 aria-expanded="true" aria-controls="collapseOne">
                                             <h6>Initial Investment <label class="text-danger h5">*</label></h6>
                                         </button>
                                     </h5>
                                 </div>
                                 <form action="" method="post" id="intial_invest_form">
   
                                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                         <div class="card-body">
                                             <div class="row mt-2">
                                                 <div class="col-md-4">
                                                     <label >Payroll Cost</label>
                                                 </div>

                                                 <div class="col-md-8">
                                                       <div class="position-relative icon-form-control mb-2">
                                                            <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                           <input  class="form-control" placeholder="Insert payroll cost"
                                                             pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency"  id="intial_payroll"
                                                             @if(!empty($finance[0]->intial_payroll)) value="{{number_format($finance[0]->intial_payroll, 2, '.', ',')}}"@endif required>
                                                         </div>

                                                     {!!$errors->first('intial_payroll', '<small class="text-danger ml-2">:message</small>')!!}
                                                 </div>

                                             </div>

                                             <div class="row mt-2">
                                                 <div class="col-md-4">
                                                     <label >Operation Cost <label class="text-danger h5">*</label></label>
                                                 </div>
                                                 <div class="col-md-8">
                                                     <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                           <input  class="form-control txt" placeholder="Insert operation cost"
                                                           pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  id="intial_operation_cost" data-type="currency" id="operation_cost"   @if(!empty($finance[0]->intial_operation_cost))value="{{ number_format($finance[0]->intial_operation_cost, 2, '.', ',')}}"@endif  required>
                                                       </div>

                                                     {!!$errors->first('intial_operation_cost', '<small class="text-danger ml-2">:message</small>')!!}
                                                 </div>
                                             </div>

                                             <div class="row mt-2">
                                                 <div class="col-md-4">
                                                     <label >Technology Cost</label>
                                                 </div>
                                                 <div class="col-md-8">
                                                     <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                            <input class="form-control" placeholder="Insert technology cost"
                                                            pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  id="intial_technology" data-type="currency"  required  @if(!empty($finance[0]->intial_technology))value="{{number_format($finance[0]->intial_technology, 2, '.', ',')}}" @endif >
                                                       </div> 


                                                     {!!$errors->first('intial_technology', '<small class="text-danger ml-2">:message</small>')!!}

                                                 </div>
                                             </div>

                                             <div class="row mt-2">
                                                 <div class="col-md-4">
                                                     <label >Machinery Cost</label>
                                                 </div>
                                                 <div class="col-md-8">
                                                     <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                       <input class="form-control" placeholder="Insert machinery cost"
                                                            pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="intial_machinery" required  @if(!empty($finance[0]->intial_machinery))value="{{number_format($finance[0]->intial_machinery, 2, '.', ',')}}" @endif data-type="currency" id="Machinery" >
                                                       </div> 

                                                     {!!$errors->first('intial_machinery', '<small class="text-danger ml-2">:message</small>')!!}

                                                 </div>
                                             </div>

                                             <div class="row mt-2">
                                                 <div class="col-md-4">
                                                     <label >Online Presence Cost </label>
                                                 </div>
                                                 <div class="col-md-8">
                                                      <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                      <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  placeholder="Insert online presence cost"  data-type="currency" class="form-control" id="intial_online_presence"
                                                            @if(!empty($finance[0]->intial_online_presence))value="{{number_format($finance[0]->intial_online_presence, 2, '.', ',')}}" @endif >
                                                       </div> 

                                                     {!!$errors->first('intial_online_presence', '<small class="text-danger ml-2">:message</small>')!!}
                                                 </div>
                                             </div>


                                             <label>Other</label><input type="checkbox"  class="itial_other_check ml-2">
                                             <div class="others_of_itial" >
                                                 <div class="row mt-2">
                                                     <div class="col-md-4">
                                                         <small>Name</small>
                                                         <input type="text" id="first_amount_name" class="form-control"
                                                                value="{{$finance[0]->other_name1}}">
                                                     </div>

                                                     <div class="col-md-8">
                                                         <small>Amount</small>
                                                         <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                           <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" @if(!empty($finance[0]->intial_other1))value="{{number_format($finance[0]->intial_other1, 2, '.', ',')}}" @endif  data-type="currency" class="form-control" id="first_amount">
                                                       </div> 

                                                     </div>
                                                 </div>

                                                 <div class="row mt-2">
                                                     <div class="col-md-4">
                                                         <input type="text" id="second_amount_name" class="form-control" value="{{$finance[0]->other_name2}}">
                                                     </div>
                                                     <div class="col-md-8">
                                             
                                                       <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                         <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" @if(!empty($finance[0]->intial_other2)) value="{{number_format($finance[0]->intial_other2, 2, '.', ',')}}" @endif data-type="currency"class="form-control"  id="second_amount">
                                                       </div> 
 
                                                     </div>
                                                 </div>


                                                 <div class="row mt-2">
                                                     <div class="col-md-4">
                                                         <input type="text" class="form-control" id="third_amount_name" value="{{$finance[0]->other_name3}}">
                                                     </div>
                                                     <div class="col-md-8">

                                                       <div class="position-relative icon-form-control mb-2">
                                                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                         <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" class="form-control"
                                                                id="third_amount"  @if(!empty($finance[0]->intial_other3))value="{{number_format($finance[0]->intial_other3, 2, '.', ',')}}" @endif>
                                                       </div> 
        
                                                     </div>
                                                 </div>

                                             </div>
                                         </div>
                                       <button type="submit" class="btn btn-success float-right mt-2 mb-2" id="intial_invest">Save Amounts</button>
                                     </div>
                                 </form>
                             </div>



                     <div class="card">
                         <div class="card-header" id="headingThree">
                             <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     <h6>Operation Cost <label class="text-danger h5">*</label></h6>
                                 </button>
                             </h5>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                             <div class="card-body">
                                 <form action="" method="post" id="operation_cost_form">
                                     
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Payroll Cost</label>
                                         </div>
                                         <div class="col-md-8">
                                           
                                            <div class="position-relative icon-form-control mb-2">
                                              <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                <input  class="form-control" placeholder="Insert monthly payroll cost"
                                                 pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" id="operation_payroll"
                                                 @if(!empty($finance[0]->operation_payroll)) value="{{number_format($finance[0]->operation_payroll, 2, '.', ',')}}" @endif  required>
                                             </div> 
                                                          
                                             {!!$errors->first('operation_payroll', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Operation Cost</label>
                                         </div>
                                         <div class="col-md-8">
                                        
                                           <div class="position-relative icon-form-control mb-2">
                                              <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                               <input  class="form-control txt" placeholder="Insert monthly operation cost"
                                                     pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" id="operation_cost"
                                                     @if(!empty($finance[0]->operation_operation_cost))value="{{number_format($finance[0]->operation_operation_cost, 2, '.', ',')}}"@endif required>
                                             </div> 
                                             {!!$errors->first('operation_cost', '<small class="text-danger ml-2">:message</small>')!!}


                                         </div>
                                     </div>
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Technology Cost</label>
                                         </div>
                                         <div class="col-md-8">

                                           <div class="position-relative icon-form-control mb-2">
                                              <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                <input class="form-control" placeholder="Insert monthly technology cost"
                                                    pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="technology" data-type="currency"
                                                    @if(!empty($finance[0]->operation_technology)) value="{{number_format($finance[0]->operation_technology, 2, '.', ',')}}" @endif required>
                                             </div>       
                                             {!!$errors->first('technology', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Machinery Cost</label>
                                         </div>
                                         <div class="col-md-8">
                                           <div class="position-relative icon-form-control mb-2">
                                              <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                <input class="form-control" placeholder="Insert monthly machinery cost"
                                                    pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" id="machinery"
                                                    @if(!empty($finance[0]->operation_machinery))value="{{number_format($finance[0]->operation_machinery, 2, '.', ',')}}" @endif required>  
                                             </div>  

                                             {!!$errors->first('machinery', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label>Marketing Cost</label>
                                         </div>
                                         <div class="col-md-8">
                                        <div class="position-relative icon-form-control mb-2">
                                              <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                  <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  placeholder="Insert monthly marketing cost"  data-type="currency" id="marketing" class="form-control"
                                                    @if(!empty($finance[0]->operation_marketing)) value="{{number_format($finance[0]->operation_marketing, 2, '.', ',')}}"@endif required>
                                             </div>  

                                             {!!$errors->first('marketing', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <label>Other</label><input type="checkbox"  class="itial_other_check1 ml-2">
                                     <div class="others_of_itial1" >
                                         <div class="row mt-2">
                                             <div class="col-md-4">
                                                 <small>Name</small>
                                                 <input type="text" id="amount_name_first" class="form-control"
                                                        value="{{$finance[0]->other_name4}}">
                                             </div>
                                             <div class="col-md-8">
                                                 <small>Amount</small>
                                                 <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                          <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" class="form-control" id="amount_first" @if(!empty($finance[0]->operation_other1)) value="{{number_format($finance[0]->operation_other1, 2, '.', ',')}}"@endif>
                                                  </div>  
                                             

                                             

                                             </div>
                                         </div>

                                         <div class="row mt-2">
                                             <div class="col-md-4">
                                                 <input type="text" class="form-control" id="amount_name_second"
                                                        value="{{$finance[0]->other_name5}}">
                                             </div>
                                             <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                        <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="amount_second" data-type="currency"class="form-control" @if(!empty($finance[0]->operation_other2)) value="{{number_format($finance[0]->operation_other2, 2, '.', ',')}}" @endif>
                                                </div>  
                                             

                                             </div>
                                         </div>
                                         <div class="row mt-2">
                                             <div class="col-md-4">
                                                 <input type="text" class="form-control" id="amount_name_third"
                                                        value="{{$finance[0]->other_name6}}">
                                             </div>
                                             <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                        <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency"
                                                         id="amount_third" class="form-control"  @if(!empty($finance[0]->operation_other3))value="{{number_format($finance[0]->operation_other3, 2, '.', ',')}}" @endif>
                                                </div>  
                                             

                                             
                                             </div>
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-success float-right mt-2 mb-2" id="operation_cost_btn">Save Amounts</button>
                                 </form>
                             </div>
                         </div>


                     <div class="card">
                         <div class="card-header" id="headingTwo">
                             <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                     <h6>Annual Revenue <label class="text-danger h5">*</label></h6>
                                 </button>
                             </h5>
                         </div>
                         <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                             <div class="card-body">
                                 <form action="" method="post" id="revenue_form">
                    

                                     <div class="row">
                                      <div class="col-md-12">
                                       <h5>First Year</h5>      
                                     </div>
                                    </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of Products Sold</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number"  class="form-control txt" placeholder="Number of Products Sold"
                                                    id="f_number_of_products_sold" min="1" value="{{$finance[0]->f_number_of_products_sold}}" required>
                                             {!!$errors->first('f_number_of_products_sold', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Price Per Sale Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                        
                                          <div class="position-relative icon-form-control mb-2">
                                                <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                     <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                                     data-type="currency" id="f_price_per_sale_unit"
                                                     @if(!empty($finance[0]->f_price_per_sale_unit))value="{{number_format($finance[0]->f_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                            </div>  
                                         {!!$errors->first('f_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of customers the products sold to.</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number" min="1"  class="form-control txt" placeholder="Number of customers the products sold to."
                                                    id="f_number_of_customers"  required value="{{$finance[0]->f_number_of_customers}}">
                                             {!!$errors->first('f_number_of_customers', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row">
                                      <div class="col-md-12">
                                       <h5>Second Year</h5>      
                                     </div>
                                    </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of Products Sold</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number"  class="form-control txt" placeholder="Number of Products Sold"
                                                    id="s_number_of_products_sold" min="1" value="{{$finance[0]->s_number_of_products_sold}}" required>
                                             {!!$errors->first('s_number_of_products_sold', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Price Per Sale Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                        
                                          <div class="position-relative icon-form-control mb-2">
                                                <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                     <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                                     data-type="currency" id="s_price_per_sale_unit"
                                                     @if(!empty($finance[0]->s_price_per_sale_unit))value="{{number_format($finance[0]->s_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                            </div>  
                                         {!!$errors->first('s_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of customers the products sold to.</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number" min="1"  class="form-control txt" placeholder="Number of customers the products sold to."
                                                    id="s_number_of_customers"  required value="{{$finance[0]->s_number_of_customers}}">
                                             {!!$errors->first('s_number_of_customers', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>




                                     <div class="row">
                                      <div class="col-md-12">
                                       <h5>Third Year</h5>      
                                     </div>
                                    </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of Products Sold</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number"  class="form-control txt" placeholder="Number of Products Sold"
                                                    id="t_number_of_products_sold" min="1" value="{{$finance[0]->t_number_of_products_sold}}" required>
                                             {!!$errors->first('t_number_of_products_sold', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Price Per Sale Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                        
                                          <div class="position-relative icon-form-control mb-2">
                                                <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                     <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                                     data-type="currency" id="t_price_per_sale_unit"
                                                     @if(!empty($finance[0]->t_price_per_sale_unit))value="{{number_format($finance[0]->t_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                            </div>  
                                         {!!$errors->first('t_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Number of customers the products sold to.</label>
                                         </div>
                                         <div class="col-md-8">
                                             <input type="number" min="1"  class="form-control txt" placeholder="Number of customers the products sold to."
                                                    id="t_number_of_customers"  required value="{{$finance[0]->t_number_of_customers}}">
                                             {!!$errors->first('t_number_of_customers', '<small class="text-danger ml-2">:message</small>')!!}

                                         </div>
                                     </div>

                                     <button value="submit"  class="btn btn-success float-right mt-2 mb-2"  id="revenue_btn">Save Amounts</button>
                                 </form>
                             </div>
                         </div>
                     </div>





                     <div class="card">
                         <div class="card-header">
                             <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
                                     <h6> Profitability Analysis <label class="text-danger h5">*</label></h6>
                                 </button>
                             </h5>
                         </div>

                         <div id="collapsefive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                             <div class="card-body">
                                 <form action="" method="post" id="profit_form">
                                     @csrf
                                    <div class="row">
                                      <div class="col-md-12">
                                       <h5>First Year</h5>      
                                     </div>
                                    </div>
                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <p >Fixed Cost Per Unit</p>
                                         </div>
                                         <div class="col-md-8">
                                             <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                    <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                       placeholder="Fixed Cost Per Unit "  data-type="currency" id="f_fixed_cost_per_unit"
                                                       @if(!empty($finance[0]->f_fixed_cost_per_unit))value="{{number_format($finance[0]->f_fixed_cost_per_unit, 2, '.', ',')}}" @endif required>
                                                </div>  

                                             {!!$errors->first('f_fixed_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>

                                      </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Variable Cost Per Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                  <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Variable Cost Per Unit"  data-type="currency" id="f_variable_cost_per_unit"
                                                     @if(!empty($finance[0]->f_variable_cost_per_unit))value="{{number_format($finance[0]->f_variable_cost_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>  

                                             {!!$errors->first('f_variable_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>


                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label>Profit Margin Per Unit</label>
                                         </div>

                                           <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                       <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Profit Margin Per Unit"  data-type="currency" id="f_profit_margin_per_unit"
                                                     @if(!empty($finance[0]->f_profit_margin_per_unit))value="{{number_format($finance[0]->f_profit_margin_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>                                            
                                             {!!$errors->first('f_profit_margin_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>

                                


                                      <div class="row">
                                      <div class="col-md-12">
                                       <h5>Second Year</h5>      
                                     </div>
                                    </div>
                     
                                    <div class="row mt-2">
                                         <div class="col-md-4">
                                             <p >Fixed Cost Per Unit</p>
                                         </div>
                                         <div class="col-md-8">
                                             <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                    <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                       placeholder="Fixed Cost Per Unit "  data-type="currency"
                                                        id="s_fixed_cost_per_unit"
                                                       @if(!empty($finance[0]->s_fixed_cost_per_unit))value="{{number_format($finance[0]->s_fixed_cost_per_unit, 2, '.', ',')}}" @endif required>
                                                </div>  

                                             {!!$errors->first('s_fixed_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>

                                      </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Variable Cost Per Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                  <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Variable Cost Per Unit"  data-type="currency" 
                                                     id="s_variable_cost_per_unit"
                                                     @if(!empty($finance[0]->s_variable_cost_per_unit))value="{{number_format($finance[0]->s_variable_cost_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>  

                                             {!!$errors->first('s_variable_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>


                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label>Profit Margin Per Unit</label>
                                         </div>

                                           <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                       <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Profit Margin Per Unit"  data-type="currency" id="s_profit_margin_per_unit"
                                                     @if(!empty($finance[0]->s_profit_margin_per_unit))value="{{number_format($finance[0]->s_profit_margin_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>                                            
                                             {!!$errors->first('s_profit_margin_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>

                                 
                                    <div class="row">
                                      <div class="col-md-12">
                                       <h5>Third Year</h5>      
                                     </div>
                                    </div>
                                    

                                   <div class="row mt-2">
                                         <div class="col-md-4">
                                             <p >Fixed Cost Per Unit</p>
                                         </div>
                                         <div class="col-md-8">
                                             <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                    <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                       placeholder="Fixed Cost Per Unit "  data-type="currency" id="t_fixed_cost_per_unit"
                                                       @if(!empty($finance[0]->t_fixed_cost_per_unit))value="{{number_format($finance[0]->t_fixed_cost_per_unit, 2, '.', ',')}}" @endif required>
                                                </div>  

                                             {!!$errors->first('t_fixed_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>

                                      </div>

                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label >Variable Cost Per Unit</label>
                                         </div>
                                         <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                  <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Variable Cost Per Unit"  data-type="currency" id="t_variable_cost_per_unit"
                                                     @if(!empty($finance[0]->t_variable_cost_per_unit))value="{{number_format($finance[0]->t_variable_cost_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>  

                                             {!!$errors->first('t_variable_cost_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>


                                     <div class="row mt-2">
                                         <div class="col-md-4">
                                             <label>Profit Margin Per Unit</label>
                                         </div>

                                           <div class="col-md-8">
                                              <div class="position-relative icon-form-control mb-2">
                                                    <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                                       <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"
                                                     placeholder="Profit Margin Per Unit"  data-type="currency" id="t_profit_margin_per_unit"
                                                     @if(!empty($finance[0]->t_profit_margin_per_unit))value="{{number_format($finance[0]->t_profit_margin_per_unit, 2, '.', ',')}}" @endif required>
                                               </div>                                            
                                             {!!$errors->first('t_profit_margin_per_unit', '<small class="text-danger ml-2">:message</small>')!!}
                                         </div>
                                     </div>

                                     <button  type="submit" class="btn btn-success float-right mt-2 mb-2" id="profit_btn">Save Amounts</button>
                                 </form>

                             </div>
                         </div>

                     </div>
                 </div>
             </div>
             </div>
         </div>
         <button type="button"  id="finance" class="btn btn-success float-right">Next</button>
       </div>
 </div>
{{-- end of fincance--}}










{{-- busniess trends--}}
   <div class="tab-pane p-5" id="messages11" role="tabpanel" style="padding:40px">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-md-12">
                         <label>Business Trends (Considering your business nature, please answer the below questions, if they are favorable or unfavorable for your business)<label class="text-danger h5">*</label></label>
    
                       <div class="table-responsive">
                         @if(empty($busniess_trends[0]->busniess_trends))

                                 <table class="table  table-bordered table-custom trends_table">
                                     <thead>
                                     <tr align="center">
                                         <th  rowspan="2" style="vertical-align:baseline" class="font-weight-bold"> Impact</th>
                                         <th colspan="5" class="font-weight-bold">Trends</th>
                                     </tr>
                                     <tr>
                                         <th class="font-weight-bold"> {{'Social'}}</th>
                                         <th class="font-weight-bold">{{'Political'}}</th>
                                         <th class="font-weight-bold">{{'Security'}}</th>
                                         <th class="font-weight-bold">{{'Technological'}}</th>
                                         <th class="font-weight-bold">{{'Economical'}}</th>
                                     </tr>
                                     </thead>
                                     <tbody>
   
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">Favourable</th>
                                        <td contenteditable="true"   placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>

                                    </tr><!--End tr -->
                                    <!-- tr -->
                                    <tr>
                                        <th id="table-custom__id">Unfavourable</th>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>

                                    </tr><!--End tr -->
                                     <tr>
                                        <th id="table-custom__id">Further Analsis</th>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>
                                        <td contenteditable="true" placeholder="Insert Text"></td>

                                    </tr><!--End tr -->
                               
                                     </tbody>
                                 </table>
                                
                           @else
                                 <table class="table  table-bordered table-custom trends_table">
                                  @php echo html_entity_decode($busniess_trends[0]->busniess_trends)@endphp
                                  </table>      
                             @endif
                     </div>
                        <button type="button" id="bsniess__trends_submit" class="float-right btn btn-success mt-3" >Save</button>

                 </div>
             </div>



     <div class="row mt-5 justify-content-center">
                 <div class="col-md-12" >
                    <label> Risk Analysis  (Considering your business nature, please specify the risks, their type, severity and your counter strategy)<label class="text-danger h5">*</label></label>  

                    @if(empty($ent->risk_analysis))
                            <table class="table table-bordered  table-sm table_1 risk ">
                             <thead>
                             <tr id="table-custom__id">
                                <th style="text-align:center" class="font-weight-bold" title=" Please write the category of the risk" data-toggle="tooltip">Define the Risk</th>
                                <th style="text-align:center" class="font-weight-bold" title=" Please write the name of the risk here" data-toggle="tooltip">Risk Name</th>
                                <th style="text-align:center" class="font-weight-bold" title="Rate the effect of the risk. Select the red box in case of high severity, yellow for medium severity and green for low severity. " data-toggle="tooltip">Severity</th>
                                <th style="text-align:center" class="font-weight-bold" title="Please write down your counter strategy if the risk occurs for your business." data-toggle="tooltip">Counter Strategy</th>
                             </tr>
                             </thead>
                          
                          
                             <tr>
                                 <td  contenteditable="true" placeholder="Insert Text" style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>
                                 <td  contenteditable="true" placeholder="Insert Text" style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>

                                 <td height="10" width="10">
                                     <table>
                                         <tr>
                                             <td  bgcolor="yellow" width="16" height="16" class="d" style="padding:0" ></td>
                                             <td bgcolor="red"width="16" height="16" class="d" style="padding:0"></td>
                                             <td bgcolor="red" width="16" height="16"class="d" style="padding:0"></td>
                                         </tr>
                                         <tr>
                                             <td  bgcolor="green" width="16" height="16" class="d" style="padding:0"></td>
                                             <td bgcolor="yellow"width="16" height="16" class="d" style="padding:0"></td>
                                             <td bgcolor="red" width="16" height="16" class="d" style="padding:0"></td>
                                         </tr>
                                         <tr>
                                             <td  bgcolor="green" width="10" height="10" class="d" style="padding:0"></td>
                                             <td bgcolor="green"width="16" height="16" class="d" style="padding:0"></td>
                                             <td bgcolor="yellow" width="16" height="16" class="d" style="padding:0"></td>
                                         </tr>
                                     </table>
                                 </td>
                                 <td  contenteditable="true" placeholder="Insert Text" style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>
                             </tr>
                             <!--  -->
                             <tr>
                                 <td  contenteditable="true"  placeholder="Insert Text"style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>
                                 <td  contenteditable="true" placeholder="Insert Text" style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>

                                 <td height="10" width="10">
                                     <table>
                                         <tr>
                                             <td  bgcolor="yellow" width="16" height="16" class="e" style="padding:0" ></td>
                                             <td bgcolor="red"width="16" height="16" class="e" style="padding:0"></td>
                                             <td bgcolor="red" width="16" height="16"class="e" style="padding:0"></td>
                                         </tr>
                                         <tr>
                                             <td  bgcolor="green" width="16" height="16" class="e" style="padding:0"></td>
                                             <td bgcolor="yellow"width="16" height="16" class="e" style="padding:0"></td>
                                             <td bgcolor="red" width="16" height="16" class="e" style="padding:0"></td>
                                         </tr>
                                         <tr>
                                             <td  bgcolor="green" width="10" height="10" class="e" style="padding:0"></td>
                                             <td bgcolor="green"width="16" height="16" class="e" style="padding:0"></td>
                                             <td bgcolor="yellow" width="16" height="16" class="e" style="padding:0"></td>
                                         </tr>
                                     </table>
                                 </td>
                                 <td  contenteditable="true" placeholder="Insert Text" style="max-width:100px !important;min-width:50px !important;text-align: start;"></td>
                             </tr>
                             </tbody>
                         </table>


                    @else
                     <table class="table table-bordered table-sm table_1 risk " >
                        @php echo html_entity_decode($ent->risk_analysis)@endphp
                        </table>
                   
                    @endif

                    <button type="button" class="btn btn-success float-right" id="risk_button">Save</button>

                 <!-- Compititors -->
                 <!-- <p  data-toggle="tooltip" data-toggle="tooltip" data-html="true" title=">sadasd></p>> -->
                 <label class="mt-5"> <abbr 
            title="Please list the advantages based on your business industry and your competitors  For each
of the boxes, please select Yes or No based on the advantages and competitors
    a. In the horizontal lines (Please list the existing advantages within your business industry)
    b. In the vertical boxes (Please list your competitors by writing their names)">Competitive Advantages</abbr> <label class="text-danger h5">*</label></label>
                  <div  class="table-responsive " id="compat">
                              <table class="table table-bordered " id="competitive">
                                  <thead>
                                  <tr>
                                      <th width="1" rowspan="3" class="font-weight-bold"> Compititors</th>
                                      <th colspan="10" style="text-align:center" class="font-weight-bold">Advantages</th>
                                  </tr>
                                  <tr>
                                      <th contenteditable="true" id="advan_1" placeholder="Advantages 1">@php echo html_entity_decode($compititive[0]->advan_1) @endphp</th>
                                      <th contenteditable="true" id="advan_2" placeholder="Advantages 2">@php echo html_entity_decode($compititive[0]->advan_2) @endphp</th>
                                      <th contenteditable="true" id="advan_3" placeholder="Advantages 3">@php echo html_entity_decode($compititive[0]->advan_3) @endphp</th>
                                      <th contenteditable="true" id="advan_4" placeholder="Advantages 4">@php echo html_entity_decode($compititive[0]->advan_4) @endphp</th>
                                      <th contenteditable="true" id="advan_5" placeholder="Advantages 5">@php echo html_entity_decode($compititive[0]->advan_5) @endphp</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_1" placeholder="Compititor 1">@php echo html_entity_decode($compititive[0]->comp_1) @endphp</td>
                                      <td class="pt-3-half">
                                          <select  id="ad_1">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_1=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_1=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  id="ad_2">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_2=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_2=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  id="ad_3">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_3=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_3=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_4">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_4=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_4=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  id="ad_5">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_5=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_5=="No") selected @endif>No</option>
                                          </select>

                                      </td>
                                  </tr>

                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_2" placeholder="Compititor 2">@php echo html_entity_decode($compititive[0]->comp_2) @endphp</td>
                                      <td class="pt-3-half">
                                          <select   id="ad_6">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_6=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_6=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_7">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_7=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_7=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_8">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_8=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_8=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_9">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_9=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_9=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_10">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_10=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_10=="No") selected @endif>No</option>
                                          </select>
                                      </td>



                                  </tr>
                                  <!-- This is our clonable table line -->
                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_3" placeholder="Compititor 3">@php echo html_entity_decode($compititive[0]->comp_3) @endphp</td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_11">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_11=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_11=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_12">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_12=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_12=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_13">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_13=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_13=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_14">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_14=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_14=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_15">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_15=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_15=="No") selected @endif>No</option>
                                          </select>
                                      </td>


                                  </tr>
                                  <!-- This is our clonable table line -->
                                  <tr >
                                      <td class="pt-3-half" contenteditable="true" id="comp_4" placeholder="Compititor 4">@php echo html_entity_decode($compititive[0]->comp_4) @endphp</td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_16">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_16=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_16=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  id="ad_17">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_17=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_17=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  id="ad_18">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_18=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_18=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  id="ad_19">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_19=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_19=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  id="ad_20">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_20=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_20=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                  </tr>
                                  <tr >
                                      <td class="pt-3-half" contenteditable="true" id="comp_5" placeholder="Compititor 5">@php echo html_entity_decode($compititive[0]->comp_5) @endphp</td>
                                      <td class="pt-3-half">
                                          <select   id="ad_21">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_21=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_21=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select   id="ad_22">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_22=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_22=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select   id="ad_23">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_23=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_23=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select id="ad_24">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_24=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_24=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select id="ad_25">
                                              <option value="" selected disabled>Select</option>
                                              <option @if($compititive[0]->ad_25=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_25=="No") selected @endif>No</option>
                                          </select>
                                      </td>


                                  </tr>
                                  </tbody>
                              </table>
                              <button type="button" class="btn btn-success float-right" id="compit">Save</button>

                       </div> 
                 </div>
             
             </div>
              <button class="btn btn-success float-right mt-2" id="compatitive_btn" >Next</button>
            </div>
         </div>

{{-- end of buniess trends--}}



{{-- invest management--}}
<div class="tab-pane p-5" id="messages9" role="tabpanel" style="padding:40px">
             <div class="container"> 
               <div class="row mb-3 justify-content-center">
                      <div class="col-md-12">
                        
                        <div class="form-group">
                          <label class="mb-4"><abbr title="Please specify based on what terms you will accept investment for your business. In this part, you have to clearly mention how you would deal with the investor, how much business shares will you give the investor in exchange for the investment amount?" data-toggle="tooltip"> Define your investment terms </abbr> (100-400 words ) <label class="text-danger h5">*</label></label>
                          <textarea id="mymce11" name="define_your_investment_terms">
                            {{$invest_management[0]->define_your_investment_terms}}</textarea>
                         {!!$errors->first('define_your_investment_terms', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count11" class="float-right"></span><br>
                          <button class="btn btn-success float-right" id="def_investment_btn" >Save</button> 
                        </div><br>

                        <div class="form-group mt-4">
                          <label class="mb-4">Define your plan for management of the received investment amount (100-400 words ) <label class="text-danger h5">*</label></label>
                          <textarea id="mymce12" name="plan_for_management_of__investment">  {{$invest_management[0]->plan_for_management_of__investment}}</textarea>
                         {!!$errors->first('plan_for_management_of__investment', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count12" class="float-right"></span><br>
                           <button class="btn btn-success float-right" id="define_your_plan" >Save</button> 
                        </div><br>

                        <div class="form-group">
                          <label class="mb-4">Breakdown the costs you will use the investment amount for? (100-400 words ) <label class="text-danger h5">*</label></label>
                          <textarea id="mymce13" name="breakdown_the_costs">
                            {{$invest_management[0]->breakdown_the_costs}}</textarea>
                         {!!$errors->first('breakdown_the_costs', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count13" class="float-right"></span>
                        </div><br>
                        <button class="btn btn-success float-right" id="breakdown_btn" >Save</button> 


                    </div>

                    </div> 
                  <input type="button" id="invest_btn" value="Next" class="btn btn-success float-right"  >
                </div>
        </div>
{{-- end of investmengment--}}
{{-- market positioning--}}
             <div class="tab-pane p-20" id="messages6" role="tabpanel" style="padding:40px">
              <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-md-12" > 
                
                      <div>
                        <label class="mb-3">Market Positioning <label class="text-danger h5">*</label></label>
                        <p>Please download the document and prepare the market positioning for your business. In the document, please place your competitors based on their characteristics.</p>
                          <a href="{{url('storage/Extension')}}/{{'Market_Positioning.docx'}}" class="btn btn-success">Download</a> 
                          <p></p>

                        <p class="">Please upload your market positioning document in PDF.</p>
                       <div class="mt-5">
                       <form id="uploadForm7" method="post" enctype="multipart/form-data">
                         @csrf
                           <label class="card-title">Select Market Positioning <label class="text-danger h5">*</label><small>(pdf 2MB)</small></label>
                         <input type="file" id="input-file-now7" name="market_positon_file" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="2M" />
                        </form>
                          <div class="upload7">
                            <div class="d-flex">
                              <div class="col-md-12 " style="padding:0px 0px">
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success seven" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div id="uploadStatus7"></div>
                          </div>
        
                        </div>
                
                    <div class="iframe">
                     @if(!empty($market_position[0]->market_positon_file))
                     <iframe style="margin-top:20px;height:400px;width:100%" id="iframe" http-equiv="refresh" content="1" src="{{(url('storage/app'))}}/{{$market_position[0]->market_positon_file}}"></iframe>
                     @endif
                      </div>

                  <div class="form-group mb-5">
                        
                          <label class="mb-4">The Market Analysis  (Using the information received from market positioning chart, please write your analysis from market positioning in 100-400 words) <label class="text-danger h5">*</label></label>
                            <textarea id="mymce10"  name="the_market">{{$market_position[0]->the_market}} </textarea>
                            <span id="character_count10"class="float-right"></span>
                           {!!$errors->first('the_market', '<small class="text-danger ml-2">:message</small>')!!}<br>
                           <button type="button" class="btn btn-success float-right" id="the_market_btn">Save</button>
                        </div>
                        </div>
                           
        <section class="mt-5">
        <label >Swot Analysis <label class="text-danger h5">*</label></label>
            <div class="table-responsive">
                    <table class="table table-bordered table-swot">
                        <thead class="text-center text-white">
                            <tr class="table-swot__th">
                                <th class="pt-3 pb-3">
                                    <h4>S</h4>
                                    <p>Strength</p>
                                </th>
                                <th class="pt-3 pb-3">
                                    <h4>W</h4>
                                    <p>Weaknesses</p>
                                </th>
                                <th class="pt-3 pb-3">
                                    <h4>O</h4>
                                    <p>opportunities</p>
                                </th>
                                <th class="pt-3 pb-3">
                                    <h4>T</h4>
                                    <p>Threats</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr class="table-swot__td">
                                <td contenteditable="true" id="strength" >
                                 @if(empty($market[0]->swot_analysis_strength))
                                    <ul class="pl-5">
                                        <li>a</li>
                                        <li>b</li>
                                        <li>c</li>
                                        <li>d</li>
                                    </ul>
                                 @else @php echo html_entity_decode($market[0]->swot_analysis_strength) @endphp @endif
                                </td>
                                <td  contenteditable="true" id="weakness">
                                    @if(empty($market[0]->swot_analysis_weaknesses))
                                    <ul class="pl-5">
                                        <li>a</li>
                                        <li>b</li>
                                        <li>c</li>
                                        <li>d</li>
                                    </ul>
                                 @else @php echo html_entity_decode($market[0]->swot_analysis_weaknesses) @endphp @endif
                                </td>
                                <td contenteditable="true" id="opportunities"> 
                                    @if(empty($market[0]->swot_analysis_opportunities))
                                    <ul class="pl-5">
                                        <li>a</li>
                                        <li>b</li>
                                        <li>c</li>
                                        <li>d</li>
                                    </ul>
                                 @else @php echo html_entity_decode($market[0]->swot_analysis_opportunities) @endphp @endif
                                </td>
                                <td contenteditable="true" id="threats">
                                    @if(empty($market[0]->swot_analysis_threats))
                                    <ul class="pl-5">
                                        <li>a</li>
                                        <li>b</li>
                                        <li>c</li>
                                        <li>d</li>
                                    </ul>
                                 @else @php echo html_entity_decode($market[0]->swot_analysis_threats) @endphp @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <button type="button" id="swot_analyze" class="btn btn-success float-right  mt-1">Save</button>
                </section>
               </div>

           </div>
           <button type="button" id="market_next_btn" class="btn btn-success float-right mt-3">Next</button>
          </div>
       </div>
{{--  end of market positioning  --}}
        <div class="tab-pane p-20" id="messages4" role="tabpanel" style="padding:40px">
           <div class="container">
           <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="form-group">
                   <form id="tupdate_form" method="post" enctype="multipart/form-data">
                       @csrf
                       <label class="card-title">Please upload your Tazkira/Passport <small>(pdf 2MB)</small></label> 
                       <input type="file" id="input-file-now33" name="Tazkira/passport" class="dropify" data-allowed-file-extensions="png pdf jpg jpeg" data-max-file-size-preview="2M" />
                       
                        <div class="tupload">
                        <div class="d-flex">
                          <div class="col-md-12" style="padding:0px 0px">
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success t-progress" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div id="tuploadStatus"></div>
                   </div>


                       {!!$errors->first('Tazkira/passport', '<small class="ml-2 text-danger">:message</small>')!!}
                   </form>
               </div>
               </div>
            <div class="col-md-6" >
                <div class="form-group">
                    <form id="uploadForm2" method="post" enctype="multipart/form-data">
                        @csrf
                    <label class="card-title">Business Logo <small>(jpg,jpeg,png  2MB)</small></label>
                    <input type="file" id="input-file-now" name="busniess_logo" class="dropify" data-allowed-file-extensions="png jpg jpeg" data-max-file-size-preview="2M" />

                    {!!$errors->first('busniess_logo', '<small class="ml-2 text-danger">:message</small>')!!}
                </form>
                  <div class="upload2">
                        <div class="d-flex">
                          <div class="col-md-12" style="padding:0px 0px">
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success second" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div id="uploadStatus2"></div>
                   </div>
                </div>
            </div>          
    </div>

    <div class="row">
        <div class="col-md-6">
              <form id="uploadForm3" method="post" enctype="multipart/form-data">
                  @csrf  
                    <div class="form-group">
                      <label class="card-title">Business Plan <small>(pdf 5MB)</small></label>
                      <input type="file" id="input-file-now2" name="busniess_plan" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="5M" />
                      {!!$errors->first('busniess_plan', '<small class="ml-2 text-danger">:message</small>')!!}
                    <div class="upload3">
                        <div class="d-flex">
                          <div class="col-md-12" style="padding:0px 0px">
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success third" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div id="uploadStatus3"></div>
                   </div>
                </div>
            </form>
        </div>
      
        <div class="col-md-6">
            <form id="uploadForm4" method="post" enctype="multipart/form-data">
                @csrf  
                  <div class="form-group">
                          <label class="card-title">Pitch Deck <small>(pdf 5MB)</small></label>
                          <input type="file" id="input-file-now3" name="pitch_deck" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="5M" />
                          
                    <div class="upload4">
                        <div class="d-flex">
                          <div class="col-md-12" style="padding:0px 0px">
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success fourth" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
 
                        </div>
                        <div id="uploadStatus4"></div>
                   </div>

                  </div>
          </form>
      </div>
                            
    </div>

          <div class="row mb-3">
                <div class="col-md-6">
                    <form  id="uploadForm5" method="post" enctype="multipart/form-data">
                        @csrf  
                        <div class="form-group">
                            <label class="card-title">Business License <small>(pdf png jpeg jpg  5MB)</small></label>
                            <input type="file" id="input-file-now4" name="busniess_license" class="dropify" data-allowed-file-extensions="pdf jpg jpeg png" data-max-file-size-preview="5M" />
                           
                                  <div class="upload5">
                                    <div class="d-flex">
                                      <div class="col-md-12" style="padding:0px 0px">
                                        <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success fived" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="uploadStatus5"></div>
                               </div>

                        </div>
                </form>
            </div>


         <div class="col-md-6">
            <div class="form-group">
                <form id="uploadForm6" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="card-title">Corporate Business Profile <small>(pdf 5MB)</small></label>
                    <input type="file" id="input-file-now1" name="Business_profile" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="5M" />
               
                 <div class="upload6">
                    <div class="d-flex">
                      <div class="col-md-12" style="padding:0px 0px">
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success six" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>

                    </div>
                    <div id="uploadStatus6"></div>
               </div>

                    {!!$errors->first('Business_profile', '<small class="ml-2 text-danger">:message</small>')!!}
                </form>
            </div>
        </div>

          </div>   


           @if($ent->admin_status=="Draft")
             <button type="button" id="final_submit" class="btn btn-success float-right ml-1" >Submit</button>
           @endif

          <a href="{{url('ent/sme/profile/')}}"> <button type="button"  class="btn btn-info float-right">Preview</button></a>


           </div> 
          
            </div>
        </div>
    </div>
</div>

<!-- row -->

    <div id="myModal" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="display:inline" class="modal-title" id="myModalLabel"></h4><label class="mt-2"> &nbsp; &nbsp;(Maximum Words 50)</label>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  
                 <div class="form-group">
  
                    <textarea name="buniess_modle" id="mymce2" required></textarea>
                    <input type="hidden" name="bus_hide" id="bus_hide" >
                     <span id="character_count1" class="float-right"></span>
                 </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="busniess_submit" class="btn btn-success" >Save</button>
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@if(session()->get('msg'))
   
<div id="errormodel" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title myModalLabel">Notification</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                 <div class="alert alert-success p-2">
                <h6>Please complete the below-mentioned parts before submitting your application: </h6>

                  <div class="model-content">
               @foreach(session()->get('msg') as $in)
                <ul class="ml-5">
                  <li class="text-black" style="color:black">
                    {{$in}}
                  </li>
                </ul>

               @endforeach
                  </div>
             </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endif  
@endsection

@section('jquery')
  <script src="{{asset('public/assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
  <script src="{{asset('public/page_js/sme.js')}}"></script>
<!--   <script src="{{asset('public/page_js/sme_aj.js')}}"></script>
 -->
<script>

  @if(!empty($ent->logo))
  $("#input-file-now").attr("data-default-file", "{{url('storage/app')}}/{{$ent->logo}}");
  @endif
  @if(!empty($ent->company_profile))
  $("#input-file-now1").attr("data-default-file", "{{url('storage/app')}}/{{$ent->company_profile}}");
  @endif
  @if(!empty($ent->busniess_plan))        
  $("#input-file-now2").attr("data-default-file", "{{url('storage/app')}}/{{$ent->busniess_plan}}");
  @endif
  @if(!empty($ent->pitch_presentation))
  $("#input-file-now3").attr("data-default-file", "{{url('storage/app')}}/{{$ent->pitch_presentation}}");
  @endif
  @if(!empty($ent->busniess_license))
  $("#input-file-now4").attr("data-default-file", "{{url('storage/app')}}/{{$ent->busniess_license}}");
  @endif
   @if(!empty($ent->tazkira))
  $("#input-file-now33").attr("data-default-file", "{{url('storage/app')}}/{{$ent->tazkira}}");
  @endif
  $('.dropify').dropify();
        
  </script> 
@if(session()->get('msg'))
 <script type="text/javascript">
  $('#errormodel').modal('show');
</script>
@endif  

 @if(session()->has('notif'))
    <script>
$.toast({
   heading: '<small>{{session()->get("notif")}}</small>',
  // text: 'Use the predefined ones, or specify a custom position object.',
  position: 'top-right',
  loaderBg:'#28d7aa',
  icon: 'success',
  hideAfter: 4500, 
  stack: 6
});
</script>       
 @endif
  @if(session()->has('error'))
    <script>
$.toast({
   heading: '<small>{{session()->get("error")}}</small>',
  // text: 'Use the predefined ones, or specify a custom position object.',
  position: 'top-right',
  loaderBg:'#28d7aa',
  icon: 'error',
  hideAfter: 4500, 
  stack: 6
});
</script>       
 @endif
 
@if(session()->has('note'))
<script>
  $(document).ready(function(){
     Swal.fire("Good job!", "Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.", "success");
  });
</script>
@endif  
<script>
  // uploading
$(document).ready(function(){
   $(".tupload").css('display','none');  
     $('#input-file-now33').change(function(){
        var allowedTypes = ['application/pdf','image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (JPEG/JPG/PNG/GIF)');
            $("#input-file-now33").val('');
            return false;
        }
        else if(size>2000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now33").val('');
            return false;
        }else{
      $("#tupdate_form").submit();  

        }
    });
    $("#tupdate_form").on('submit', function(e){
     $(".tupload").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".t-progress").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/tazkira/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".t-progress").width('0%');
            },
            error:function(){
                $('#tuploadStatus').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#tupdate_form')[0].reset();
                    $('#tuploadStatus').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#tuploadStatus').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});

$(document).ready(function(){
   $(".upload2").css('display','none');  
     $('#input-file-now').change(function(){
        var allowedTypes = ['application/pdf','image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (JPEG/JPG/PNG/GIF)');
            $("#input-file-now").val('');
            return false;
        }
        else if(size>2000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now").val('');
            return false;
        }else{
      $("#uploadForm2").submit();  

        }
    });
    $("#uploadForm2").on('submit', function(e){
     $(".upload2").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".second").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/busniess_logo/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".second").width('0%');
            },
            error:function(){
                $('#uploadStatus2').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm2')[0].reset();
                    $('#uploadStatus').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus2').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
$(document).ready(function(){
   $(".upload3").css('display','none');  
     $('#input-file-now2').change(function(){
        var allowedTypes = ['application/pdf'];
        var file = this.files[0];

        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (PDF)');
            $("#input-file-now2").val('');
            return false;
        }
        else if(size>5000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now2").val('');
            return false;
        }else{
      $("#uploadForm3").submit();  

        }
    });
    $("#uploadForm3").on('submit', function(e){
     $(".upload3").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".third").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/busniess_plan/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".third").width('0%');
            },
            error:function(){
                $('#uploadStatus3').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                if(resp !== ''){
                    $('#uploadForm3')[0].reset();
                    $('#uploadStatus3').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus3').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
$(document).ready(function(){
   $(".upload4").css('display','none');  
     $('#input-file-now3').change(function(){
        var allowedTypes = ['application/pdf'];
        var file = this.files[0];

        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (PDF)');
            $("#input-file-now3").val('');
            return false;
        }
        else if(size>5000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now3").val('');
            return false;
        }else{
      $("#uploadForm4").submit();  

        }
    });
    $("#uploadForm4").on('submit', function(e){
     $(".upload4").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".fourth").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/pitch_deck/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".fourth").width('0%');
            },
            error:function(){
                $('#uploadStatus4').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm4')[0].reset();
                    $('#uploadStatus4').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus4').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
$(document).ready(function(){
   $(".upload5").css('display','none');  
     $('#input-file-now4').change(function(){
        var allowedTypes = ['application/pdf','image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (JPEG/JPG/PNG/GIF)');
            $("#input-file-now4").val('');
            return false;
        }
        else if(size>5000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now4").val('');
            return false;
        }else{
      $("#uploadForm5").submit();  

        }
    });
    $("#uploadForm5").on('submit', function(e){
     $(".upload5").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".fived").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/busniess_license/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".fived").width('0%');
            },
            error:function(){
                $('#uploadStatus5').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm5')[0].reset();
                    $('#uploadStatus5').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus5').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
$(document).ready(function(){
   $(".upload6").css('display','none');  
     $('#input-file-now1').change(function(){
        var allowedTypes = ['application/pdf'];
        var file = this.files[0];
        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (PDF)');
            $("#input-file-now1").val('');
            return false;
        }
        else if(size>5000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now1").val('');
            return false;
        }else{
      $("#uploadForm6").submit();  

        }
    });
    $("#uploadForm6").on('submit', function(e){
     $(".upload6").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".six").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/Business_profile/update")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".six").width('0%');
            },
            error:function(){
                $('#uploadStatus6').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm6')[0].reset();
                    $('#uploadStatus6').html('<p class="text-success">File  uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus6').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
$(document).ready(function(){
   $(".upload7").css('display','none');  
   $('#input-file-now7').change(function(){
        var allowedTypes = ['application/pdf'];
        var file = this.files[0];

        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (PDF)');
            $("#input-file-now7").val('');
            return false;
        }
        else if(size>5000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now7").val('');
            return false;
        }else{
      $("#uploadForm7").submit();  

        }
    });
    $("#uploadForm7").on('submit', function(e){
     $(".upload7").css('display','block');  

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".seven").width(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/gr/store_market_position")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
              $(".seven").width('0%');
            },
            error:function(){
                $('#uploadStatus3').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm7')[0].reset();
                     $('.iframe').load(document.URL +  ' .iframe');

                    $('#uploadStatus7').html('<p class="text-success">File  uploaded successfully!</p>');

                }else if(resp == 'err'){
                    $('#uploadStatus7').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
  });
});

// end uploading

// forms


jQuery("#first").submit(function(e){

 $('#sub12').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  e.preventDefault();  
    
    var registered_name=$('#registered_name').val();
    var establishment_date=$('#establishment_date').val();
    var trademark_name=$('#trademark_name').val();
    var license_number=$('#license_number').val();
    var business_sector=$('#business_sector').val();
    var minimum_ammount_of_investment=$('#minimum_ammount_of_investment').val();
    var pitch_video=$('.pitch_video').val();
    var website_url=$('#website_url').val();
    var facebook_url=$('#facebook_url').val();
    var instagram_url=$('#instagram_url').val();
    var linkedin_url=$('#linkedin_url').val();
    var registered_entity=$('#registered_entity').val();
    var tax_identification_number=$('#tax_identification_number').val();
   

    var url ="{{url('ent/sme/profile/update')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {registered_name:registered_name,
           establishment_date:establishment_date
           ,trademark_name:trademark_name,
           license_number:license_number,
           business_sector:business_sector
           ,minimum_ammount_of_investment:minimum_ammount_of_investment,
           pitch_video:pitch_video,
           website_url:website_url,
           facebook_url:facebook_url,
           instagram_url:instagram_url,
           linkedin_url:linkedin_url,
           tax_identification_number:tax_identification_number,
           registered_entity:registered_entity},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
      $('.forth_tab').click();  
    $('#sub12').html('Save').attr('disabled',false);  
    $('html, body').animate({scrollTop:0}, '300');
    //  $('#messages11').reload(document.URL +  ' #messages11');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });

});

$(document).ready(function () {
 $('#submit_define').click(function(){
  $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);

  var html=$('.submit_define').html();
  var inputdata = JSON.stringify({'inputdata':html});
  var url="{{url('ent/gr/business_minimum_viable_product')}}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
      $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
                    heading: '<small>{{"Information updated successfully!"}}</small>',
                    // text: 'Use the predefined ones, or specify a custom position object.',
                    position: 'top-right',
                    loaderBg:'#2cdd9b',
                    icon: 'success',
                    hideAfter: 4500, 
                    stack: 7
                });
                $('#submit_define').html('Save').attr('disabled',false);  
            
        },
        error:function(){
        
        }
        });
 });
// 
$('#product_specifications').click(function(){
 $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
 var body = tinymce.get("mymce14").getContent();
  var inputdata = JSON.stringify({'inputdata':body});
  var url="{{url('ent/gr/high_level_product')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
 $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#product_specifications').html('Save').attr('disabled',false);  
        
    },
    error:function(){
    
    }
    });
 });
// 
$('#product_need').click(function(){
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);
    
 var body = tinymce.get("mymce15").getContent();

 var inputdata = JSON.stringify({'inputdata':body});
 var url="{{url('ent/gr/product_need/')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
                 heading: '<small>{{"Information updated successfully!"}}</small>',
                // text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });
          $('#product_need').html('Save').attr('disabled',false);
        
    },
    error:function(){
    
    }
    });
 });
});

$('#product_plan_btn').click(function(){
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);
    
 var body = $('.product_plan_table').html();

 var inputdata = JSON.stringify({'inputdata':body});
 var url="{{url('ent/gr/product_plan/')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
                 heading: '<small>{{"Information updated successfully!"}}</small>',
                // text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });
          $('#product_plan_btn').html('Save').attr('disabled',false);
        
    },
    error:function(){
    
    }
    });
 });



$('#busniess_submit').click(function(){
 $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
  var body = tinymce.get("mymce2").getContent();
  var inputdata = JSON.stringify({'inputdata':body});
  var input =$('#bus_hide').val();

  var url="{{url('ent/gr/store_busniess_model')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,hidden:input},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#busniess_submit').html('Save').attr('disabled',false);  
     $('#myModal').modal('hide');
     $('.bus').load(window.location.href+ " .bus");

    },
    error:function(){
    
    }
    });
});

$('#elavtor_submit').click(function(){
 $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
  var body = tinymce.get("mymce1").getContent();
  var inputdata = JSON.stringify({'inputdata':body});

  var url="{{url('ent/gr/profile/update1')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#elavtor_submit').html('Save').attr('disabled',false);  
  
    },
    error:function(xhr){
    $('.elavetor_error').html('');
    $.each(xhr.responseJSON.errors,function(Key,value){
        $('.elavetor_error').html(value);
    $('#elavtor_submit').html('Save').attr('disabled',false);  
    });
    }
    });
});
// ajax
$("#bsniess__trends_submit").click(function(e){
 $('#bsniess__trends_submit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    var body=$('.trends_table').html();
    var inputdata = JSON.stringify({'inputdata':body});

    var url ="{{url('ent/gr/busness_trends_add')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#bsniess__trends_submit').html('Save').attr('disabled',false);  
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});
$('#risk_button').click(function(){
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);
    
    var body = $('.risk').html();
   
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/risk_a_add')}}";
     $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
           }
       });
     $.ajax({
       type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
           $.toast({
                    heading: '<small>{{"Information updated successfully!"}}</small>',
                   // text: 'Use the predefined ones, or specify a custom position object.',
                   position: 'top-right',
                   loaderBg:'#2cdd9b',
                   icon: 'success',
                   hideAfter: 4500, 
                   stack: 7
                 });
             $('#risk_button').html('Save').attr('disabled',false);
           
       },
       error:function(){
       
       }
       });
});
$("#compit").click(function(e){
        $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
        var ad_1 = $("#ad_1").val();
        var ad_2 = $("#ad_2").val();
        var ad_3 = $("#ad_3").val();
        var ad_4 = $("#ad_4").val();
        var ad_5 = $("#ad_5").val();
        var ad_6 = $("#ad_6").val();
        var ad_7 = $("#ad_7").val();
        var ad_8 = $("#ad_8").val();
        var ad_9 = $("#ad_9").val();
        var ad_10 = $("#ad_10").val();
        var ad_11 = $("#ad_11").val();
        var ad_12 = $("#ad_12").val();
        var ad_13 = $("#ad_13").val();
        var ad_14 = $("#ad_14").val();
        var ad_15 = $("#ad_15").val();
        var ad_16 = $("#ad_16").val();
        var ad_17 = $("#ad_17").val();
        var ad_18 = $("#ad_18").val();
        var ad_19 = $("#ad_19").val();
        var ad_20 = $("#ad_20").val();
        var ad_21 = $("#ad_21").val();
        var ad_22 = $("#ad_22").val();
        var ad_23 = $("#ad_23").val();
        var ad_24 = $("#ad_24").val();
        var ad_25 = $("#ad_25").val();
        // 
        var advan_1=$('#advan_1').html();
        var advan_2=$('#advan_2').html();
        var advan_3=$('#advan_3').html();
        var advan_4=$('#advan_4').html();
        var advan_5=$('#advan_5').html();
    // 
        var comp_1=$('#comp_1').html();
        var comp_2=$('#comp_2').html();
        var comp_3=$('#comp_3').html();
        var comp_4=$('#comp_4').html();
        var comp_5=$('#comp_5').html();
        $.ajax({
           type:'POST',
           url:"{{ url('ent/gr/advantage') }}",
           data:{ad_1:ad_1,ad_2:ad_2,ad_3:ad_3,ad_4:ad_4,ad_5:ad_5,ad_6:ad_6,ad_7:ad_7,ad_8:ad_8,ad_9:ad_9,ad_10:ad_10,ad_11:ad_11,ad_12:ad_12,ad_13:ad_13,ad_14:ad_14,ad_15:ad_15,ad_16:ad_16,ad_17:ad_17,ad_18:ad_18,ad_19:ad_19,ad_20:ad_20,ad_21:ad_21,
           ad_22:ad_22,ad_23:ad_23,ad_24:ad_24,ad_25:ad_25,advan_1:advan_1,advan_2:advan_2,advan_3:advan_3,advan_4:advan_4,advan_5:advan_5,comp_1:comp_1,comp_2:comp_2,comp_3:comp_3,comp_4:comp_4,comp_5:comp_5,
           },
           success:function(data){
              // window.location.reload();
               $.toast({
                 heading: '<small>{{"Information updated successfully!"}}</small>',
                // text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });

        $('#compit').html('Save').attr('disabled',false);  
             
           }
        });
  
});
$('#the_market_btn').click(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce10").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/store_the_market')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
            });
    $('#the_market_btn').html('Save').attr('disabled',false);  

        
    },
    error:function(){
    
    }
    });

});
$('#def_investment_btn').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce11").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/store_define_invest')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
            });
    $('#def_investment_btn').html('Save').attr('disabled',false);  

        
    },
    error:function(){
    
    }
    });

});
$('#define_your_plan').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce12").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/store_define_invest_plan')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
            });
    $('#define_your_plan').html('Save').attr('disabled',false);  

        
    },
    error:function(){

    }
    });

});
$('#breakdown_btn').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce13").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/store_define_invest_breakdown')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#breakdown_btn').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});

$('#calculate_btn').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce13").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/calculate_cost')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#calculate_btn').html('Save').attr('disabled',false);  


    },
    error:function(){

    }
    });

});

$('#segment_market_btn').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var segment1=$('#segment1').html();
    var segment2=$('#segment2').html();
    var segment3=$('#segment3').html();
    var segment4=$('#segment4').html();
    var segment1 = JSON.stringify({'segment1':segment1});
    var segment2 = JSON.stringify({'segment2':segment2});
    var segment3 = JSON.stringify({'segment3':segment3});
    var segment4 = JSON.stringify({'segment4':segment4});

    // ,segment2:segment2,segment3:segment3,segment4:segment4
    var url="{{url('ent/gr/store_market_segment')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {segment1:segment1,segment2:segment2,segment3:segment3,segment4:segment4},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#segment_market_btn').html('Save').attr('disabled',false);  


    },
    error:function(){

    }
    });

});
jQuery("#question_form").submit(function(e){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $('#question_btn').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var qus1=$('#qus1').val();
    var qus2=$('#qus2').val();
    var qus3=$('#qus3').val();
    var qus4=$('#qus4').val();
    var qus5=$('#qus5').val();
    var qus6=$('#qus6').val();
    // alert(qus2);
    $.ajax({
    type:'POST',
    url:"{{ url('ent/gr/b_head_question')}}",
    data: {qus6:qus6,qus1:qus1,qus2:qus2,qus3:qus3,qus4:qus4,qus5:qus5},
    success:function(data){
        // window.location.reload();
        $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            // text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
 $('#question_btn').html('Save').attr('disabled',false);  
     
   }
 });
 e.preventDefault(); 

});
$('#beachhead_summary_btn').click(function(){
 $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
  var body = tinymce.get("mymce17").getContent();
  var inputdata = JSON.stringify({'inputdata':body});

  var url="{{url('ent/gr/b_head_summary')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#beachhead_summary_btn').html('Save').attr('disabled',false);  
  
    },
    error:function(xhr){
    // $('.elavetor_error').html('');
    $.each(xhr.responseJSON.errors,function(Key,value){
        // $('.elavetor_error').html(value);
        alert('Beachhead Summary is Required');
    $('#beachhead_summary_btn').html('Save').attr('disabled',false);  
    });
    }
    });
});

$('#total_market_size').click(function(){
  $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);

  var body = $('.table_total_market_size').html();

  var inputdata = JSON.stringify({'inputdata':body});
  var url="{{url('ent/gr/b_head_total_market_size')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
                 heading: '<small>{{"Information updated successfully!"}}</small>',
                // text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });
          $('#total_market_size').html('Save').attr('disabled',false);
            // $('#profile3').reload(document.URL +  '#profile3');
        
    },
    error:function(){
    
    }
    });
});
$('#life_cycle_btn').click(function(){
 $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);

 var body = $('.life_cycle').html();

 var inputdata = JSON.stringify({'inputdata':body});
 var url="{{url('ent/gr/b_head_market_life_cycle')}}";
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
  $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata},
     success:function(data){ 
        $.toast({
                 heading: '<small>{{"Information updated successfully!"}}</small>',
                // text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });
          $('#life_cycle_btn').html('Save').attr('disabled',false);
            // $('#profile3').reload(document.URL +  '#profile3');
        
    },
    error:function(){
    
    }
    });
});

 jQuery("#intial_invest_form").submit(function(e){

  $('#intial_invest').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    var intial_payroll=$('#intial_payroll').val();
    var intial_operation_cost=$('#intial_operation_cost').val();
    var intial_technology=$('#intial_technology').val();
    var intial_machinery=$('#intial_machinery').val();
    var intial_online_presence=$('#intial_online_presence').val();
    var first_amount_name=$('#first_amount_name').val();
    var first_amount=$('#first_amount').val();
    var second_amount_name=$('#second_amount_name').val();
    var second_amount=$('#second_amount').val();
    var third_amount_name=$('#third_amount_name').val();
    var third_amount=$('#third_amount').val();
   
    var url ="{{url('ent/gr/financial/first')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {
        intial_payroll:intial_payroll,
        intial_operation_cost:intial_operation_cost,
        intial_technology:intial_technology,
        intial_machinery:intial_machinery,
        intial_online_presence:intial_online_presence,
        first_amount_name:first_amount_name,
        first_amount:first_amount,
        second_amount_name:second_amount_name,
        third_amount_name:third_amount_name,
        third_amount:third_amount},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    $('#intial_invest').html('Save Amounts').attr('disabled',false);  
     $('.total_table').load(document.URL +  ' .total_table');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});
jQuery("#operation_cost_form").submit(function(e){
    e.preventDefault();  
 $('#operation_cost_btn').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
       }
   });

   var operation_payroll=$('#operation_payroll').val();
   var operation_cost=$('#operation_cost').val();
   var technology=$('#technology').val();
   var machinery=$('#machinery').val();
   var marketing=$('#marketing').val();
   var amount_name_first=$('#amount_name_first').val();
   var amount_first=$('#amount_first').val();
   var amount_name_second=$('#amount_name_second').val();
   var amount_second=$('#amount_second').val();
   var amount_name_third=$('#amount_name_third').val();
   var amount_third=$('#amount_third').val();
  
   var url ="{{url('ent/gr/financial/second')}}";
   $.ajax({
   type:'POST',
    url:url,
    data: {operation_payroll:operation_payroll,
        operation_cost:operation_cost,
        technology:technology,
        machinery:machinery,
        marketing:marketing,
        amount_name_first:amount_name_first,
        amount_first:amount_first,
        amount_name_second:amount_name_second,
        amount_second:amount_second,
        amount_name_third:amount_name_third,
        amount_third:amount_third},
    success:function(data){ 
       $.toast({
          heading: '<small>{{"Information updated successfully!"}}</small>',
          position: 'top-right',
           loaderBg:'#2cdd9b',
           icon: 'success',
           hideAfter: 4500, 
           stack: 7
       });
    $('#operation_cost_btn').html('Save Amounts').attr('disabled',false);  
     $('.total_table').load(document.URL +  ' .total_table');
       
   },
   error:function(jqxhr, status, exception){
    //    alert('Exception:', exception);
   }
   });

});

jQuery("#revenue_form").submit(function(e){
 
 $('#revenue_btn').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
       }
   });

   var f_number_of_products_sold=$('#f_number_of_products_sold').val();
   var f_price_per_sale_unit=$('#f_price_per_sale_unit').val();
   var f_number_of_customers=$('#f_number_of_customers').val();

   var s_number_of_products_sold=$('#s_number_of_products_sold').val();
   var s_price_per_sale_unit=$('#s_price_per_sale_unit').val();
   var s_number_of_customers=$('#s_number_of_customers').val();
   
   var t_number_of_products_sold=$('#t_number_of_products_sold').val();
   var t_price_per_sale_unit=$('#t_price_per_sale_unit').val();
   var t_number_of_customers=$('#t_number_of_customers').val();
  
   var url ="{{url('ent/gr/financial/forth')}}";
   $.ajax({
   type:'POST',
    url:url,
    data: {f_number_of_products_sold:f_number_of_products_sold,
        f_price_per_sale_unit:f_price_per_sale_unit,
        f_number_of_customers:f_number_of_customers,
        s_number_of_products_sold:s_number_of_products_sold,
        s_price_per_sale_unit:s_price_per_sale_unit,
        s_number_of_customers:s_number_of_customers,
        t_number_of_products_sold:t_number_of_products_sold,
        t_price_per_sale_unit:t_price_per_sale_unit,
        t_number_of_customers:t_number_of_customers},
    success:function(data){ 
       $.toast({
          heading: '<small>{{"Information updated successfully!"}}</small>',
          position: 'top-right',
           loaderBg:'#2cdd9b',
           icon: 'success',
           hideAfter: 4500, 
           stack: 7
       });
    $('#revenue_btn').html('Save Amounts').attr('disabled',false);  
     $('.total_table').load(document.URL +  ' .total_table');
       
   },
   error:function(jqxhr, status, exception){
    //    alert('Exception:', exception);
   }
   });
   e.preventDefault();  

});



jQuery("#profit_form").submit(function(e){
 
 $('#profit_btn').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
       }
   });
   
   var f_fixed_cost_per_unit=$('#f_fixed_cost_per_unit').val();
   var f_variable_cost_per_unit=$('#f_variable_cost_per_unit').val();
   var f_profit_margin_per_unit=$('#f_profit_margin_per_unit').val();

   var s_fixed_cost_per_unit=$('#s_fixed_cost_per_unit').val();
   var s_profit_margin_per_unit=$('#s_profit_margin_per_unit').val();
   var s_variable_cost_per_unit=$('#s_variable_cost_per_unit').val();
   
   var t_fixed_cost_per_unit=$('#t_fixed_cost_per_unit').val();
   var t_variable_cost_per_unit=$('#t_variable_cost_per_unit').val();
   var t_profit_margin_per_unit=$('#t_profit_margin_per_unit').val();
  
   var url ="{{url('ent/gr/financial/third')}}";
   $.ajax({
   type:'POST',
    url:url,
    data: {f_fixed_cost_per_unit:f_fixed_cost_per_unit,
        f_variable_cost_per_unit:f_variable_cost_per_unit,
        f_profit_margin_per_unit:f_profit_margin_per_unit,
        s_fixed_cost_per_unit:s_fixed_cost_per_unit,
        s_profit_margin_per_unit:s_profit_margin_per_unit,
        s_variable_cost_per_unit:s_variable_cost_per_unit,
        t_fixed_cost_per_unit:t_fixed_cost_per_unit,
        t_variable_cost_per_unit:t_variable_cost_per_unit,
        t_profit_margin_per_unit:t_profit_margin_per_unit},
    success:function(data){ 
       $.toast({
          heading: '<small>{{"Information updated successfully!"}}</small>',
          position: 'top-right',
           loaderBg:'#2cdd9b',
           icon: 'success',
           hideAfter: 4500, 
           stack: 7
       });
    $('#profit_btn').html('Save Amounts').attr('disabled',false);  
     $('.total_table').load(document.URL +  ' .total_table');
       
   },
   error:function(jqxhr, status, exception){
    //    alert('Exception:', exception);
   }
   });
   e.preventDefault();  

});

$('#expansion_plan').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce18").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/Expansion_Plan/')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#expansion_plan').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});
$('#expansion_summary').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce19").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/executive_summary/')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#expansion_summary').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});
$('#swot_analyze').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  

    var strength = $("#strength").html();
    var weakness = $("#weakness").html();
    var opportunities = $("#opportunities").html();
    var threats = $("#threats").html();

    var url="{{url('ent/gr/swoat_analyze')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {strength:strength,weakness:weakness,opportunities:opportunities,threats:threats},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#swot_analyze').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});

$('#target_market').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce20").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/target_market/')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#target_market').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});
$('#market_study').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce21").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/market_study')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#market_study').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });

});
$('#product_upgrade').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce22").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/product_upgrade')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#product_upgrade').html('Save').attr('disabled',false);  

    
    },
    error:function(){

    }
    });
});

$('#required_tech').click(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    var body = tinymce.get("mymce23").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ent/gr/required_tech_fincance')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata},
        success:function(data){ 
            $.toast({
            heading: '<small>{{"Information updated successfully!"}}</small>',
            position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
        });
    $('#required_tech').html('Save').attr('disabled',false);  
    
    },
    error:function(){

    }

    });
});

 $('.url').inputmask({ regex: "https://.*" });

$('body').on( "click",'.data', function() {

       var data1=$(this).attr('data-data');
       var data2=$(this).attr('data-data1');

    url ='{{url("ent/gr/busniess_modal_content")}}/'+data2;
    
    $.get(url,function(data){
     data=JSON.parse(data);
      var a=data[0][data2];
    if (a!==null) {
      tinymce.get("mymce2").setContent(a);
    }else{
      tinymce.get("mymce2").setContent('');    
    }
       $('#myModalLabel').html(data1);
       $('#bus_hide').val(data2);

      });
    });  

  $(".delete").click(function () {
          id = $(this).attr('data-id');
          url = '{{url("ent/sme/add/team/member/delete")}}/'+id;
          Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {
                  $.get(url , function (data){
                  });                   
                  Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                  )
                $("#row"+id).hide(2000);
              }
          })
      });

  $('#final_submit').on('click', function(e) {
    var url="{{url('ent/gr/profile/update4')}}";
     $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Submitting....').attr('disabled',true);  
     $(location).attr('href',url);
 });
  // endof form

</script>
@endsection

 
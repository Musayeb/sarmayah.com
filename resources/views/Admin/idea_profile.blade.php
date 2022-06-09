@extends('Admin.master')
@section('css')

    <link href="{{asset('public/dist/css/pages/tab-page.css')}}" rel="stylesheet">  
    <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/node_modules/dropify/dist/css/dropify.min.css')}}">
      <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

  
 
@endsection
@section('styles')
table#competitive > tbody > tr > td,
table#competitive > thead > tr > td,
table#competitive > tbody > tr > th,
table#competitive > thead > tr > th{
  text-align: left;
  padding: 8px;
  height:10px;
  font-size:10px;
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
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
         <div class=" col-md-2 float-right">
            <label>Account status</label>
            <select class="form-control" id="status">
            <option value="Draft"
              @if($ent->admin_status=="Draft") selected @endif>Draft</option>
           
              <option value="Submitted"
              @if($ent->admin_status=="Submitted") selected @endif>Submitted</option>
           
              <option value="Approved"
              @if($ent->admin_status=="Approved") selected @endif>Approved</option>
           
              <option value="Rejected"
              @if($ent->admin_status=="Rejected") selected @endif>Rejected</option>

            </select>
            </div>
             <div class="col-md-2 float-right">
              <label>Account catagory</label>
            <select class="form-control" id="catagory">
              <option value="IDEA"
              @if($ent->catagory=="IDEA") selected @endif>IDEA</option>
              <option value="STARTUP"
              @if($ent->catagory=="STARTUP") selected @endif>STARTUP</option>
              <option value="SME"
              @if($ent->catagory=="SME") selected @endif>SME</option>
            </select>
            </div>

     
            <h4 >Idea Information &nbsp; &nbsp; 
              @if($ent->admin_status=="Draft")<span class="badge badge-warning">{{$ent->admin_status}}</span>@endif
              @if($ent->admin_status=="Approved")<span class="badge badge-success">{{$ent->admin_status}}</span>@endif
              @if($ent->admin_status=="Rejected")<span class="badge badge-danger">{{$ent->admin_status}}</span>@endif
              @if($ent->admin_status=="Submitted")<span class="badge badge-info">{{$ent->admin_status}}</span>@endif

            </h4>    
              <br><br>    

             <div class="tabs">
                  <ul class="nav nav-tabs customtab2" role="tablist">
                    
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> About Founder</span></a> 
                    </li>
                    <li class="nav-item"> <a class="nav-link second_tab" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                      Idea Details</span></a> 
                    </li>
                     <li class="nav-item"> <a class="nav-link third_tab" data-toggle="tab" href="#profile3" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                      Problem & Solution</span></a> 
                    </li>
                      <li class="nav-item"> <a class="nav-link five_tab" data-toggle="tab" href="#messages5" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                     Business Model</span></a> 
                    </li>
                       <li class="nav-item"> <a class="nav-link six_tab" data-toggle="tab" href="#messages6" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                      Market Positioning </span></a> 
                    </li>
                     <li class="nav-item"> <a class="nav-link seven_tab" data-toggle="tab" href="#messages7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                      Business Trends </span></a> 
                    </li>

                    <li class="nav-item"> <a class="nav-link eight_tab" data-toggle="tab" href="#messages9" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                        Investment Management  </span></a> 
                    </li>

                    <li class="nav-item"> <a class="nav-link fourth_tab" data-toggle="tab" href="#messages3" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                        Financial </span></a> 
                    </li>
               
               
                    <li class="nav-item"> <a class="nav-link nine_tab" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">
                        Uploads </span></a> 
                    </li>
                
                  
                </ul>
                 
                <!-- Tab panes -->
                   <div class="tab-content">


          <div class="tab-pane active" id="home3" role="tabpanel" style="padding:40px"> 
                    @php $id1=encrypt($ent_id) @endphp
                                  
                <a href="{{url('ad/idea/add/team/member')}}/{{$id1}}"><button class="btn btn-success float-right mb-2">Add Team Member <i class="mdi mdi-plus"></i></button></a>
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

                     <td>{{$number++}}</td>
                     <td><img src="{{url('storage/app')}}/{{$row->photo}}" class="rounded-circle" 
                      style="width:80px;height:80px"></td>
                     <td>{{$row->full_name}}</td>
                     <td>{{$row->position}}</td>
                     <td >@php echo html_entity_decode($row->summary) @endphp</td>
                   
                     <td>
                        <a href="{{url('ad/idea/edit/team/member')}}/member={{$id}}"><i class="mdi mdi-pencil text-info mdi-lg" style="font-size:20px"></i></a>
                        <a href="javascript:void()"><i class="mdi mdi-delete text-danger delete" data-id="{{$id}}" style="font-size:20px"></i></a>

                     </td>

                   </tr>
                   @endforeach
                  </tbody>
                </table>
               </div>

               <input type="hidden" id="hide_input" value="{{$ent_id}}">
            <button id="first_btn" class="btn btn-success float-right">Next</button>
 
      </div><!-- end of tab 1 -->







<div class="tab-pane p-20" id="profile4" role="tabpanel" style="padding:40px">

           <form id="first" method="post" action="">
              @csrf
                <div class="row">
                    <div class="col-md-6">
                          
                        <div class="form-group">
                          <label> Business Idea Name <label class="text-danger h5">*</label></label>
                            <input type="text" class="form-control " 
                              @if(!empty($ent->startup_name))value="{{$ent->startup_name}}"
                               @else  value="{{ old('idea_name') }}" @endif 
                               id="idea_name" placeholder="Business Idea Name" required> 
                 {!!$errors->first('idea_name', '<small class="text-danger ml-2">:message</small>')!!}
                        </div>
                    </div>
                  
                     <div class="col-md-6">
                        <div class="form-group">
                          <label >Potential Business Establishment Date <label class="text-danger h5">*</label></label>
                            <input type="date"  
                              @if(!empty($ent->establishment_date)) value="{{$ent->establishment_date}}" 
                               @else  value="{{ old('establishment_date') }}" @endif 
                            class="form-control establishment_date" 
                             id="potential__estab_date" required> 
                 {!!$errors->first('establishment_date', '<small class="text-danger ml-2">:message</small>')!!}
                          </div>
                      </div>
                 </div>
                  
            <div class="row">
          
                 <div class="col-md-6">
                      <label >The minimum amount of investment are you looking for?<label class="text-danger h5">*</label></label>
             
                   <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                    </div>
                       <input  pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency" 
                            @if(!empty($ent->mainimum_amount_looking))value="{{ number_format($ent->mainimum_amount_looking, 2, '.', ',')}}"@endif
                          class="form-control" placeholder="1,000.00 $" id="mainimum_amount" required>
                        {!!$errors->first('mainimum_amount', '<small class="text-danger ml-2">:message</small>')!!}
                    </div>
                      
                      </div>


                     
                    <div class="col-md-6">
                       <div class="form-group">
                         <label> Business Sector <label class="text-danger h5">*</label></label>
                           <select class="custom-select form-control required"  id="business_sector" required>
                              <option value=""> Industry Sector</option>
                                @php $sector=DB::table('sectors')->orderBy('sector_name','ASC')->get(); @endphp
                                @foreach($sector as $row)
                                <option value="{{$row->sector_id}}"
                               @if($ent->ent_industry_sector==$row->sector_id) selected @endif>{{$row->sector_name}} 
                                </option>
                                @endforeach
                            </select>
                   {!!$errors->first('business_sector', '<small class="text-danger ml-2">:message</small>')!!}
                        </div>
                     </div>
                   </div>

                   <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                            <label > How many rounds of investment do you need? <label class="text-danger h5">*</label></label>
                              <select class="custom-select form-control required" id="rounds_of_investment" required>
                                <option value="">Select rounds type</option>
                                 <option value="One"
                                  @if($ent->round_invest=="One") selected @endif
                                   @if (old('rounds_of_investment') == 'One') selected="selected" @endif>One</option>
                                  <option value="Two"
                                   @if($ent->round_invest=="Two") selected @endif
                                     @if (old('rounds_of_investment') == 'Two') selected="selected" @endif>Two</option>
                                   <option value="Three"
                                   @if($ent->round_invest=="Three") selected @endif

                                   @if($ent->round_invest=="Two") selected @endif
                                     @if (old('rounds_of_investment') == 'Three') selected="selected" @endif >Three</option>
                               </select>
                  {!!$errors->first('rounds_of_investment', '<small class="text-danger ml-2">:message</small>')!!}
                         </div>
                      </div>

                   <div class="col-md-6">
                      <div class="form-group">
                        <label >Needed Team <label class="text-danger h5">*</label></label>
                          <input type="number" id="team_size" 
                          @if(!empty($ent->team_size)) value="{{$ent->team_size}}" @else value="{{old('team_size')}}" @endif  min="0" class="form-control" placeholder="Needed Team" required>
                 {!!$errors->first('team_size', '<small class="text-danger ml-2">:message</small>')!!}
                     </div>    
                    </div>
                </div> 
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        
                        <label >Pitch Video </label>

                        <input type="url" class="form-control pitch_video" id="youtube" value="{{$ent->pitch_video_link}}" placeholder="https://youtube.com/6VcBqqdI">
                    {!!$errors->first('pitch_video', '<small class="text-danger ml-2">:message</small>')!!}
                    </div>    
                </div>
            </div>
        <button type="Submit" id="sub1" class="btn btn-success float-right">Next</button>
        </form>
    </div>
          <!-- end of tab 2 -->

{{-- finance--}}
         <div class="tab-pane justify-content-center p-20" id="profile3" role="tabpanel" style="padding:40px">
               @csrf
                <div class="row">
                  <div class="col-md-2"></div>
                    <div class="col-md-7">
                     <div class="form-group mt-2">
                       <label id="elavator_picth">Elevator Pitch &nbsp;(200-400 words)<label class="text-danger h5">*</label></label>
                        <textarea  name="elevator_Pitch"  id="mymce2" required >{{$ent->elavator_picth}}</textarea>
                        <span id="character_count2" class="float-right"></span> <br>
                   {!!$errors->first('elevator_Pitch', '<small class="text-danger ml-2">:message</small>')!!}             
                     <button class="btn btn-success float-right mt-2" id="elavator_picth_btn">Save</button>
                     </div>

                  <div class="form-group">
                    <label id="problem">Problem &nbsp;(200-400 words) <label class="text-danger h5">*</label></label>
                      <textarea name="problem" id="mymce3" required >{{$ent->problem_sulotion}}</textarea>
                        <span id="character_count3" class="float-right"></span><br>
                  {!!$errors->first('problem', '<small class="text-danger ml-2">:message</small>')!!}       
                     <button class="btn btn-success float-right mt-2" id="problem_btn">Save</button>

                 </div>
             
                <div class="form-group">
                   <label id="solution">Solution &nbsp;(200-400 words)<label class="text-danger h5">*</label></label>
                    <textarea name="solution" id="mymce4" required >{{$ent->solution}}</textarea>
                    <span id="character_count4" class="float-right"></span><br>
                  {!!$errors->first('solution', '<small class="text-danger ml-2">:message</small>')!!}         
                     <button class="btn btn-success float-right mt-2" id="solution_btn">Save</button>

                </div>
      
                </div>
             </div>
         <button type="Submit" id="elavator"  class="btn btn-success float-right">Next</button>
    </div>
    <!-- end of tab 3 -->



    <div class="tab-pane p-20" id="messages3" role="tabpanel" style="padding:40px">
        <div class="row">
            <div class="col-md-4">
                <table class="table total_table " style="margin-bottom:60px;">
                    <tr>
                           @php $total_intial=$intial_total+$raised_total;
                           $annual_operation=$operation_total*12;
                           $annual_revenue=$total_revenue*12;
                           @endphp
                        <td>Total Investment</td>
                        <td>$ {{ number_format($total_intial, 2, '.', ',')}}</td>
                    </tr>
                    <tr>
                        <td> Annual Operation Cost</td>
                        <td>$ {{ number_format($annual_operation, 2, '.', ',')}}</td>
                    </tr>

                    <tr>
                        <td>First Year Annual Revenue</td>
                        @php $Ftotal=$finance[0]->f_number_of_products_sold*$finance[0]->f_price_per_sale_unit @endphp
                        <td>$ {{ number_format($Ftotal, 2, '.', ',')}}</td>
                    </tr>

                    <tr>
                        <td> Second Year Annual Revenue</td>
                         @php $stotal=$finance[0]->s_number_of_products_sold*$finance[0]->s_price_per_sale_unit @endphp   
                        <td>$ {{ number_format($stotal, 2, '.', ',')}}</td>
                    </tr>

                    <tr>
                        <td>Third Year Annual Revenue</td>
                        @php $ttotal=$finance[0]->t_number_of_products_sold*$finance[0]->t_price_per_sale_unit @endphp   
                        <td>$ {{ number_format($ttotal, 2, '.', ',')}}</td>
                    </tr>
                </table>
            </div>



            <div class="col-md-7">
                <div id="accordion">
                    <div class="card m-1" >
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    <h6>Intial Investment <label class="text-danger h5">*</label></h6>
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
                                              <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
                                                      <input  class="form-control" placeholder="Insert payroll cost"
                                                    pattern="^\d{1,3}(,\d{3})*(\.\d+)?$"  data-type="currency"  id="intial_payroll"
                                                    @if(!empty($finance[0]->intial_payroll)) value="{{number_format($finance[0]->intial_payroll, 2, '.', ',')}}"@endif required>
                                                     
                                              </div>                                        

                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label >Operation Cost <label class="text-danger h5">*</label></label>
                                        </div>
                                        <div class="col-md-8">
                                        
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
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
                                 
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
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
                                           
                                    
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
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
                                               <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
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
                                                
                                          
                                              <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
                                                        <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" @if(!empty($finance[0]->intial_other1))value="{{number_format($finance[0]->intial_other1, 2, '.', ',')}}" @endif  data-type="currency" class="form-control" id="first_amount">     
                                              </div>
                                              
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <input type="text" id="second_amount_name" class="form-control" value="{{$finance[0]->other_name2}}">
                                            </div>
                                            <div class="col-md-8">
                                                                                  
                                                <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
                                                     <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" @if(!empty($finance[0]->intial_other2)) value="{{number_format($finance[0]->intial_other2, 2, '.', ',')}}" @endif data-type="currency"class="form-control"  id="second_amount">
                                              </div>
                                              


                                            </div>
                                        </div>


                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="third_amount_name" value="{{$finance[0]->other_name3}}">
                                            </div>
                                            <div class="col-md-8">
 
                                               <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                                  </div>
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



            <div class="card m-1">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn  collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                                  
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                               
                               
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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

                               

                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                              
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                             
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                   
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                 
                                 <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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


            <div class="card mt-1 mb-0">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn  collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
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
                                                             
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                             <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                            data-type="currency" id="f_price_per_sale_unit"
                                            @if(!empty($finance[0]->f_price_per_sale_unit))value="{{number_format($finance[0]->f_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                    </div>

                                {!!$errors->first('f_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label >Number of Customers</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" min="1"  class="form-control txt" placeholder="Number of Customers"
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
                             
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                               <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                            data-type="currency" id="s_price_per_sale_unit"
                                            @if(!empty($finance[0]->s_price_per_sale_unit))value="{{number_format($finance[0]->s_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                    </div>

                                {!!$errors->first('s_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label >Number of Customers</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" min="1"  class="form-control txt" placeholder="Number of Customers"
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
                               
                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                            <input  class="form-control txt"pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="Price Per Sale Unit"
                                            data-type="currency" id="t_price_per_sale_unit"
                                            @if(!empty($finance[0]->t_price_per_sale_unit))value="{{number_format($finance[0]->t_price_per_sale_unit, 2, '.', ',')}}" @endif required> 
                                    </div>

                                {!!$errors->first('t_price_per_sale_unit', '<small class="text-danger ml-2">:message</small>')!!}

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label >Number of Customers</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" min="1"  class="form-control txt" placeholder="Number of Customers"
                                           id="t_number_of_customers"  required value="{{$finance[0]->t_number_of_customers}}">
                                    {!!$errors->first('t_number_of_customers', '<small class="text-danger ml-2">:message</small>')!!}

                                </div>
                            </div>

                            <button  class="btn btn-success float-right mt-2 mb-2"  id="revenue_btn">Save Amounts</button>
                        </form>
                    </div>
                </div>
            </div>





            <div class="card mt-1 mb-0">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn  collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
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
                                 
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                            
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                  
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                               
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                               
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                              
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                           
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
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
<button type="Submit"  id="finance" class="btn btn-success float-right">Next</button>

</div>
 <!-- end of tab 2 -->


{{-- busni model convas--}}
             <div class="tab-pane p-20" id="messages5" role="tabpanel" style="padding:40px;" >

    <div class="container mt-2 p-4">
          <h6>Business Model Canvas </h6>
               <div class="row ">
                 <div class="col-md-2 pr-1 p-0">
                   <div class="btn btn-success w-100 p-t-2 pb-2 m-b-1 text-center model-text data"
                    data-data1="Key_Partners" data-data="Key Partners" data-toggle="modal" data-target="#myModal">1. Key Partners
                  <i class="mdi mdi-lead-pencil float-right"></i></div>

                   <div class="bg-light p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Key_Partners)@endphp</div>

                 </div>
                 <div class="col-md-3 p-r-1 p-0 ">
                   <div class="btn btn-success w-100 p-t-2 p-b-2 mb-1 text-center model-text data"
                   data-toggle="modal" data-target="#myModal" data-data="Key Activities" data-data1="Key_Activities">2. Key Activities <i class="mdi mdi-lead-pencil float-right"></i></div>
                   <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Key_Activities)@endphp</div>
                   <!--  -->
                  <div class="btn btn-success w-100 pt-2 pb-2 mb-1 text-center model-text data"  data-toggle="modal" data-target="#myModal" data-data="Key Resources" data-data1="Key_Resources" >6. Key Resources
                  <i class="mdi mdi-lead-pencil float-right"></i></div>
                  <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Key_Resources)@endphp</div> 

                 </div>
                 <div class="col-md-2 p-0 p-r-1">
                   <div class="btn btn-success w-100 p-t-2 p-b-2 m-b-1 text-center model-text data"
                    data-toggle="modal" data-target="#myModal" data-data="Value Propositions" data-data1="Value_Propositions" >3. Value Propositions
                  <i class="mdi mdi-lead-pencil float-right"></i></div>
                  <div class="bg-light p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Value_Propositions)@endphp</div> 
                   <!--  -->
                  
                 </div>
                 <div class="col-md-3  p-r-1 p-0">
                   <div class="btn btn-success w-100 p-t-2 p-b-2 m-b-1 text-center model-text data" 
                   data-data="Customer Relationships" data-data1="Customer_Relationships" data-toggle="modal" 
                   data-target="#myModal">4. Customer Relationships
                   <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Customer_Relationships)@endphp</div> 
       
                    <!--  -->
                     <div class="btn btn-success w-100 pl-1 pt-2 pb-2 mb-1 text-center model-text data"
                      data-data="Channels" data-data1="Channels" data-toggle="modal" data-target="#myModal">7. Channels
                    <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Channels)@endphp</div> 


                 </div>
                   <div class="col-md-2  p-r-1 p-0">
                   <div class="btn btn-success w-100 p-t-2 p-b-2 m-b-1 text-center model-text data"
                   data-data="Customer Segments" data-data1="Customer_Segments" data-toggle="modal" data-target="#myModal" >5. Customer Segments <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Customer_Segments)@endphp</div> 
                
                 </div>
               </div>   
               <div class="row ">
                 <div class="col-md-6 " style="padding:0px 0px">
                    <div class="btn btn-success w-100 p-t-2 p-b-2 m-b-1 text-center model-text data"
                    data-data="Cost Structure" data-data1="Cost_Structure"  data-toggle="modal" data-target="#myModal">8. Cost Structure <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Cost_Structure)@endphp</div> 
                 </div>
                 <div class="col-md-6 " style="padding:0px 5px">
                     <div class="btn btn-success w-100 p-t-2 pb-2 m-b-1 text-center model-text data"
                     data-data="Revenue Streams" data-data1="Revenue_Streams"  data-toggle="modal" data-target="#myModal" >9. Revenue Streams <i class="mdi mdi-lead-pencil float-right"></i></div>
                     <div class="bg-light p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($model[0]->Revenue_Streams)@endphp</div> 
                 </div>
                 
               </div>


          </div>

                 <button type="Submit" id="busniess_model" class="btn btn-success float-right ml-1">Next</button>
             </div>
{{--   end of busniess model convas          --}}

{{-- market positioning--}}
             <div class="tab-pane p-20" id="messages6" role="tabpanel" style="padding:40px">

                 <div class="row">
                  <div class="col-md-2"></div>
                     <div class="col-md-7" > 
                      <div class="form-group mb-5">
                       
                        <label class="mb-4">The Market  (100-400 words)<label class="text-danger h5">*</label></label>
                          <textarea id="mymce10" >{{$market_position[0]->the_market}} </textarea>
                          <span id="character_count10"class="float-right"></span>
                         {!!$errors->first('the_market', '<small class="text-danger ml-2">:message</small>')!!}<br>
                         <button type="submit" class="btn btn-success float-right" id="the_market_btn">Save</button>
                      </div>
                      <div>
                        <label class="mb-3">Market Positioning <label class="text-danger h5">*</label></label>
                        <p>Please download the document and prepare the market positioning for your business. In the document, please place your competitors based on their characteristics.</p>
                          <a href="{{url('storage/Extension')}}/{{'Market_Positioning.docx'}}" class="btn btn-success">Download</a> 
                          <p></p>

                        <p class="">Please upload your market positioning document in PDF.</p>
                        <div class="mt-5">
                     <form action="{{url('ad/idea/store_market_position')}}" method="post" enctype="multipart/form-data">
                         @csrf

                         <input type="hidden" name="hide_input" value="{{$ent_id}}">
                         <input type="file" id="input-file-now2" name="market_positon_file" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="5M" />
                         <button data-toggle="tooltip" data-placement="top" data-original-title="upload" type="submit" class="btn btn-success mt-1 float-right" ><i class="mdi mdi-upload"></i> Upload</button>
                     
                        </div>
                     {!!$errors->first('market_positon_file', '<small class="text-danger ml-2">:message</small>')!!}
                     </form>

                     @if(!empty($market_position[0]->market_positon_file))
                     <iframe style="margin-top:20px;height:400px;width:100%" src="{{(url('storage/app'))}}/{{$market_position[0]->market_positon_file}}"></iframe>
                     @endif

                      </div>
                      
                     </div>
     
                 </div>
                 <button type="Submit" id="market" class="btn btn-success float-right ml-1">Next</button>
             </div>
{{--  end of market positioning  --}}


{{--    busniess trends         --}}
             <div class="tab-pane p-5" id="messages7" role="tabpanel" style="padding:40px">
                 <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-7">
                       <label>Business Trends <label class="text-danger h5">*</label></label>
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
             <div class="row mt-5">
                 <div class="col-md-2"></div>
                 <div class="col-md-7" >
                    <label> Risk Analysis <label class="text-danger h5">*</label></label>  

                    @if(empty($ent->risk_analysis))
                        <table class="table table-bordered table-sm table_1 risk ">
                            <thead>
                            <tr>
                                <th style="text-align:center" >Type</th>
                                <th style="text-align:center" >Risk</th>
                                <th style="text-align:center" >Sevirity</th>
                                <th style="text-align:center" >Counter Strategy</th>
                            </tr>
                            </thead>
                           
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>

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
                                <td class="pt-3-half" contenteditable="true"></td>
                            </tr>
                            <!--  -->
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>

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
                                <td class="pt-3-half" contenteditable="true"></td>
                            </tr>
                            </tbody>
                        </table>

                    @else
                     <table class="table table-bordered table-sm table_1 risk " >
                        @php echo html_entity_decode($ent->risk_analysis)@endphp
                        </table>
                   
                    @endif

                    <button type="submit" class="btn btn-success float-right" id="risk_button">Save</button>


                 <!-- Compititors -->
                 <h4 class="mt-5">Competitive Advantages</h4>
                  <div  class="table-responsive " id="compat">
                              <table class="table table-bordered" id="competitive">
                                  <thead>
                                  <tr>
                                      <th width="1" rowspan="3"> Compititors</th>
                                      <th colspan="10" style="text-align:center">Advantages</th>
                                  </tr>
                                  <tr>
                                      <th class="pt-3-half" contenteditable="true" id="advan_1">
                                        @php echo html_entity_decode($compititive[0]->advan_1) @endphp</th>
                                      <th class="pt-3-half" contenteditable="true" id="advan_2"> @php echo html_entity_decode($compititive[0]->advan_2) @endphp</th>
                                      <th class="pt-3-half" contenteditable="true" id="advan_3"> @php echo html_entity_decode($compititive[0]->advan_3) @endphp</th>
                                      <th class="pt-3-half" contenteditable="true" id="advan_4"> @php echo html_entity_decode($compititive[0]->advan_4) @endphp</th>
                                      <th class="pt-3-half" contenteditable="true" id="advan_5"> @php echo html_entity_decode($compititive[0]->advan_5) @endphp</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_1">@php echo html_entity_decode($compititive[0]->comp_1) @endphp
                                      <td class="pt-3-half">
                                          <select  required id="ad_1">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_1=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_1=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_2">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_2=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_2=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_3">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_3=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_3=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_4">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_4=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_4=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_5">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_5=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_5=="No") selected @endif>No</option>
                                          </select>

                                      </td>
                                  </tr>

                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_2">@php echo html_entity_decode($compititive[0]->comp_2) @endphp</td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_6">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_6=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_6=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_7">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_7=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_7=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_8">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_8=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_8=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_9">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_9=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_9=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_10">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_10=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_10=="No") selected @endif>No</option>
                                          </select>
                                      </td>



                                  </tr>
                                  <!-- This is our clonable table line -->
                                  <tr>
                                      <td class="pt-3-half" contenteditable="true" id="comp_3">@php echo html_entity_decode($compititive[0]->comp_3) @endphp</td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_11">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_11=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_11=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_12">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_12=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_12=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_13">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_13=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_13=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_14">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_14=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_14=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_15">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_15=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_15=="No") selected @endif>No</option>
                                          </select>
                                      </td>


                                  </tr>
                                  <!-- This is our clonable table line -->
                                  <tr >
                                      <td class="pt-3-half" contenteditable="true" id="comp_4">@php echo html_entity_decode($compititive[0]->comp_4) @endphp</td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_16">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_16=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_16=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_17">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_17=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_17=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_18">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_18=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_18=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_19">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_19=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_19=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_20">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_20=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_20=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                  </tr>
                                  <tr >
                                      <td class="pt-3-half" contenteditable="true" id="comp_5">@php echo html_entity_decode($compititive[0]->comp_5) @endphp</td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_21">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_21=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_21=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_22">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_22=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_22=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_23">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_23=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_23=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half" >
                                          <select  required id="ad_24">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_24=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_24=="No") selected @endif>No</option>
                                          </select>
                                      </td>
                                      <td class="pt-3-half">
                                          <select  required id="ad_25">
                                              <option value="" selected disabled>select</option>
                                              <option @if($compititive[0]->ad_25=="Yes") selected @endif>Yes</option>
                                              <option  @if($compititive[0]->ad_25=="No") selected @endif>No</option>
                                          </select>
                                      </td>


                                  </tr>
                                  </tbody>
                              </table>
                              <button type="submit" class="btn btn-success float-right" id="sub">Save</button>

                       </div> 
                 </div>
             
             </div>
              <button class="btn btn-success float-right" id="compatitive">Next</button>

         </div>
{{-- end of busniess trends--}}




      {{--implementation--}}
            <div class="tab-pane p-5" id="messages9" role="tabpanel" style="padding:40px">
                
               <div class="row mb-5">
                      <div class="col-md-2"></div>
                      <div class="col-md-7" >
                        
                        <div class="form-group">
                          <label class="mb-4">Define your investment terms  (100-400 words)<label class="text-danger h5">*</label></label>
                          <textarea id="mymce11" name="define_your_investment_terms">
                            {{$invest_management[0]->define_your_investment_terms}}</textarea>
                         {!!$errors->first('define_your_investment_terms', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count11" class="float-right"></span><br>
                          <button class="btn btn-success float-right" id="def_investment_btn" >Save</button> 
                        </div><br>

                        <div class="form-group mt-4">
                          <label class="mb-4">Define your plan for management of the received investment amount  (100-400 words)<label class="text-danger h5">*</label></label>
                          <textarea id="mymce12" name="plan_for_management_of__investment">  {{$invest_management[0]->plan_for_management_of__investment}}</textarea>
                         {!!$errors->first('plan_for_management_of__investment', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count12" class="float-right"></span><br>
                           <button class="btn btn-success float-right" id="define_your_plan" >Save</button> 
                        </div><br>

                        <div class="form-group">
                          <label class="mb-4">Breakdown the costs you will use the investment amount for?  (100-400 words)<label class="text-danger h5">*</label></label>
                          <textarea id="mymce13" name="breakdown_the_costs">
                            {{$invest_management[0]->breakdown_the_costs}}</textarea>
                         {!!$errors->first('breakdown_the_costs', '<small class="ml-2 text-danger">:message</small>')!!}
                           <span id="character_count13" class="float-right"></span>
                        </div><br>
                        <button class="btn btn-success float-right" id="breakdown_btn" >Save</button> 


                    </div>

                    </div> 

                  </form>

             <div class="con"> 
                <div class="row">
                 <div class="col-md-1"></div>              
                 <div class="col-md-3"><label >Implementation Plan<label class="text-danger">*</label></label></div>
               </div> 
                 
           <div class="row"  >
                <div class="col-md-1"></div>            
               <div class="col-md-3 pr-2  p-0 " >
                   <div class="btn btn-success w-100 pt-2 pb-2 mb-1 text-center model-text phase"data-data3="first_phase" data-data4="First Phase" data-toggle="modal" data-target="#phasemodal">First Phase 
                    <i class="mdi mdi-lead-pencil float-right"></i>
                   </div>
                   <div class="bg-light p-4" >
                    @php echo html_entity_decode($implement[0]->phase_first)@endphp</div>
                    <hr>
                    <label class="pb-3">Timeline</label>
                     <label> <strong>{{ $implement[0]->number_1}}&nbsp;{{ $implement[0]->type_1}}</strong>  </label>
                </div>

         
                <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success w-100 pt-2 pb-2 mb-1 text-center model-text phase" data-data3="second_phase" data-data4="Second Phase" data-toggle="modal" data-target="#phasemodal">Second Phase  
                    <i class="mdi mdi-lead-pencil float-right"></i>
                   </div>
                   <div class="bg-light p-4" >
                    @php echo html_entity_decode($implement[0]->phase_second)@endphp</div>
                    <hr>
                    <label class="pb-3">Timeline</label>
                     <label> <strong>{{ $implement[0]->number_2}}&nbsp;{{ $implement[0]->type_2}}</strong>  </label>
                </div>

          
               <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success w-100 pt-2 pb-2 mb-1 text-center model-text phase"  data-data3="third_phase" data-data4="Third Phase" data-toggle="modal" data-target="#phasemodal">Third Phase 
                    <i class="mdi mdi-lead-pencil float-right"></i>
                   </div>
                   <div class="bg-light p-4" >
                    @php echo html_entity_decode($implement[0]->phase_third)@endphp</div>
                    <hr>
                    <label class="pb-3">Timeline</label>
                     <label> <strong>{{ $implement[0]->number_3}}&nbsp;{{ $implement[0]->type_3}}</strong>  </label>
                </div>


            </div>
             </div>

                <input type="submit" id="implementation" value="Next" class="btn btn-success float-right"  >
                </form>
            </div>

{{-- end of implementation--}}


{{---upload--}}
            <div class="tab-pane p-20" id="messages4" role="tabpanel" style="padding:40px">
                <div class="row mb-5">

                    <div class="col-md-6" >
                       <div class="form-group">
                           <form action="{{url('ad/idea/busniess_logo/update')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <label class="card-title">Business Logo <small>(jpg,jpeg,png  5MB)</small></label>
                           <input type="file" id="input-file-now" name="busniess_logo" class="dropify" data-allowed-file-extensions="png jpg jpeg" data-max-file-size-preview="5M" />
                           <button data-toggle="tooltip" data-placement="top" data-original-title="upload" type="submit" class="btn btn-success mt-1 float-right" ><i class="mdi mdi-upload"></i> Upload</button>
                          <input type="hidden" name="hide_input" value="{{$ent_id}}">

                           {!!$errors->first('busniess_logo', '<small class="ml-2 text-danger">:message</small>')!!}
                       </form>  
                       </div>
                   </div>  
       
                <div class="col-md-6">
                   <div class="form-group">
                       <form action="{{url('ad/idea/pitch_deck/update')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <label class="card-title">Pitch Deck <small>(pdf 5MB)</small></label> 
                           <input type="file" id="input-file-now1" name="pitch_deck" class="dropify" data-allowed-file-extensions="pdf" data-max-file-size-preview="5M" />
                           <button data-toggle="tooltip" data-placement="top" data-original-title="upload" type="submit" class="btn btn-success mt-1 float-right" ><i class="mdi mdi-upload"></i> Upload</button>
                           <input type="hidden" name="hide_input" value="{{$ent_id}}">

                           {!!$errors->first('pitch_deck', '<small class="ml-2 text-danger">:message</small>')!!}
                       </form>
                   </div>
               </div>
               
           </div>

    
                 <button type="Submit" id="submit" class="btn btn-success float-right ml-1">Submit</button>
                 <a href="{{url('ent/idea/profile')}}"><button type="button"  class="btn btn-info float-right">Preview</button></a>
                 </form>
         </div>
            {{--end of upload--}}
         </div><!--  end of tab-content -->
     </div><!-- end of card body     -->
</div><!-- end of card -->


{{--modals--}}



    <div id="myModal" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                 <form action="" method="post" id="model_busniess">
                 @csrf   
                 <div class="form-group">
                    <textarea name="buniess_modle" id="mymce5"></textarea>
                    <input type="hidden" name="bus_hide" id="bus_hide">
                     <span id="character_count5" class="float-right"></span>
                 </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="busniess_submit" class="btn btn-success" >Save</button>
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                  </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- /.modal -->
     <div id="phasemodal" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title myModalLabel" id="myModalLabel"></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                 <form action="" method="post" id="implement">
                 @csrf   
                  <h6>Insert Phase Activities <small class="text-danger">*</small></h6>
                 <div class="form-group">
                    <textarea name="implementation_activity" id="mymce6" ></textarea>
                     <span id="character_count6" class="float-right"></span>
                 </div>
                 <input type="hidden" name="phasetype" id="phasetype">
               <label>Timeline <small class="text-danger">*</small></label>  
                 <div class="row ml-2">   
                 <div class="col-md-5">                  
                <div class="form-group">
                  <select class="form-control" name="number"  id="number_timeline" required>
                    <option value="" disabled selected>select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select> 
                  </div>
               </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <select  name="type" required id="type_timeline">
                          <option value="" selected disabled>select</option>
                          <option>Day</option>
                          <option>Week</option>
                          <option>Month</option>
                          <option>Year</option>
                        </select>
                    </div>  

                 </div> 
               </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="phaseSubmit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                  </form>
                </div>
            </div>
                    





          
            </div>
        </div>
    </div>
</div>

<!-- row -->








@endsection
@section('page_title')
Business Application
@endsection
@section('page_directory')
Business Application
@endsection


@section('jquery')
<script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
 <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
 <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('public/assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{asset('public/page_js/idea.js')}}"></script>


<script type="text/javascript">
  $('select').addClass('form-control');
        @if(!empty($ent->logo))
        $("#input-file-now").attr("data-default-file", "{{url('storage/app')}}/{{$ent->logo}}");
        @endif
   
        @if(!empty($ent->pitch_presentation))
        $("#input-file-now1").attr("data-default-file", "{{url('storage/app')}}/{{$ent->pitch_presentation}}");
        @endif
     
        $('.dropify').dropify();
</script>




@if(session()->has('note'))
<script>
  $(document).ready(function(){
     Swal.fire("Good job!", "Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.", "success");
  });

</script>
@endif  

   @if(session()->has('notif'))
   <script>
  $(document).ready(function(){
  $.toast({
   heading: '<small>{{session()->get("notif")}}</small>',
  // text: 'Use the predefined ones, or specify a custom position object.',
  position: 'top-right',
  loaderBg:'#2cdd9b',
  icon: 'success',
  hideAfter: 4500, 
  stack: 7
});

});
    
</script>       
@endif
<script>
  $(document).ready(function () {
  $('body').on('click','.phase',function(){ 

    var phase_type=$(this).attr('data-data3');
    var lable = $(this).attr('data-data4');
     var hide_input=$('#hide_input').val();

      url ='{{url("ad/idea/implement_plan")}}'+'/'+hide_input;

    $.get(url,function(data){
     data=JSON.parse(data);

    if (data!==null) {

      if (phase_type=="first_phase") {
      tinymce.get("mymce6").setContent(data[0]['phase_first']);
      $('#number_timeline').val(data[0]['number_1']).trigger('change');
      $('#type_timeline').val(data[0]['type_1']).trigger('change');
      // alert(data[0]['number_1']);
      }
       if (phase_type=="second_phase") {
      tinymce.get("mymce6").setContent(data[0]['phase_second']);
      $('#number_timeline').val(data[0]['number_2']).trigger('change');;
      $('#type_timeline').val(data[0]['type_2']).trigger('change');;

      }
        if (phase_type=="third_phase") {
      tinymce.get("mymce6").setContent(data[0]['phase_third']);
      $('#number_timeline').val(data[0]['number_3']).trigger('change');;
      $('#type_timeline').val(data[0]['type_3']).trigger('change');
      }
    }else{
      tinymce.get("mymce6").setContent('');    
      $('#type_timeline').val('').trigger('change');
      $('#number_timeline').val('').trigger('change');;

    }

    });
    $('#phasetype').val(phase_type);
    $('.myModalLabel').html(lable);  
  });
});
    $(document).ready(function() {  
      $('#status').change(function () {
        var val=$(this).val();
        url ="{{url('ad/change/entre/status')}}/"+'{{$ent->entrepreneurs_id}}'+'/'+val;
          $.get(url,function(data){
            location.reload(true);
            });
      });
   });
    $(document).ready(function() {  
      $('#catagory').change(function () {
        var val=$(this).val();
        url ="{{url('ad/change/entre/catagory')}}/"+'{{$ent->entrepreneurs_id}}'+'/'+val;
          $.get(url,function(data){
            location.reload(true);
            });
      });
   });
    
    // ajax requests
  $(".delete").click(function () {
          id = $(this).attr('data-id');
          url = '{{url("ad/idea/add/team/member/delete")}}/'+id;
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
    //   


jQuery("#first").submit(function(e){
  $('#sub1').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    
    var hide_input=$('#hide_input').val();
    var idea_name=$('#idea_name').val();
    var establishment_date=$('.establishment_date').val();
    var mainimum_amount=$('#mainimum_amount').val();
    var rounds_of_investment=$('#rounds_of_investment').val();
    var business_sector=$('#business_sector').val();
    var team_size=$('#team_size').val();
    var youtube=$('#youtube').val();

    
    var url ="{{url('ad/idea/profile/update')}}";

    $.ajax({
    type:'POST',
     url:url,
     data: {idea_name:idea_name,
            establishment_date:establishment_date,
            mainimum_amount:mainimum_amount,
           business_sector:business_sector,
           rounds_of_investment:rounds_of_investment,
           team_size:team_size,
           youtube:youtube,
           hide_input:hide_input,
        },
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
        console.log(data);
      $('.third_tab').click();  
    $('#sub1').html('Save').attr('disabled',false);  
    $('html, body').animate({scrollTop:0}, '300');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});

    
$('#elavator_picth_btn').click(function(){ 
  $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    var hide_input=$('#hide_input').val();

    var body = tinymce.get("mymce2").getContent();
    var inputdata = JSON.stringify({'inputdata':body});


    var url ="{{url('ent/idea/profile/edit/elevator')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,hide_input:hide_input},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    //   $('.forth_tab').click();  
    $('#elavator_picth_btn').html('Save').attr('disabled',false);  
    $('html, body').animate({scrollTop:0}, '300');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});

$('#problem_btn').click(function(){ 
  $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
      var hide_input=$('#hide_input').val();
    var body = tinymce.get("mymce3").getContent();
    var inputdata = JSON.stringify({'inputdata':body});


    var url ="{{url('ad/idea/profile/edit/problem')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,hide_input:hide_input},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    //   $('.forth_tab').click();  
    $('#problem_btn').html('Save').attr('disabled',false);  
    $('html, body').animate({scrollTop:0}, '300');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});


$('#solution_btn').click(function(){ 
  $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    var body = tinymce.get("mymce4").getContent();
    var inputdata = JSON.stringify({'inputdata':body});

      var hide_input=$('#hide_input').val();

    var url ="{{url('ad/idea/profile/edit/solution')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,hide_input:hide_input},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    //   $('.forth_tab').click();  
    $('#solution_btn').html('Save').attr('disabled',false);  
    // $('html, body').animate({scrollTop:0}, '300');
        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

});

$('body').on('click','.data',function (e) {
       var data1=$(this).attr('data-data');
       var data2=$(this).attr('data-data1');
         var hide_input=$('#hide_input').val();

      url ='{{url("ad/idea/busniess_modal_content")}}/'+data2+'/'+hide_input;
    $.get(url,function(data){
     data=JSON.parse(data);
      var a=data[0][data2];
    if (a!==null) {
      tinymce.get("mymce5").setContent(a);
    }else{
      tinymce.get("mymce5").setContent('');    
    }
       $('#myModalLabel').html(data1);
       $('#bus_hide').val(data2);

    });
  });  
jQuery("#model_busniess").submit(function(e){

  $('#busniess_submit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    var body = tinymce.get("mymce5").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
     var hide_input=$('#hide_input').val();

    var hide=$('#bus_hide').val();


    var url ="{{url('ad/idea/busniess_model_store')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,hide:hide,hide_input:hide_input},
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
    $('#messages5').load(document.URL +  ' #messages5');
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

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
         var hide_input=$('#hide_input').val();
  
    var url="{{url('ad/idea/the_market_store')}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata,hide_input:hide_input},
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

$("#bsniess__trends_submit").click(function(e){
 $('#bsniess__trends_submit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
     var hide_input=$('#hide_input').val();
     var body=$('.trends_table').html();
    var inputdata = JSON.stringify({'inputdata':body});


    var url ="{{url('ad/idea/busness_trends_add')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {hide_input:hide_input,inputdata:inputdata},
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
    var hide_input=$('#hide_input').val();

    var inputdata = JSON.stringify({'inputdata':body});
    var url="{{url('ad/idea/risk_a_add')}}";
     $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
           }
       });
     $.ajax({
       type:'POST',
        url:url,
        data: {inputdata:inputdata,hide_input:hide_input},
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
$("#sub").click(function(e){
    $("#sub").html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);
    var hide_input=$('#hide_input').val();

   $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    // e.preventDefault();
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
           url:"{{ url('ad/compatitive_advantage') }}",
           data:{hide_input:hide_input,ad_1:ad_1,ad_2:ad_2,ad_3:ad_3,ad_4:ad_4,ad_5:ad_5,ad_6:ad_6,ad_7:ad_7,ad_8:ad_8,ad_9:ad_9,ad_10:ad_10,ad_11:ad_11,ad_12:ad_12,ad_13:ad_13,ad_14:ad_14,ad_15:ad_15,ad_16:ad_16,ad_17:ad_17,ad_18:ad_18,ad_19:ad_19,ad_20:ad_20,ad_21:ad_21,
           ad_22:ad_22,ad_23:ad_23,ad_24:ad_24,ad_25:ad_25,advan_1:advan_1,advan_2:advan_2,advan_3:advan_3,advan_4:advan_4,advan_5:advan_5,comp_1:comp_1,comp_2:comp_2,comp_3:comp_3,comp_4:comp_4,comp_5:comp_5,
           },
           success:function(data){

               $.toast({
                 heading: '<small>{{"Information update successfully!"}}</small>',
                position: 'top-right',
                loaderBg:'#2cdd9b',
                icon: 'success',
                hideAfter: 4500, 
                stack: 7
              });
              $('#sub').html('Save').attr('disabled',false);
             
           }
        });
  
});
 


$('#def_investment_btn').click(function(){

    $(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
        var body = tinymce.get("mymce11").getContent();
       var inputdata = JSON.stringify({'inputdata':body});
         var hide_input=$('#hide_input').val();

    var url="{{url('ad/idea/store_define_invest')}}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata,hide_input:hide_input},
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
     var hide_input=$('#hide_input').val();
    var url="{{url('ad/idea/store_define_invest_plan')}}";

  $.ajax({
    type:'POST',
    url:url,
    data: {hide_input:hide_input,inputdata:inputdata},
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
     var hide_input=$('#hide_input').val();
    var url="{{url('ad/idea/store_define_invest_breakdown')}}";
 
    $.ajax({
        type:'POST',
        url:url,
        data: {inputdata:inputdata,hide_input:hide_input},
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




jQuery("#implement").submit(function(e){
  $('#phaseSubmit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
    var body = tinymce.get("mymce6").getContent();
    var inputdata = JSON.stringify({'inputdata':body});
    var number_timeline=$('#number_timeline').val();
    var type_timeline=$('#type_timeline').val();
    var phasetype=$('#phasetype').val();
     var hide_input=$('#hide_input').val();

    
    
    var url ="{{url('ad/idea/store_implement_phase')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {inputdata:inputdata,
             number_timeline:number_timeline,
             type_timeline:type_timeline,
             phasetype:phasetype,hide_input:hide_input},
     success:function(data){ 
        $.toast({
           heading: '<small>{{"Information updated successfully!"}}</small>',
           position: 'top-right',
            loaderBg:'#2cdd9b',
            icon: 'success',
            hideAfter: 4500, 
            stack: 7
        });
    //   $('.forth_tab').click();  
    $('#phaseSubmit').html('Save').attr('disabled',false);  
    // $('html, body').animate({scrollTop:0}, '300');
    $('.con').load(window.location.href+ " .con");

        
    },
    error:function(jqxhr, status, exception){
        alert('Exception:', exception);
    }
    });
  e.preventDefault();  

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
   var hide_input=$('#hide_input').val();
 
  var url ="{{url('ad/idea/financial/first')}}";
  $.ajax({
  type:'POST',
   url:url,
   data: {hide_input:hide_input,
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
 var hide_input=$('#hide_input').val();


 var url ="{{url('ad/idea/financial/second')}}";
 $.ajax({
 type:'POST',
  url:url,
  data: {hide_input:hide_input,operation_payroll:operation_payroll,
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
 var hide_input=$('#hide_input').val();

 var url ="{{url('ad/idea/financial/forth')}}";
 $.ajax({
 type:'POST',
  url:url,
  data: {hide_input:hide_input,f_number_of_products_sold:f_number_of_products_sold,
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
  var hide_input=$('#hide_input').val();


 var url ="{{url('ad/idea/financial/third')}}";
 $.ajax({
 type:'POST',
  url:url,
  data: {hide_input:hide_input,f_fixed_cost_per_unit:f_fixed_cost_per_unit,
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
</script>
@endsection
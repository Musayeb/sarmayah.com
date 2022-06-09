   @extends('master')
   @section('title')
    Sarmayah.com - Investment Opportunities in Afghanistan
   @endsection

   @section('css')
    <link rel="stylesheet" media="screen" href="{{asset('public/web_assist/particles/css/style.css')}}">
   @endsection
   @section('styles')
  
  
@endsection


 @section('content')
 

<div id="particles-js"></div>

 <section class=" container viewport-header bg "  >
            <div class="row align-items-center justify-content-center home_row ">
               <div class="col-lg-5">
                  <img class="img-fluid" src="{{asset('public/web_assist/images/investment_search.png')}}" alt='' />
               </div>
               <div class="col-lg-7 search w-100">
                  <div class="homepage-search-title">
                   <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold" >Find the right business to invest</h1>
                     <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal"> A platform to connect entrepreneurs to investors.
                     </h5>
                  </div>
                <div class="homepage-search-form">
                   <form  action="{{url('serach/business')}}" method="get">

                        <div class="form-row">
                           <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                              <div class="location-dropdown">
                                 <i class="icofont-location-arrow"></i>
                                 <select  required class="custom-select form-control border-0 shadow-sm form-control-lg" name="sector" >
                                    <option disabled selected value="" >Sector </option>
                                    @foreach($sectors as $rows)
                                    <option value="{{$rows->slug}}">{{$rows->sector_name}} </option>
                                     @endforeach        
                                    </select>
                              </div>
                           </div>
                               <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                              <div class="location-dropdown">
                                 <i class="icofont-location-arrow"></i>
                                 <select required class="custom-select form-control border-0 shadow-sm form-control-lg" name="catagory" >
                                    <option disabled selected value="">Category </option>
                                    <option value="IDEA">IDEA </option>
                                    <option value="STARTUP">STARTUP </option>
                                    <option value="SME">GROWTH</option>                                       
                                    </select>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                              <input type="text" name="name" placeholder="Find Businesses..."
                                 class="form-control border-0 form-control-lg shadow-sm">
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                              <button type="submit"
                                 class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i
                                 class="fa fa-search"></i></button>
                           </div>
                         </div>

                     </form>
                    @if(count($popular)>0)
                  <div class="popular">
                     <span class="text-body-2">Popular</span>
                     <ul>
                      @foreach($popular as $pop)
                        <li><a href="#" class="text-body-2">{{$pop->sector_name}}</a></li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
               
               </div>
            </div>

    </div>
</section>

 

      <div class=" bg-white ">
         <div class="container pt-5 pb-3">
         <h3 class="text-dark p-2 font-weight-bold" style="font-:bold;font-size:20px">Introduction</h3>

            <div class="testimonial">
               <div class="row pb-0 mb-0 bg-white">
                  <div class="col-md-6" style="">                 
                  <iframe style="width:100%;height:100%" height="307" id="video" src="https://www.youtube.com/embed/FRw5dO546ZE"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                  
                  </div>
               
               <div class="col-md-6">
                <div class="p-4">
                     <h5>About Us</h5>
                  <p class="mb-3" style="text-align: justify;text-justify: inter-word">Sarmayah.com is a matchmaking platform that connects investors with businesses in three different stages of ideation, startup, and growth. Sarmayah.com provides the technology that an investor can deeply analyze, and ultimately find and fund their favorite investment opportunities.
                  </p>
                  <h5 class="mt-2" style="text-align: justify;text-justify: inter-word">Our Mission</h5>
                  <p>Our mission is to  help investors find and invest in commercially viable businesses.</p>
                  <h5 class="mt-4" style="text-align: justify;text-justify: inter-word">Our Goal</h5>
                  <p>Our goal is to provide a platform where people can easily invest in businesses.</p>
               </div>
            </div>
         </div>
      </div>
   </div> 

    <section class="py-5 mt-5 bg-light" >
         <div class="view_slider recommended" style="marginn: 0px 0px">
            <div class="container" >
                     <h3 class="text-dark font-weight-bold">Featured Businesses </h3>
                     <div class="view recent-slider recommended-slider" >
            
                   @foreach($ent as $row)
                      <div class="product_card" >
                           <span class="product_cards">{{$row->sector_name}}</span>
                          <a href="{{url('business/p/')}}/business={{$row->slug}}">   
                         <div style="width:100%;height:214px;text-align: center;" class="bg-white">
                          @if(empty($row->logo))
                          <img  style="margin:auto;display: block;width:100px;height:100px;position:relative;top:28%"
                           src="{{url('public/web_assist/images/empty_img.png')}}"/>
                           @else
                          <img  style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;width:100%;height:214px"
                           src="{{url('storage/app')}}/{{$row->logo}}"/>
                            @endif
                           </div>
                          </a>
                           <div class="inner-slider">
                              <div class="inner-wrapper">
                                 <div class="d-flex align-items-center">
                                    <span class="seller-image">
                                   <img   
                                       src="@if(empty($row->profile_pic)) {{url('public/web_assist/images/person_empty.png')}} @else{{url('storage/app')}}/{{$row->profile_pic}} @endif"
                                       alt='' />
                                    </span>
                                    <span class="seller-name">
                                    <a href="{{url('business/p/')}}/business={{$row->slug}}">{{$row->startup_name}} {{$row->company_name}}
                                    </a>
                                  </span>
                                 </div>
                                 <a href="{{url('business/p/')}}/business={{$row->slug}}" 
                                  style="text-decoration:none;color:inherit;">
                                <div class="content-info" style="padding:0px">
                                    <div class="rating-wrapper" style="text-align: justify;text-justify: inter-word;">
                                     <div style="height:150px;overflow:hidden;" class="dropdown-notifications-item-content-text dropdown-notifications-item-content">

                                       @php 
                                     $text=html_entity_decode($row->elavator_picth);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 20));
                                       echo $final.'...';
                                      @endphp

                                       </div>
                                    </div>
                                 </div>
                                 </a>

                                  <div class="footer">
                                    @if($row->catagory=="STARTUP")
                                    <span class="badge badge-primary">{{$row->catagory}}</span>
                                    @endif
                                      @if($row->catagory=="SME")
                                    <span class="badge badge-success">{{"GROWTH"}}</span>
                                    @endif  @if($row->catagory=="IDEA")
                                    <span class="badge badge-warning">{{$row->catagory}}</span>
                                    @endif
                                    <div class="price p-0">
                                       @php
                                          $checkInvest=DB::table('investment_processes')->where('entrepreneurs_id',$row->entrepreneurs_id)->get();
                                          @endphp
                                           @if($checkInvest->isEmpty())
                                          <small class="p-0"> Required Investment {{'$'.number_format($row->mainimum_amount_looking, 2, '.', ',')}}</small>
                                            @elseif($checkInvest[0]->status=="Matched")
                                            <span class="badge badge-success">{{'Achieved'}}</span>
                                          @else
                                          <small class="p-0"> Required Investment {{'$'.number_format($row->mainimum_amount_looking, 2, '.', ',')}}</small>
                                        @endif
                                    </div>
                                 </div>
                              </div>
                           
                           </div>
                        </div>

                    @endforeach

                  
         
                  </div>
                </div>
               </div>
            </div>
         </div>
      </section>

      <!--    about section -->
      <div class="market-wrapper py-5 bg-white">
         <div class="container">
            <h3 class="text-center font-weight-bold" style="font-size:20px">Sectorial Investment</h3>
         
            <ul class="categories-list mb-0">
              @foreach($sectors as $sec)
               <li>
                  <a href="{{url('sectors/business/')}}/sector={{$sec->slug}}">
                  <img src="{{url('storage/app')}}/{{$sec->sector_photo}}" 
                  alt="{{$sec->sector_name}}" >{{$sec->sector_name}}
                  </a>
               </li>
               @endforeach
            </ul>
         </div>
      </div>
       <!--       guides  -->
       <section class="py-5 mt-5 bg-light">
         <div class="view_slider recommended">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 ">
                     <h3 class="text-dark font-weight-bold" style="font-size:20px">Guides </h3>
                     <div class="view recent-slider recommended-slider">
                           @php $blog=DB::table('blogs')->where('type',null)->limit(5)->orderBy('blog_reg_date','DESC')->get(); @endphp
                        @foreach($blog as $ro)
                           <div class="col-md-12 bg-white p-2">
                              <a href="{{url('/blog')}}/{{$ro->slug}}" class="guide" style="text-align:center;text-decoration:none;color:inherit;">
                                 <img src="{{url('storage/app')}}/{{$ro->blog_feture_img}}" class="img-fluid" style="object-fit: contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;">
                                 <div class="content">
                               
                                    <div style="height:200px;overflow:hidden" class="pl-2 pr-2 pb-3" >
                                    @php  $newDate1 = date("F d, Y", strtotime($ro->blog_reg_date)); @endphp
                                    <label style="text-align:left">{{$newDate1}}</label><br>
                                    <strong style="font-size:15px"> {{$ro->blog_title}}</strong>

                                     <p class="show-read-more" >
                                   @php 
                                     $text=html_entity_decode($ro->blog_content);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 40));
                                       echo $final.'...';
                                      @endphp
                                  </p> 
                                    </div>
                                 </div>
                                 <button class="btn btn-success mt-3" style=" text-align: center;">Read More</button>
                              </a>
                           </div>
                         @endforeach
             
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> 
   </div>    
</div>
  

      <!--    about section -->
      <section class="bg-white ">
         <div class="container py-5">
            <div class="about-section">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <h3 class="font-weight-bold mb-5" style="font-size:20px">Type of Businesses in Sarmayah.com </h3>


                    <div class="row  mb-3 txt-center">
                        <div class="col-md-4 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                            <img src="{{asset('public/web_assist/images/i.png')}}" alt="" class="rounded-circle " style="width:50px;">
                            <label class="mt-3">Idea Stage</label>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <p>
                                The business is in formation and validation stage, 
                                it has not been tested yet. The investment is needed 
                                for the business establishment. The platform follows Lean 
                                Startups as the business model for this type of business accounts
                            </p>
                        </div>
                    </div>
                    <div class="row  mb-3 txt-center">
                        <div class="col-md-4 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                            <img src="{{asset('public/web_assist/images/s.png')}}" alt="" class="rounded-circle " style="width:50px;">
                            <label class="mt-3">Startup Stage</label>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <p>
                                The business has been validated, has the prototype ready, 
                                has served its customers and has an age of at least one year. 
                                The business needs investment for expansion. The platform follows 
                                Deciplined Entrepreneurship as the business model for this type of business accounts.
                            </p>
                        </div>
                    </div>
                    <div class="row  mb-3 txt-center">
                        <div class="col-md-4 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                            <img src="{{asset('public/web_assist/images/g.png')}}" alt="" class="rounded-circle " style="width:50px;">
                            <label class="mt-3">Growth Stage</label>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <p>The business has active operations in the market, active sales, 
                                has created employment. The investment is needed for expansion 
                                through launching new products or testing new market. The platform 
                                follows Deciplined Entrepreneurship as the business model for this 
                                type of business accounts.
                            </p>
                        </div>
                    </div>
     
        

                  </div>
                  <div class="col-md-6">
                     <img src="{{asset('public/web_assist/images/get.png')}}" class="video-img w-100">
                  </div>
               </div>
            </div>
         </div>
          <div class="container pb-3 mt-3">
         <div class="get-started bg-white" style="background-image:none !important;">
            <div class="content">
               <h2> Find your favorite investment opportunities and invest today!</h2>
               <p> We bridge the gap of connecting the investors to entrepreneurs</p>
               <a href="{{url('registration')}}" class="c-btn c-fill-color-btn">Register - It’s FREE!</a>
            </div>
         </div>
       </div>

      </section>

   @endsection

   @section('jquery')
    <script src="{{asset('public/web_assist/particles/particles.js')}}"></script>
    <script src="{{asset('public/web_assist/particles/js/app.js')}}" ></script>
     
          @if(session()->has('error'))
                 <script>
    $.toast({
               heading: '<small>{{session()->get("error")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'error',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
            @endif
   @endsection
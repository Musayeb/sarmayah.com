@extends('master')
@section('title')
Grouth Add Team Member - Sarmayah.com
@endsection

@section('css')
<link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">

@endsection
@section('styles')
 body{overflow-x:hidden;}
@endsection
@section('content')
  <div class="py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-2"></div>
               <main class="col-md-8">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3 mt-2">
                        <h6 class="m-0">Add New Member</h6>
                     </div>

                     <div class="box-body pl-5 pr-5 pt-2 mt-2">
                           <form class="js-validate" action="{{url('ent/sme/add/team/member/add')}}" method="post"
                           enctype="multipart/form-data">
                            @csrf
                           <div class="row">
                              <!-- Input -->
                              <div class="col-sm-6 mb-2">
                                 <div class="js-form-message">
                                    <label id="nameLabel" class="form-label">
                                    Full  Name
                                    <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                  <input type="text" class="form-control" value="{{old('full_name')}}" name="full_name" placeholder="Full Name">
                          {!!$errors->first('full_name', '<small class="text-danger ml-2">:message</small>')!!}

                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                              <!-- Input -->
                              <div class="col-sm-6 mb-2">
                                 <div class="js-form-message">
                                    <label id="usernameLabel" class="form-label">
                                    Position<span class="text-danger">*</span></label>
                                    <div class="form-group">

			                  <input  type="text" class="tagator form-control" name="position" 
                               data-tagator-show-all-options-on-focus="true" placeholder="Position"   data-tagator-autocomplete="['Founder', 'Co-Founder', 'CEO', 'Chief Financial Officer', 'Partner','Advisor']">
                                  {!!$errors->first('position', '<small class="text-danger ml-2">:message</small>')!!}

                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                           </div>
                      
                           <div class="row">
                              <!-- Input -->
                              <div class="col-md-12 mb-3 mb-sm-6">
                                 <div class="js-form-message">
                                   <label class="form-label" >
                                    Short Bio &nbsp;(Maximum words 50)<span class="text-danger">*</span></label>
                               	
                               		<div class="form-group">
                               		<textarea id="mymce1" name="bio">{{old('bio')}}</textarea>	
                               		<span id="character_count1" class="float-right"></span>
                                     {!!$errors->first('bio', '<small class="text-danger ml-2">:message</small>')!!}
                               		</div>	
                                 </div>
                              </div>
                              <!-- End Input -->
                            </div>
                           <div class="row">
                              <div class="col-md-12 mb-3 mb-sm-6">

                       	    <div class="js-form-message">
                               <label class="form-label">Photo <span class="text-danger">*</span></label>
                           		<div class="form-group">
                           			<input type="file" name="photo" class="form-control">
                             {!!$errors->first('photo', '<small class="text-danger ml-2">:message</small>')!!}
                         		</div>
                            </div>		
                           </div> 
                         </div>

	 					  <div class="row">
	                           <div class="col-md-12 mb-3">
	                              <div class="js-form-message">
	                           <input type="submit" id="Submit" value="Submit" class="btn btn-success float-right mb-1" >
	                        </form>    
	                    </div>


                     </div>

                  </div>
             
              </main>
          </div>
    </div>
</div>
  

@endsection


@section('jquery')
<script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>


<script type="text/javascript">
   // window.onload = function () {
    $(document).ready(function(){
	tinymce.init({
      selector: 'textarea#mymce1',
          plugins: [
              "advlist autolink link  lists "],
          entity_encoding :"raw",
          entity_decoding :"raw",
          verify_html :false,
          cleanup : true,
          branding:false,
          theme: 'modern',

        height:200,
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce1").getBody();
           var content = tinymce.trim(body.innerText);
           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length>50) {
              $('#character_count1').css("color", "#e83b3b");
              $('#Submit').attr('disabled',true);

        
            }else{
              $('#character_count1').css("color","#272526");
              $('#Submit').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count1").innerHTML =resultArray.length+' WORDS';
      });

  },
});

});
</script>
@endsection
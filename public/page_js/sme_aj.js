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
                        $(".t-progress").html(percentComplete+'%');
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
            $("#input-file-now3").val('');
            return false;
        }
        else if(size>2000000){
          alert('Please select a file less then 2 MB');
            $("#input-file-now3").val('');
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
                        $(".second").html(percentComplete+'%');
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
                        $(".third").html(percentComplete+'%');
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
            alert('Please select a valid file (JPEG/JPG/PNG/GIF)');
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
                        $(".fourth").html(percentComplete+'%');
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
                        $(".fived").html(percentComplete+'%');
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
                        $(".six").html(percentComplete+'%');
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
                        $(".seven").html(percentComplete+'%');
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
    var rounds_of_investment=$('#rounds_of_investment').val();
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
           rounds_of_investment:rounds_of_investment,
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
jQuery("#for").submit(function(e){
 $('#bsniess__trends_submit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });

    var social_f=$('#social_f').val();
    var Political_f=$('#Political_f').val();
    var security_f=$('#security_f').val();
    var technology_f=$('#technology_f').val();
    var economic_f=$('#economic_f').val();
    var social_u=$('#social_u').val();
    var Political_u=$('#Political_u').val();
    var security_u=$('#security_u').val();
    var technology_u=$('#technology_u').val();
    var economic_u=$('#economic_u').val();
    var social_fa=$('#social_fa').val();
    var Political_fa=$('#Political_fa').val();
    var security_fa=$('#security_fa').val();
    var technology_fa=$('#technology_fa').val();
    var economic_fa=$('#economic_fa').val();
    var url ="{{url('ent/gr/busness_trends_add')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {social_f:social_f,Political_f:Political_f,security_f:security_f,technology_f:technology_f,economic_f:economic_f,social_u:social_u,Political_u:Political_u,
     security_u:security_u,technology_u:technology_u,economic_u:economic_u,social_fa:social_fa,Political_fa:Political_fa,security_fa:security_fa,technology_fa:technology_fa,economic_fa:economic_fa},
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
        // alert('salaam');
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
    $.get(url,function(data){
       location.href=url;
    });
});
  // endof form

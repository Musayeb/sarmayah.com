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

jQuery("#for").submit(function(e){
 $('#bsniess__trends_submit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp;Saving....').attr('disabled',true);  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        }
    });
             var hide_input=$('#hide_input').val();


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
    var url ="{{url('ad/idea/busness_trends_add')}}";
    $.ajax({
    type:'POST',
     url:url,
     data: {hide_input:hide_input,social_f:social_f,Political_f:Political_f,security_f:security_f,technology_f:technology_f,economic_f:economic_f,social_u:social_u,Political_u:Political_u,
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
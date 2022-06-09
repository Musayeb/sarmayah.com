
  $('#youtube').change(function() {
    var val=$(this).val();

        var p = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;  
    
      if (val.match(p)) {
        $('#sub1').prop('disabled',false); 
      }else{
         alert('youtube url is Wrong !');
          $('#sub1').prop('disabled',true); 
      }
  });



  $(document).ready(function() {

   tinymce.init({
      selector: 'textarea#mymce2',
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
         menubar : false,
            height:400,
            setup: function (ed) {
      ed.on('keyup', function (e) { 
         var body = tinymce.get("mymce2").getBody();
                     var content = tinymce.trim(body.innerText);

                     var resultArray = [];
                    var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
                    var wordArray = str.split(" ");
                    for (var i = 0; i < wordArray.length; i++) {
                      var item = wordArray[i].trim();
                      if(item.length > 0){
                        resultArray.push(item);
                      }
                      if (resultArray.length<200||resultArray.length>400) {
                        $('#character_count2').css("color", "#e83b3b");
                        $('#elavator_picth_btn').attr('disabled',true);
                      }else{
                        $('#character_count2').css("color", "#272526");
                        $('#elavator_picth_btn').attr('disabled',false);
                      }
                   }                     
            document.querySelector("#character_count2").innerHTML =resultArray.length+' WORDS';
      });
    
  },

});


   tinymce.init({
      selector: 'textarea#mymce3',
      height:400,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
              
          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
       menubar : false,
        setup: function (ed) {
      ed.on('keyup', function (e) { 
    var body = tinymce.get("mymce3").getBody();
         var content = tinymce.trim(body.innerText);

         var resultArray = [];
        var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
        var wordArray = str.split(" ");
        for (var i = 0; i < wordArray.length; i++) {
          var item = wordArray[i].trim();
          if(item.length > 0){
            resultArray.push(item);
          }
          if (resultArray.length<200||resultArray.length>400) {
            $('#character_count3').css("color", "#e83b3b");
            // $('#problem').css("color", "#e83b3b");
            $('#problem_btn').attr('disabled',true);
          }else{
            $('#character_count3').css("color","#272526");
            // $('#problem').css("color", "#272526");
            $('#problem_btn').attr('disabled',false);

          }
       }                     
        document.querySelector("#character_count3").innerHTML =resultArray.length+' WORDS';
      });
      
  },
       
    });
      tinymce.init({
      selector: 'textarea#mymce7',
      height:400,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
       menubar : false,
      setup: function (ed) {
      ed.on('keyup', function (e) { 
     var body = tinymce.get("mymce7").getBody();
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
            $('#market__position_summary_error').css("color", "#e83b3b");
            // $('#problem').css("color", "#e83b3b");
            $('#market').attr('disabled',true);
          }else{
            $('#market__position_summary_error').css("color","#272526");
            // $('#problem').css("color", "#272526");
            $('#market').attr('disabled',false);

          }
       }                     
        document.querySelector("#market__position_summary_error").innerHTML =resultArray.length+' WORDS';
      });
      
      },
    });
   tinymce.init({
      selector: 'textarea#mymce4',
       height:400,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },

        setup: function (ed) {
      ed.on('keyup', function (e) { 
        var body = tinymce.get("mymce4").getBody();
           var content = tinymce.trim(body.innerText);

           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length<200||resultArray.length>400) {
              $('#character_count4').css("color", "#e83b3b");
              // $('#solution').css("color", "#e83b3b");
              $('#solution_btn').attr('disabled',true);
            }else{
              $('#character_count4').css("color","#272526");
              // $('#solution').css("color", "#272526");
              $('#solution_btn').attr('disabled',false);

            }
         }                     
          document.querySelector("#character_count4").innerHTML =resultArray.length+' WORDS';
      });

  },
     
});
   tinymce.init({
      selector: 'textarea#mymce5',
          height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },

            setup: function (ed) {
      ed.on('keyup', function (e) { 
        var body = tinymce.get("mymce5").getBody();
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
              $('#character_count5').css("color", "#e83b3b");
              $('#busniess_submit').attr('disabled',true);
        
            }else{
              $('#character_count5').css("color","#272526");
              $('#busniess_submit').attr('disabled',false);


            }
         }                     
          document.querySelector("#character_count5").innerHTML =resultArray.length+' WORDS';
      });

  },
});
    tinymce.init({
      selector: 'textarea#mymce6',
           height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },

            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce6").getBody();
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
              $('#character_count6').css("color", "#e83b3b");
              $('#phaseSubmit').attr('disabled',true);

        
            }else{
              $('#character_count6').css("color","#272526");
              $('#phaseSubmit').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count6").innerHTML =resultArray.length+' WORDS';
      });

  },
});
  tinymce.init({
      selector: 'textarea#mymce10',
      height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce10").getBody();
           var content = tinymce.trim(body.innerText);
           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length<200||resultArray.length>400) {
              $('#character_count10').css("color", "#e83b3b");
              $('#the_market_btn').attr('disabled',true);

        
            }else{
              $('#character_count10').css("color","#272526");
              $('#the_market_btn').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count10").innerHTML =resultArray.length+' WORDS';
      });

  },
});    
    tinymce.init({
      selector: 'textarea#mymce11',
        height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce11").getBody();
           var content = tinymce.trim(body.innerText);
           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length<200||resultArray.length>400) {
              $('#character_count11').css("color", "#e83b3b");
              $('#def_investment_btn').attr('disabled',true);

        
            }else{
              $('#character_count11').css("color","#272526");
              $('#def_investment_btn').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count11").innerHTML =resultArray.length+' WORDS';
      });
          tinymce.init({
      selector: 'textarea#mymce12',
       height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
         menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce12").getBody();
           var content = tinymce.trim(body.innerText);
           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length<200||resultArray.length>400) {
              $('#character_count12').css("color", "#e83b3b");
              $('#define_your_plan').attr('disabled',true);
        
            }else{
              $('#character_count12').css("color","#272526");
              $('#define_your_plan').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count12").innerHTML =resultArray.length+' WORDS';
      });

  },
}); 
tinymce.init({
      selector: 'textarea#mymce13',
      height:200,
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
              menubar : false,

          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
        paste_preprocess : function(pl, o) {
          o.content = strip_tags( o.content,'<b><u><i><p>' );
        },

            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce13").getBody();
           var content = tinymce.trim(body.innerText);
           var resultArray = [];
          var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
          var wordArray = str.split(" ");
          for (var i = 0; i < wordArray.length; i++) {
            var item = wordArray[i].trim();
            if(item.length > 0){
              resultArray.push(item);
            }
          if (resultArray.length<200||resultArray.length>300) {
              $('#character_count13').css("color", "#e83b3b");
              $('#breakdown_btn').attr('disabled',true);

        
            }else{
              $('#character_count13').css("color","#272526");
              $('#breakdown_btn').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count13").innerHTML =resultArray.length+' WORDS';
      });

  },
});
  },
        
});    

});

  $(document).ready(function(){
  var d=new Date();
  var year=d.getFullYear();  
  var month=d.getUTCMonth()+1;
  var day=d.getDay();
  if (day>10) {
    day='0'+day;
  }if (month>10) {
    month='0'+month;
  }
  var fulldate=year+'-'+month+'-'+day;
  $('#potential__estab_date').attr('min',fulldate);
  $('.g_year').attr('max',fulldate);

});
$(document).ready(function () {
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
});

// ---------------------------------------------------------------------------------------------------------------
$(document).ready(function () {
$('.a').click(function (e) {
  e.preventDefault();
    $('.a').html('');
    $(this).html('<strong style="font-size:12px">x</strong>');  
});
});
$(document).ready(function () {
$('.c').click(function (e) {
  e.preventDefault();
    $('.c').html('');
    $(this).html('<strong style="font-size:12px">x</strong>');  
});
});
$(document).ready(function () {
$('.d').click(function (e) {
  e.preventDefault();
    $('.d').html('');
    $(this).html('<strong style="font-size:12px">x</strong>');  
});
});
$(document).ready(function () {
$('.e').click(function (e) {
  e.preventDefault();
    $('.e').html('');
    $(this).html('<strong style="font-size:12px">x</strong>');  
});
});

$(document).ready(function () {
  $('#sub12').click(function () {
    var a=$('#table').val($('.table_1').html());
  });
});


 $(document).ready(function () {
  $('.next').click(function () {
    $('.forth_tab').click();
  });
  $('.others_of_itial').css('display','none');
  $('.itial_other_check').change(function () {    
  $('.others_of_itial').toggle(2000);
  });
  });
    $(document).ready(function () {  
  $('.others_of_itial1').css('display','none');
  $('.itial_other_check1').change(function () {    
  $('.others_of_itial1').toggle(2000);
  });
  });

    $(document).ready(function(){
      $('#first_btn').click(function () {
        $('.second_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      
      });
      $('#elavator').click(function(){
        $('.five_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
      $('#busniess_model').click(function(){
        $('.six_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
      $('#market').click(function(){
        $('.seven_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
       
      $('#compatitive').click(function(){
        $('.eight_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
      $('#implementation').click(function(){
        $('.fourth_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
       
      $('#finance').click(function(){
        $('.nine_tab').click();
         $('html, body').animate({scrollTop:0}, '500');
      });
            
      
   });
function strip_tags (str, allowed_tags)
{
    var key = '', allowed = false;
    var matches = [];    var allowed_array = [];
    var allowed_tag = '';
    var i = 0;
    var k = '';
    var html = ''; 
    var replacer = function (search, replace, str) {
        return str.split(search).join(replace);
    };
    // Build allowes tags associative array
    if (allowed_tags) {
        allowed_array = allowed_tags.match(/([a-zA-Z0-9]+)/gi);
    }
    str += '';

    // Match tags
    matches = str.match(/(<\/?[\S][^>]*>)/gi);
    // Go through all HTML tags
    for (key in matches) {
        if (isNaN(key)) {
                // IE7 Hack
            continue;
        }

        // Save HTML tag
        html = matches[key].toString();
        // Is tag not in allowed list? Remove from str!
        allowed = false;

        // Go through all allowed tags
        for (k in allowed_array) {            // Init
            allowed_tag = allowed_array[k];
            i = -1;

            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+'>');}
            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+' ');}
            if (i != 0) { i = html.toLowerCase().indexOf('</'+allowed_tag)   ;}

            // Determine
            if (i == 0) {                allowed = true;
                break;
            }
        }
        if (!allowed) {
            str = replacer(html, "", str); // Custom replace. No regexing
        }
    }
    return str;
}
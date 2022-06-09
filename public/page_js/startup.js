
$('#youtube').change(function() {
    var val=$(this).val();
        var p = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;  
    
      if (val.match(p)) {
        $('#sub12').prop('disabled',false); 
      }else{
         alert('youtube url is Wrong !');
          $('#sub12').prop('disabled',true); 
      }
  });

  window.onload = function () {
  
  tinymce.init({
      selector: 'textarea#mymce1',
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
          if (resultArray.length<200||resultArray.length>400) {
              $('#character_count').css("color", "#e83b3b");
              $('#elavtor_submit').attr('disabled',true);
        
            }else{
              $('#character_count').css("color","#272526");
              $('#elavtor_submit').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count").innerHTML=resultArray.length+' WORDS';
      });

  },
});
 
  tinymce.init({
      selector: 'textarea#mymce2',
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
           height:200,
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
          if (resultArray.length>50) {
              $('#character_count1').css("color", "#e83b3b");
              $('#busniess_submit').attr('disabled',true);
        
            }else{
              $('#character_count1').css("color","#272526");
              $('#busniess_submit').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count1").innerHTML=resultArray.length+' WORDS';
      });

  },
});  
    tinymce.init({
      selector: 'textarea#mymce10',
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
           height:200,
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
           height:200,
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
           height:200,
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
           height:200,
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
          if (resultArray.length<200||resultArray.length>400) {
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
tinymce.init({
      selector: 'textarea#mymce14',
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
           height:200,
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce14").getBody();
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
              $('#character_count14').css("color", "#e83b3b");
              $('#product_specifications').attr('disabled',true);

        
            }else{
              $('#character_count14').css("color","#272526");
              $('#product_specifications').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count14").innerHTML =resultArray.length+' WORDS';
      });

  },
});
tinymce.init({
      selector: 'textarea#mymce15',
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
           height:200,
            setup: function (ed) {
      ed.on('keyup', function (e) { 
           var body = tinymce.get("mymce15").getBody();
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
              $('#character_count15').css("color", "#e83b3b");
              $('#product_need').attr('disabled',true);

        
            }else{
              $('#character_count15').css("color","#272526");
              $('#product_need').attr('disabled',false);
            }
         }                     
          document.querySelector("#character_count15").innerHTML =resultArray.length+' WORDS';
      });

  },
});
tinymce.init({
  selector: 'textarea#mymce16',
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
           height:200,
        setup: function (ed) {
  ed.on('keyup', function (e) { 
       var body = tinymce.get("mymce16").getBody();
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
          $('#character_count16').css("color", "#e83b3b");
          $('#calculate_btn').attr('disabled',true);

    
        }else{
          $('#character_count16').css("color","#272526");
          $('#calculate_btn').attr('disabled',false);
        }
     }                     
      document.querySelector("#character_count16").innerHTML =resultArray.length+' WORDS';
  });

},
});
tinymce.init({
  selector: 'textarea#mymce17',
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
           height:200,
  
        setup: function (ed) {
  ed.on('keyup', function (e) { 
       var body = tinymce.get("mymce17").getBody();
       var content = tinymce.trim(body.innerText);
       var resultArray = [];
      var str =content.replace(/[\t\n\r\.\?\!]/gm,' ');
      var wordArray = str.split(" ");
      for (var i = 0; i < wordArray.length; i++) {
        var item = wordArray[i].trim();
        if(item.length > 0){
          resultArray.push(item);
        }
      if (resultArray.length<50) {
          $('#character_count17').css("color", "#e83b3b");
          $('#beachhead_summary_btn').attr('disabled',true);

    
        }else{
          $('#character_count17').css("color","#272526");
          $('#beachhead_summary_btn').attr('disabled',false);
        }
     }                     
      document.querySelector("#character_count17").innerHTML =resultArray.length+' WORDS';
  });

},
});



}
         
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
  // and puts cursor back in right position.
  
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
 // finantial
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
    $('#elavtor_submits_btn').click(function () {
      $('.five_tab').click();
       $('html, body').animate({scrollTop:0}, '500');

    });
    $('#compatitive_btn').click(function () {
      $('.third_tab').click();
       $('html, body').animate({scrollTop:0}, '500');

    });
     $('#product_need_btn').click(function () {
      $('.market_tab').click();
       $('html, body').animate({scrollTop:0}, '500');
    
    });
    $('#life_cycle_btn_next').click(function () {
      $('.six_tab').click();
       $('html, body').animate({scrollTop:0}, '500');
    
    });
     $('#market_next_btn').click(function () {
      $('.eight_tab').click();
       $('html, body').animate({scrollTop:0}, '500');
    
    });
     $('#invest_btn').click(function () {
      $('.ninght_tab').click();
       $('html, body').animate({scrollTop:0}, '500');
    
    });
       $('#finance').click(function () {
      $('.upload').click();
       $('html, body').animate({scrollTop:0}, '500');
    
    });
  });
  
$(document).ready(function () {
    $('.a').click(function (e) {
      e.preventDefault();
        $('.a').html('');
        $(this).html('<strong style="font-size:12px">x</strong>');  
    });
    

    $('.c').click(function (e) {
      e.preventDefault();
        $('.c').html('');
        $(this).html('<strong style="font-size:12px">x</strong>');  
    });

    
    $('.d').click(function (e) {
      e.preventDefault();
        $('.d').html('');
        $(this).html('<strong style="font-size:12px">x</strong>');  
    });
  
  
    $('.e').click(function (e) {
      e.preventDefault();
        $('.e').html('');
        $(this).html('<strong style="font-size:12px">x</strong>');  
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
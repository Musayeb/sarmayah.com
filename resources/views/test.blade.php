@extends('Admin.master')

@section('content')
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<style type="text/css">
    
</style>


</head>
<body>
    <!-- <h1>jQuery Ajax Image Upload with Animating Progress Bar</h1>
    <div class="form-container">
        <form action'{{url("salaamupload")}}'' id="uploadForm" name="frmupload"
            method="post" enctype="multipart/form-data" >
            @csrf
            <input type="file" id="uploadImage" name="uploadImage" /> <input
                id="submitButton" type="submit" name='btnSubmit'
                value="Submit Image" />

        </form>
        <div class='progress' id="progressDivId">
            <div class='progress-bar' id='progressBar'></div>
            <div class='percent' id='percent'>0%</div>
        </div>
        <div style="height: 10px;"></div>
        <div id='outputImage'></div>
    </div> -->
<form name="uploadForm1" id="uploadForm1" enctype="multipart/form-data" method="post">
    <label>Choose File:</label>
    <input type="file" name="file" id="fileInput">
</form>
<div class="d-flex">
<div class="col-md-2">
<div class="progress">
     <div class="progress-bar bg-success progress-bar-striped" style="height:7px;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="col-md-2">
    <h6 id="progress"></h6>
</div>
</div>

<div id="uploadStatus"></div>

                
</body>
</html>
@endsection
@section('jquery')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.js"></script>

<script type="text/javascript">
    $('#fileInput').change(function(){
         var allowedTypes = ['application/pdf','image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (JPEG/JPG/PNG/GIF).');
            $("#fileInput").val('');
            return false;
        }else{
    $("#uploadForm1").submit();  

        }

    });
    $(document).ready(function(){
    // File upload via Ajax
    $("#uploadForm1").on('submit', function(e){
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
                        $(".progress-bar").width(percentComplete + '%');
                        $("#progress").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("salaamupload")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".progress-bar").width('0%');
                // $('#uploadStatus').html('<img src="images/loading.gif"/>');
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                    $('#uploadForm1')[0].reset();
                    $('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }
            }
        });
    });
    });


        // $(document).ready(function() { 
        //     $("#but_upload").click(function() { 
        //         var fd = new FormData(); 
        //         var files = $('#file')[0].files[0]; 
        //         fd.append('file', files); 
        //   $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
        //         }
        //     });   
        //         $.ajax({ 
        //             url: '{{url("salaamupload")}}', 
        //             type: 'post', 
        //             data: fd, 
        //             contentType: false, 
        //             processData: false, 
        //            uploadProgress: function (event, position, total, percentComplete) {

        //             var percentValue = percentComplete + '%';
        //                console.log(percentValue); 
        //         },

        //             success: function(response){ 
        //                 if(response != 0){ 
        //                    alert(response); 
        //                 } 
        //                 else{ 
        //                     alert('file not uploaded'); 
        //                 } 
        //             }, 
        //         }); 
        //     }); 
        // }); 

// $(document).ready(function () {
//     $('#submitButton').click(function () {
//             $('#uploadForm').ajaxForm({
//                 target: '#outputImage',
//                 url: '{{url("salaamupload")}}',
//                 beforeSubmit: function () {
//                       $("#outputImage").hide();
//                        if($("#uploadImage").val() == "") {
//                            $("#outputImage").show();
//                            $("#outputImage").html("<div class='error'>Choose a file to upload.</div>");
//                     return false; 
//                 }
//                     $("#progressDivId").css("display", "block");
//                     var percentValue = '0%';

//                     $('#progressBar').width(percentValue);
//                     $('#percent').html(percentValue);
//                 },
//                 uploadProgress: function (event, position, total, percentComplete) {

//                     var percentValue = percentComplete + '%';
//                     $("#progressBar").animate({
//                         width: '' + percentValue + ''
//                     }, {
//                         duration: 5000,
//                         easing: "linear",
//                         step: function (x) {
//                         percentText = Math.round(x * 100 / percentComplete);
//                             $("#percent").text(percentText + "%");
//                         if(percentText == "100") {
//                                $("#outputImage").show();
//                         }
//                         }
//                     });
//                 },
//                 error: function (response, status, e) {
//                     alert('Oops something went.');
//                 },
                
//                 complete: function (xhr) {
//                     if (xhr.responseText && xhr.responseText != "error")
//                     {
//                           $("#outputImage").html(xhr.responseText);
//                     }
//                     else{  
//                         $("#outputImage").show();
//                             $("#outputImage").html("<div class='error'>Problem in uploading file.</div>");
//                             $("#progressBar").stop();
//                     }
//                 }
//             });
//     });
// });

</script>
@endsection
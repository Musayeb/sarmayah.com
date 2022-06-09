@extends('Admin.master')

@section('css')
     <link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/assets/node_modules/html5-editor/bootstrap-wysihtml5.css')}}" />
@endsection

@section('content')
<section class="blog pt-5 pb-5">
        <div class="container">
            <form method="post" action="{{url('ad/newes/add/new')}}" enctype="multipart/form-data" >
                @csrf
              <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="form-group mb-5">
                        <h6 for="blog_title">News Title</h6>
                        <input type="text" class="form-control " value="{{old('news_title')}}"  placeholder="..." name="news_title">
                   {!!$errors->first('news_title', '<small class="text-danger ml-2">:message</small>')!!}
                    </div>

                    <div class="form-group">
                         <h6 for="blog_content">News Content</h6>
                        <textarea class="form-control" rows="20" id="mymce1" name="news_content"  placeholder="">{{old('news_content')}}</textarea>
             
                  {!!$errors->first('news_content', '<small class="text-danger ml-2">:message</small>')!!}
 
                   </div>
              
                    <div class="form-group mb-3">
                        <h6 for="blog_title">Tags</h6>
                     
                          <input type="text" class="tagator form-control "  name="news_tag"  value="{{old('news_tag')}}" style="padding:0xp 0px;display:block">                  
                          {!!$errors->first('news_tag', '<small class="text-danger ml-2">:message</small>')!!}

                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 for="blog_title" class="mb-3">Featured images</h4>
                            <img src="{{asset('public/web_assist/images/empty_img.png')}}" alt="img" style="width:100%; max-height:200px" id ="frame" >
                            <input type="file"  class="form-controller mt-3"  name='featuer_img' oninput='UpdatePreview()'> 

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <input type="submit" class="btn btn-success"  placeholder="..."  value="Create News">
              </div>
        </form>
        </div>
    </section>
@endsection
@section('page_directory')
Create News
@endsection

@section('page_title')
Create News
@endsection

@section('jquery')
    <script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
     <script src="{{asset('public/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script>    
    function UpdatePreview(){
        $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
    };

  
$(document).ready(function () {
   tinymce.init({
      selector: 'textarea#mymce1',
        plugins: [
              "advlist autolink link image lists charmap print preview hr anchor pagebreak ",
              "searchreplace  visualblocks visualchars  fullscreen insertdatetime  nonbreaking",
              "save table contextmenu directionality emoticons template paste textcolor"
          ],
          entity_encoding :"raw",
          entity_decoding :"raw",
          verify_html :false,
          cleanup : true,
          branding:false,

            height:400,
          toolbar: "insertfile undo redo | styleselect | bold italic  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image |forecolor backcolor emoticons",
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
                      if (resultArray.length<=100||resultArray.length>200) {
                        // $('#character_count2').css("color", "#e83b3b");
                        // $('#elavator_picth').css("color", "#e83b3b");
                        // $('#picth').attr('disabled',true);
                      }else{
                        // $('#character_count2').css("color", "#272526");
                        // $('#elavator_picth').css("color", "#272526");
                        // $('#picth').attr('disabled',false);
                      }
                   }                     
            document.querySelector("#character_count2").innerHTML =resultArray.length+' WORDS';
      });
      
  },
        image_title: true,
      /* enable automatic uploads of images represented by blob or data URIs*/
      automatic_uploads: true,

      file_picker_types: 'image',
      /* and here's our custom image picker*/
      file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
          var file = this.files[0];

          var reader = new FileReader();
          reader.onload = function () {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            /* call the callback and populate the Title field with the file name */
            cb(blobInfo.blobUri(), { title: file.name });
          };
          reader.readAsDataURL(file);
        };

        input.click();
      },
    });
});
</script>

@endsection
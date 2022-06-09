@extends('Admin.master')

@section('css')
     <link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/assets/node_modules/html5-editor/bootstrap-wysihtml5.css')}}" />
@endsection

@section('content')
<section class="blog pt-5 pb-5">
        <div class="container">
            <form method="post" action="{{url('ad/blogs/create')}}" enctype="multipart/form-data" >
                @csrf
              <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="form-group mb-5">
                        <h6 for="blog_title">Blog title</h6>
                        <input type="text" class="form-control " value="{{old('blog_title')}}"  placeholder="..." name="blog_title">
                   {!!$errors->first('blog_title', '<small class="text-danger ml-2">:message</small>')!!}
                    </div>

                    <div class="form-group">
                         <h6 for="blog_content">Blog content</h6>
                        <textarea class="form-control" rows="20" id="mymce1" name="blog_content"  placeholder="">{{old('blog_content')}}</textarea>
             
              {!!$errors->first('blog_content', '<small class="text-danger ml-2">:message</small>')!!}
 
                   </div>
              
                    <div class="form-group mb-3">
                        <h6 for="blog_title">tag</h6>
                     
                          <input type="text" class="tagator form-control "  name="blog_tag"  value="{{old('blog_tag')}}" style="padding:0xp 0px;display:block">                  
                          {!!$errors->first('blog_tag', '<small class="text-danger ml-2">:message</small>')!!}

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
                <input type="submit" class="btn btn-success"  placeholder="..."  value="Add blog">
              </div>
        </form>
        </div>
    </section>
@endsection
@section('page_directory')
Create Blog
@endsection

@section('page_title')
Create Blog
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
          branding:false,
            height:400,
          toolbar: "insertfile undo redo | styleselect | bold italic  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image |forecolor backcolor emoticons",
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
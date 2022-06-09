@extends('Admin.master')
@section('css')
<link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">
    
@endsection
@section('content')
    <section class="blog pt-5 pb-5">
        <div class="container">
            <form method="post" action="{{url('/blogUpdate')}}" enctype="multipart/form-data" >
                @csrf
              <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="form-group mb-5">
                        <label for="blog_title">Blog title</label>
                    <input type="text" class="form-control form-control" id="" placeholder="..." name="blog_title" value="{{$up_blogs[0]->blog_title}}">
                    {!!$errors->first('blog_title', '<small class="text-danger ml-1">:message</small>')!!}
    
                </div>

                    <div class="form-group">
                         <label for="blog_content">Blog content</label>
                        <textarea class="form-control" id="mymce1"  name="blog_content" placeholder="" >{{$up_blogs[0]->blog_content}}</textarea>
                        {!!$errors->first('blog_content', '<small class="text-danger ml-1">:message</small>')!!}
                  
                    </div>
            
                    <div class="form-group mb-3">
                        <label >tags</label>
                        <input type="text" class="form-control tagator"   name="blog_tag" value="{{$up_blogs[0]->tags}}" >
                        {!!$errors->first('blog_tag', '<small class="text-danger ml-1">:message</small>')!!}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <label class="mb-3"> Featured Image</label>
                          @if($up_blogs[0]->blog_feture_img)
                            <img src="{{asset('storage/app')}}/{{$up_blogs[0]->blog_feture_img}}" alt="img" style="width:100%; max-height:200px" id ="frame" >
                            @else
                            <img src="{{asset('public/web_assist/images/empty_img.png')}}" alt="img" style="width:100%; max-height:200px" id ="frame" >

                            @endif
                              <input type="file"  class="form-controller mt-3" value="Add featuer image" name='featuer_img' onchange="UpdatePreview()"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <input type="hidden" class="btn btn-success"   value="{{$up_blogs[0]->blog_id}}" name='blog_hidden'>
                <input type="submit" class="btn btn-success"  placeholder="..."  value="Update blog">
              </div>
        </form>
        </div>
    </section>

@endsection
@section('page_directory')
Edit Blogs
@endsection

@section('page_title')
Edit Blogs
@endsection

@section('jquery')
<script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>
<script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
<script>    
    function UpdatePreview(){
        $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
    };
</script>


<script>
$(document).ready(function() {
tinymce.init({
   selector: 'textarea#mymce1',
     plugins: [
           "advlist autolink link image lists charmap print preview hr anchor pagebreak ",
           "searchreplace  visualblocks visualchars  fullscreen insertdatetime  nonbreaking",
           "save table contextmenu directionality emoticons template paste textcolor"
       ],
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
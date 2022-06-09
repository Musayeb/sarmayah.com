@extends('Admin.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/node_modules/summernote/dist/summernote-bs4.css')}}">
<link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

    
@endsection
@section('styles')
.note-toolbar {
    z-index: auto !important;
}
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-10">
                    <h4 class="card-title">Edit Page &nbsp;<code>{{$page[0]->page_name}}</code></h4>
                </div>
                <form method="post" action="{{url('ad/create_page/update')}}">
                    @csrf
                    <input type="hidden" name="hide" value="{{$page[0]->page_id}}">

              </div>   
        
                     <textarea class="summernote" name="page_content" >{{$page[0]->page_content}}</textarea> 
                      {!!$errors->first('page_content', '<small class="text-danger ml-2">:message</small>')!!}

                    <button type="submit" class="btn btn-info mt-2 float-right submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_title')
{{$page[0]->page_name}}
@endsection
@section('page_directory')
{{$page[0]->page_name}}
@endsection
@section('jquery')
<script src="{{asset('public/assets/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>

<script>
    $(document).ready(function() {
        $(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen'/*, 'codeview' */]],   // remove codeview button 
                ['help', ['help']]
              ],
             // set focus to editable area after initializing summernote
     
        });

        $('.inline-editor').summernote({
            airMode: true
        });
    });


    });
    </script>
    	 @if(session()->has('error'))
         <script type="text/javascript">
          $.toast({
                     heading: '{{session()->get("error")}}',
                    // text: 'Use the predefined ones, or specify a custom position object.',
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'error',
                    hideAfter: 4500, 
                    stack: 6
                  });
          </script>                  
        @endif
@endsection
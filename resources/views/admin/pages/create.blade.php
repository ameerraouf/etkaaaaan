@extends(app('at').'.index')
@section('admin')

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> {{ $title }}
			</div>
		</div>
	<div class="portlet-body form">
<form action="{{ url( app('aurl').'/pages/store' ) }}" 
enctype="multipart/form-data"
method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="name" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ old('name') }}" placeholder="{{ trans('admin.name') }}">
</div>
 
<div class="form-group">
<label>{{ trans('admin.content') }}</label>
 <textarea name="content" class="form-control">{{ old('content') }}</textarea>
</div>
 


<div class="form-group">
<label>ملفات</label>
<input type="file" class="form-control" name="files[]" multiple />
</div>
 

 
<div class="form-actions left">
<div class="form-group">
<label>{{ trans('admin.active') }} <input type="checkbox"  name="active" value="1" @if(old('active')) checked @endif /> </label>	
</div>
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
<script src="{{asset('public')}}/tinymce/hos.editor.min.js"></script>
<script>
tinymce.init(
  {
            selector:'textarea',
            language: 'ar',
            anguage_url : '/languages/ar.js',
            statusbar: false,
            image_title: true,
            automatic_uploads: true,
            menubar: "",
            height: 500,
            plugins: ['advlist autolink lists link image charmap preview ',
                      'visualblocks code fullscreen',
                      'insertdatetime media table paste code help wordcount codesample'
                    ],
            toolbar1:' formatselect | ' +
                     ' bold italic backcolor forecolor removeformat|'+
                     ' alignleft aligncenter ' +
                     ' alignright alignjustify |'+
                     ' bullist numlist outdent indent checklist|'+
                     ' undo redo preview| '+
                     ' image media link| table | codesample',
            codesample_languages: [
         		                         {text: 'HTML/XML', value: 'markup'},
         		                         {text: 'JavaScript', value: 'javascript'},
         		                         {text: 'CSS', value: 'css'},
         	                           {text: 'PHP', value: 'php'},
         	                         	 {text: 'Ruby', value: 'ruby'},
         		                         {text: 'Python', value: 'python'},
         		                         {text: 'Java', value: 'java'},
         		                         {text: 'C', value: 'c'},
         		                         {text: 'C#', value: 'csharp'},
         		                         {text: 'C++', value: 'cpp'}
         	],
          file_picker_types: 'image',
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
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  }
);
</script>
@stop
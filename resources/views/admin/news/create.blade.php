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
<script>
$(document).on('click','.delete_file',function(){
 var fid = $(this).attr('fid');
 $.ajax({
 	url:'{{url(app('aurl').'/delete/file')}}',
 	data:{id:fid,_token:'{{csrf_token()}}'},
 	dataType:'json',
 	type:'post',
 	beforeSend: function()
 	{
 		$('.li'+fid).remove();
 	}
  });	
 return false;
});
</script> 

<script>
(function() {
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
		$('#form_data').ajaxForm({
		    beforeSend: function() {
		        status.empty();
		        $('.load_upload').removeClass('hidden');
		        $('#other_file').val('');
		    },
		    uploadProgress: function(event, position, total, percentComplete) {
		        var percentVal = percentComplete + '%';
		        bar.width(percentVal)
		        percent.html(percentVal);
		    },
		    success: function(data) {
		    	$('.load_upload').addClass('hidden');
		    	if(data.status == 'error')
		    	{
		    		$('.msgerror').removeClass('hidden');
		    		$('.msgerror').html('<h1>'+data.message+'</h1>');
		    	}else if(data.status == 'success')
		    	{
		    		$('.msgerror').html('');
		    		$('.msgerror').addClass('hidden');

		    		var id_other_files = $('.id_other_files').val();

		    		if(id_other_files != '' && id_other_files != null)
		    		{
		    	 	 $('.id_other_files').val(id_other_files+','+data.id); 
		    		}else{
		    	 	 $('.id_other_files').val(data.id); 
		    		}
		    		$('.list_attach').append(data.file_html);
		    	}
		    },
			complete: function(xhr) {
				status.html(xhr.responseText);
			}
		}); 

})();       
</script>

<div class="alert alert-danger msgerror hidden">
	
</div>
<div class="form-body">

<div class="col-lg-9">
{!! Form::open(['url'=>app('aurl').'/upload/file/ajax','files'=>true,'id'=>'form_data']) !!}
<div class="form-group">
<label>{{trans('admin.upload_files')}}</label>
<input type="file" name="other_file" id="other_file" class="form-control" />
<i class="fa fa-spinner fa-spin load_upload  hidden"></i>
</div>
<div class="form-actions left">
	{!! Form::submit(trans('admin.upload'),['class'=>'btn green']) !!}
</div>
{!! Form::close() !!}
  

{!! Form::open(['route'=>'news.store','files'=>true]) !!}
<input type="hidden" name="id_other_files" class="id_other_files" />
<div class="form-group">
<label>{{ trans('admin.title') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.title') }}" class="form-control" value="{{ old('title') }}" >
</div>
 

<div class="form-group">
<label>{{ trans('admin.master_photo') }}</label>
<input type="file" name="photo" class="form-control" />
</div>


<div class="form-group">
<label>{{ trans('admin.department') }}</label>
{!! Form::select('department',App\Department::pluck('title','id'),old('department'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
<label>{{ trans('admin.content') }}</label>
{!! Form::textarea('content',old('content'),['class'=>'form-control ckeditor']) !!}
</div>


<div class="form-group">
<label>{{ trans('admin.youtube') }}  1 </label>
<input name="youtube[]" type="text" placeholder="{{ trans('admin.youtube') }}" class="form-control" value="{{ @old('youtube')[0] }}" placeholder="{{ trans('admin.youtube') }}">
</div>
 
<div class="form-group">
<label>{{ trans('admin.youtube') }}  2 </label>
<input name="youtube[]" type="text" placeholder="{{ trans('admin.youtube') }}2" class="form-control" value="{{ @old('youtube')[1] }}" placeholder="{{ trans('admin.youtube') }}">
</div>
 



<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}	
</div>
<div class="col-lg-3">
<ol class="list_attach" style="margin:0;padding:5px;direction:ltr;">
	
</ol>

</div>
<div class="clearfix"></div>

		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
@extends(app('at').'.index')
@section('admin')

			<div class="row inbox">
				<div class="col-md-2">
					@include(app('at').'.contactus.right')
				</div>
				<div class="col-md-10">

{!! Form::open() !!}
	<div class="inbox-compose-btn">
		{!! Form::select('send_to',['admin'=>trans('admin.gadmin'),'store'=>trans('admin.guser'),'email'=>trans('admin.email')],old('send_to'),['class'=>'form-control send_to','placeholder'=>'....']) !!}
	</div>
<script type="text/javascript">
$(document).on('change','.send_to',function(){
	var sendto = $('.send_to option:selected').val();
	if(sendto == 'email')
	{
		$('.mail-to').removeClass('hidden');
	}else{
		$('.mail-to').addClass('hidden');
	}
});	
$(document).ready(function(){
	@if(old('send_to') == 'email')
	$('.mail-to').removeClass('hidden');
	@endif
});
</script>	
	<div class="inbox-form-group mail-to hidden" >
		<label class="control-label">{{ trans('admin.to') }}:</label>
		<div class="controls controls-to">
			<input type="text" class="form-control" name="email" value="{{old('email')}}">
		</div>
	</div>
 
	<div class="inbox-form-group">
		<label class="control-label">{{ trans('admin.subject') }}:</label>
		<div class="controls">
			<input type="text" class="form-control" name="subject" value="{{old('subject')}}">
		</div>
	</div>
	<div class="inbox-form-group">
	<textarea class="inbox-editor ckeditor form-control" name="message" rows="12">{{old('message')}}
	</textarea>
	</div>
 
 
	<div class="inbox-compose-btn">
		<button type="submit" class="btn blue"><i class="fa fa-check"></i>{{ trans('admin.send') }}</button>
	</div>
{!! Form::close() !!}
				</div>
			</div>
 
@stop
@extends(app('at').'.index')
@section('admin')

			<div class="row inbox">
				<div class="col-md-2">
					@include(app('at').'.contactus.right')
				</div>
				<div class="col-md-10">

{!! Form::open(['method'=>'put']) !!}
	<div class="inbox-compose-btn">
		{!! Form::select('send_to',['admin'=>trans('admin.gadmin'),'store'=>trans('admin.guser'),'email'=>trans('admin.email')],$edit->send_to,['class'=>'form-control send_to','placeholder'=>'....']) !!}
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

    if('{{ $edit->send_to }}' == 'email')
	{
		$('.mail-to').removeClass('hidden');
	}else{
		$('.mail-to').addClass('hidden');
	}
</script>	
	<div class="inbox-form-group mail-to hidden" >
		<label class="control-label">{{ trans('admin.to') }}:</label>
		<div class="controls controls-to">
			<input type="text" class="form-control" value="{{ $edit->email }}" name="email">
		</div>
	</div>
 
	<div class="inbox-form-group">
		<label class="control-label">{{ trans('admin.subject') }}:</label>
		<div class="controls">
			<input type="text" class="form-control" value="{{ $edit->subject }}" name="subject">
		</div>
	</div>
	<div class="inbox-form-group">
	<textarea class="inbox-editor ckeditor form-control" name="message" rows="12">{{ $edit->message }}</textarea>
	</div>


 
 	
	<div class="inbox-compose-btn">
     {!! Form::select('cronjob_status',['0'=>trans('admin.resent'),'1'=>trans('admin.sent')],$edit->cronjob,['class'=>'form-control']) !!}
		<button type="submit" class="btn blue"><i class="fa fa-check"></i>{{ trans('admin.send') }}</button>
	</div>
{!! Form::close() !!}
				</div>
			</div>
 
@stop
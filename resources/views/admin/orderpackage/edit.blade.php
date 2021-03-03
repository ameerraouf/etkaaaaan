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
{!! Form::open(['method'=>'put']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.timeout') }}</label>
<input name="timeout" type="number" placeholder="{{ trans('admin.timeout') }}" class="form-control" value="{{ $edit->timeout }}" placeholder="{{ trans('admin.timeout') }}">
</div>

<hr />
<h2>{{trans('admin.file_bank')}}</h2>
<a href="{{url('upload/'.$edit->file_bank)}}" target="_blank">{{url('upload/'.$edit->file_bank)}}</a>
<hr />


<div class="form-group">
<label>{{ trans('admin.timeout_type') }}</label>
{!! Form::select('timeout_type',['day'=>trans('admin.day'),'month'=>trans('admin.month'),'year'=>trans('admin.year')],$edit->timeout_type,['class'=>'form-control']) !!}
</div>
 
<div class="form-group">
<label>{{ trans('admin.status') }}</label>
{!! Form::select('status',['panding'=>trans('admin.panding'),'refused'=>trans('admin.refused'),'accept'=>trans('admin.accept')],$edit->status,['class'=>'form-control status']) !!}
</div> 
<script>
$(document).ready(function(){
	$(document).on('change','.status',function(){
		var status = $('.status option:selected').val();
		if(status == 'refused')
		{
			$('.refused').removeClass('hidden');
		}else{
			$('.refused').addClass('hidden');
		}
	});
});
</script>
<div class="form-group refused @if($edit->status != 'refused') hidden @endif ">
<label>{{ trans('admin.refused_text') }}</label>
{!! Form::textarea('refused_text',$edit->refused_text,['class'=>'form-control','placeholder'=>trans('admin.refused_text')]) !!}
</div> 

 
<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
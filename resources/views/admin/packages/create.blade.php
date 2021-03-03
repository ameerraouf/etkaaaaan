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
{!! Form::open(['route'=>'packages.store']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.timeout') }} {{ trans('admin.justnumber') }}</label>
<input name="timeout" type="number" placeholder="{{ trans('admin.timeout') }}" class="form-control" value="{{ old('timeout') }}" placeholder="{{ trans('admin.timeout') }}">
</div>

<div class="form-group">
<label>{{ trans('admin.timeout_type') }}</label>
{!! Form::select('timeout_type',['day'=>trans('admin.day'),'month'=>trans('admin.month'),'year'=>trans('admin.year')],old('timeout_type'),['class'=>'form-control']) !!}
</div>
 
 <div class="form-group">
<label>{{ trans('admin.price') }} {{ trans('admin.justnumber') }}</label>
<input name="price" type="number" placeholder="{{ trans('admin.price') }}" class="form-control" value="{{ old('price') }}" placeholder="{{ trans('admin.price') }}"> USD دولار
</div>


<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
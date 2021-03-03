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
{!! Form::open(['url'=>app('aurl').'/slides/'.$edit->id,'method'=>'put','files'=>true]) !!}
<div class="form-body">

<div class="form-group">
<label>{{ trans('admin.title') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.title') }}" class="form-control" value="{{ $edit->title }}" placeholder="{{ trans('admin.title') }}">
</div>

<div class="form-group">
<label>{{ trans('admin.url') }}</label>
<input name="url" type="url" placeholder="{{ trans('admin.url') }}" class="form-control" value="{{ $edit->url }}" placeholder="{{ trans('admin.url') }}">
</div>
 
 
<div class="form-group">
<label>{{ trans('admin.photo') }}</label>
<input name="photo" type="file" placeholder="{{ trans('admin.photo') }}" class="form-control"  placeholder="{{ trans('admin.url') }}">
@if(!empty($edit->photo))
 <img src="{{url('upload/'.$edit->photo)}}" style="width:150px;height:150px;"
@endif
</div>
  
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
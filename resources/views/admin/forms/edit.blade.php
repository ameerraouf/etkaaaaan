@extends(app('at').'.index')
@section('admin')

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box green">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> {{ $title }}
			</div>
		</div>
	<div class="portlet-body form">
{!! Form::open(['url'=>app('aurl').'/formspdf/'.$edit->id,'method'=>'put','files'=>true]) !!}
<div class="form-body">

<div class="form-group">
<label>{{ trans('admin.title') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.title') }}" class="form-control" value="{{ $edit->title }}" placeholder="{{ trans('admin.title') }}">
</div>

<div class="form-group">
<label> {{ trans('admin.content') }}</label>
<textarea name="content" class="form-control" placeholder="{{trans('admin.content')}}">{{$edit->content}}</textarea>
</div>
 

<div class="form-group">
<label> {{ trans('admin.pdf') }}</label>
<input type="file" name="pdf" class="form-control" accept="application/pdf,image/x-eps">
<a href="{{ url('upload/'.$edit->pdf) }}" target="_blank"><i class="fa fa-file fa-2x"></i></a>
</div>
 

<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
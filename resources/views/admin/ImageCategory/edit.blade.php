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
{!! Form::open(['url'=>app('aurl').'/ImageCategory/'.$edit->id,'method'=>'put']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ $edit->title }}" placeholder="{{ trans('admin.name') }}">
</div>


{{-- {!! Form::select('parent',App\ImagesCategory::where('parent',0)->pluck('title','id'),$edit->parent,['class'=>'form-control','placeholder'=>trans('admin.main')]) !!} --}}
  

 

<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
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
{!! Form::open(['url'=>app('aurl').'/links/'.$edit->id,'method'=>'put']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="name" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ $edit->name }}" placeholder="{{ trans('admin.name') }}">
</div>
 

 <div class="form-group">
 <label>{{ trans('admin.url') }}</label>
 <input name="url" type="text" placeholder="{{ trans('admin.url') }}" class="form-control" value="{{ $edit->url }}" placeholder="{{ trans('admin.url') }}">
</div>
   
  <div class="form-group">
 <label>{{ trans('admin.type') }}</label>
 {!! Form::select('typelink',['header'=>trans('admin.header'),'footer'=>trans('admin.footer')],$edit->typelink,['class'=>'form-control','placeholder'=>'.....']) !!}
</div>

  <div class="form-group">
 <label>{{ trans('admin.department') }}</label>
 {!! Form::select('parent',App\Link::where('parent',0)->pluck('name','id'),$edit->parent,['class'=>'form-control','placeholder'=>trans('admin.main')]) !!}
</div>
 

 
<div class="form-actions left">
 
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
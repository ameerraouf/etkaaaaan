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
{!! Form::open(['route'=>'MyImage.store']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.title') }}" class="form-control" value="{{ old('title') }}" placeholder="{{ trans('admin.name') }}">
</div>




<div class="form-group">
	{!! Form::label('category',trans('admin.category'),['class'=>'control-label']) !!}
	<div style="padding:5px;">
		<select name="category_id" class="form-control" required>
			<option value="">اختر القسم</option>
			@foreach($ImageCategories as $ImageCategor)
				<option value="{{$ImageCategor->id}}">{{$ImageCategor->title}}</option>
			@endforeach
		</select>
	</div>
</div>



		<input name="image" type="file" placeholder="{{ trans('admin.photo') }}" class="form-control"  >




{{-- {!! Form::select('parent',App\ImagesCategory::where('parent',0)->pluck('title','id'),old('parent'),['class'=>'form-control','placeholder'=>trans('admin.main')]) !!} --}}
<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
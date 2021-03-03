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
  

<div class="form-group">
	{!! Form::label('category',trans('admin.category'),['class'=>'control-label']) !!}
	<div style="padding:5px;">
		<select name="category_id" class="form-control" required>
			<option value="">اختر القسم</option>
			@foreach($ImageCategories as $ImageCategory)
				<option value="{{$ImageCategory->id}}">{{$ImageCategory->title}}</option>
			@endforeach
		</select>
	</div>
</div>


<div class="form-group">
	<div style="padding:5px;" class="">
		{!! Form::file('image',['class'=>'form-control','id'=>'image','placeholder'=>trans('admin.photo')]) !!}
		<br>
		<img class="img-responsive" id="image-preview" style="width:200px;height:200px;" src="{{asset('storage/'.$MyImage->image)}}" >
	</div>
</div>
 

<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
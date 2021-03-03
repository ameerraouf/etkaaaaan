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
{!! Form::open(['route'=>'YearReaports.store','files' => true]) !!}
<div class="form-body">
    
    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" required placeholder="الاسم" class="form-control" value="{{ old('name') }}">
</div>



<div class="form-group">
<label>االوصف</label>
  <textarea
        class="form-control"
      required  name="description">{{old('description')}}</textarea>
</div>

 <div class="form-group">
<label>
    صوره
</label>
<input type="file" required accept="image/*" name="img" class="form-control">
</div>

<div class="form-group">
<label>
    ملف
</label>
<input type="file"  required name="file" class="form-control">
</div>


<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop


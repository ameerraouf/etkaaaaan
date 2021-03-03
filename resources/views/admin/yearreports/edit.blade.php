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
{!! Form::open(['url'=>app('aurl').'/YearReaports/'.$row->id,'method'=>'put','files'=>true]) !!}
<div class="form-body">
    
    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" required placeholder="الاسم" class="form-control"
value="{{ $row->name }}" />

</div>

<div class="form-group">
<label>االوصف</label>
  <textarea
        class="form-control"
      required  name="description">{{ $row->description }}</textarea>
</div>

 <div class="form-group">
<label>
    صوره
</label>
<img src="{{ asset('assets/uplodedimage/'.$row->img) }}"
                      style="width:50px;height:50px;border-radius:50%" />
<input type="file" accept="image/*" name="img" class="form-control">
</div>

<div class="form-group">
<label>
    ملف
</label>
 <a href="{{ asset('assets/uplodedfiles/'.$row->file) }}">
									            فتح
									    </a>
<input type="file"  name="file" class="form-control">
</div>


<div class="form-actions left">
{!! Form::submit(trans('admin.edit'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop


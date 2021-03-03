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
{!! Form::open(['url'=>app('aurl').'/Albume/'.$said->id,'method'=>'put','files' => true]) !!}

<div class="form-body">

    
<div class="form-group">
<label>صوره</label>
  <img src="{{  asset('assets/uplodedimage/'. $said->img) }}"
                                        style="width:40px;height:40px;border-radius:50%" />
<input type="file" accept="image/*"  name="img" class="form-control" />
</div>
    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" required placeholder="الاسم" class="form-control" value="{{ $said->name }}">
</div>

 
<div class="form-actions left">
{!! Form::submit(trans('admin.edit'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
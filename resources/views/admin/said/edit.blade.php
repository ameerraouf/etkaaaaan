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
{!! Form::open(['url'=>app('aurl').'/Said/'.$said->id,'method'=>'put', 'files' => true]) !!}

<div class="form-body">

    
<div class="form-group">
<label>الاسم</label>
<input name="name" type="text" class="form-control" value="{{ $said->name }}">
</div>



<div class="form-group">
<label>االوصف</label>
<textarea class="form-control" name="description">{{ $said->description }}</textarea>
</div>
 
 
 <div class="form-group">
<label>الصوره</label>| 
    @if($said->img)
      <img src="{{ asset('assets/uploded/'.$said->img) }}"
      style="width:50px;height:50px;border-radius:50%" />
      @else 
        لايوجد
      @endif
                      
<input type="file" accept="image/*" name="img" class="form-control">
</div>



<div class="form-actions left">
{!! Form::submit(trans('admin.edit'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
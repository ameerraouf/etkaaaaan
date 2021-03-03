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
{!! Form::open(['route'=>'AlbumeImage.store','files' => true]) !!}
<div class="form-body">
    
<div class="form-group">
<label>صوره</label>
<input type="file" accept="image/*" required name="img[]" multiple class="form-control" />
</div>
    
<div class="form-group">
<label>الالبوم</label>
<select name="albume_id"   class="form-control">
    @foreach(App\Albume::all() as $a)
        <option value="{{ $a->id }}">{{ $a->name }}</option>
    @endforeach
</select>
</div>


<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
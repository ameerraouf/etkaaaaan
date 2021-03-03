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
{!! Form::open(['url'=>app('aurl').'/Numbers/'.$numebr->id,'method'=>'put']) !!}
<div class="form-body">
    
<div class="form-group">
<label>الاعضاء</label>
<input name="users" type="number" placeholder="الاعضاء" class="form-control" value="{{ $numebr->users }}">
</div>

<div class="form-group">
<label>المدرسيين</label>
<input name="teachers" type="number" placeholder="الاعضاء" class="form-control" value="{{ $numebr->teachers }}">
</div>

<div class="form-group">
<label>جلسات</label>
<input name="sessions" type="number" placeholder="الاعضاء" class="form-control" value="{{ $numebr->sessions  }}">
</div>

<div class="form-group">
<label>الحفظة</label
<input name="keeps" type="number" placeholder="الاعضاء" class="form-control" value="{{ $numebr->keeps }}">
</div>
 
 


<div class="form-actions left">
{!! Form::submit(trans('admin.edit'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
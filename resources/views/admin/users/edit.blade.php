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
{!! Form::open(['url'=>app('aurl').'/users/'.$edit->id,'method'=>'put']) !!}

<div class="form-body">

<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="name" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ $edit->name }}" placeholder="{{ trans('admin.name') }}">
</div>

<div class="form-group">
<label>{{ trans('admin.email') }}</label>
<input name="email" type="text" placeholder="{{ trans('admin.email') }}" class="form-control" value="{{ $edit->email }}" placeholder="{{ trans('admin.email') }}">
</div>  

<div class="form-group">
<label>{{ trans('admin.password') }}</label>
<input name="password" type="password" placeholder="{{ trans('admin.password') }}" class="form-control"   placeholder="{{ trans('admin.password') }}">
</div>  

<div class="form-group">
<label>{{ trans('admin.mobile') }}</label>
<input name="mobile" type="text" placeholder="{{ trans('admin.mobile') }}" class="form-control" value="{{ $edit->mobile }}" placeholder="{{ trans('admin.mobile') }}">
</div>  
 

<div class="form-group">
<label>{{ trans('admin.countries') }}</label>
{!! Form::select('country_id',App\Country::pluck('name','id'),$edit->country,['class'=>'form-control country','placeholder'=>'.........']) !!}
<i class="fa fa-spinner fa-spin loadingc hidden"></i>
</div>
<?php 
/*
<script type="text/javascript">
$(document).on('change','.country',function(){
 var country_id = $('.country option:selected').val();
 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{country_id:country_id,select:0},
 	beforeSend: function()
 	{
 		$('.loadingc').removeClass('hidden');
 		$('.areas').html('');
 		$('.city').html('');
 	},success: function(data)
 	{
 		$('.loadingc').addClass('hidden');
 		$('.areas').html(data);
 	}
 });
});

$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{country_id:'{{ $edit->country }}',select:'{{ $edit->area }}'},
 	beforeSend: function()
 	{
 		$('.loadingc').removeClass('hidden');
 		$('.areas').html('');
 		$('.city').html('');
 	},success: function(data)
 	{
 		$('.loadingc').addClass('hidden');
 		$('.areas').html(data);
 	}
 });
});
</script> 

<script type="text/javascript">
$(document).on('change','.area',function(){
 var area_id = $('.area option:selected').val();
 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{area_id:area_id,select:0},
 	beforeSend: function()
 	{
 		$('.loadingc').removeClass('hidden');
 	},success: function(data)
 	{
 		$('.loadingc').addClass('hidden');
 		$('.city').html(data);
 	}
 });
});
 
$(document).ready(function(){
	 $.ajax({
  	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{area_id:'{{ $edit->area }}',select:'{{ $edit->city }}'},
 	beforeSend: function()
 	{
 		$('.loadingc').removeClass('hidden');
 	},success: function(data)
 	{
 		$('.loadingc').addClass('hidden');
 		$('.city').html(data);
 	}
 });
});
 
</script> 
<div class="form-group">
<label>{{ trans('admin.areas') }}</label>
<div class="areas"></div>
</div>

<div class="form-group">
<label>{{ trans('admin.city') }}</label>
<div class="city"></div>
</div>

*/?>
<div class="form-group">
<label>{{ trans('admin.level') }}</label>
{!! Form::select('level',['user'=>trans('admin.user'),'admin'=>trans('admin.admin')],$edit->level,['class'=>'form-control level','placeholder'=>'......']) !!}
</div>
<script type="text/javascript">
$(document).on('change','.level',function(){
	var level = $('.level option:selected').val();
	if(level == 'admin')
	{
		$('.group_id').removeClass('hidden');
		$('.expire').addClass('hidden');
	}else if(level == 'premium'){

		$('.group_id').addClass('hidden');
		$('.expire').removeClass('hidden');
	}else{
		$('.group_id').addClass('hidden');
		$('.expire').addClass('hidden');
	}
});
 
$(document).ready(function(){
var level = "{{ $edit->level }}";
	if(level == 'admin')
	{
		$('.group_id').removeClass('hidden');
		$('.expire').addClass('hidden');
	}else if(level == 'premium'){

		$('.group_id').addClass('hidden');
		$('.expire').removeClass('hidden');
	}else{
		$('.group_id').addClass('hidden');
		$('.expire').addClass('hidden');
	}
});
 
</script>

<div class="form-group group_id hidden">
<label>{{ trans('admin.group_id') }}</label>
{!! Form::select('group_id',App\Admin::pluck('name','id'),$edit->group_id,['class'=>'form-control','placeholder'=>'......']) !!}
</div>
 
<div class="form-group">
<label>{{ trans('admin.status') }}</label>
{!! Form::select('active',['1'=>trans('admin.active'),'0'=>trans('admin.deactivate')],$edit->active,['class'=>'form-control','placeholder'=>'......']) !!}
</div>

<div>
<label>{{ trans('admin.isblocking_user') }}</label>
{!! Form::select('blocking_user',['1'=>trans('admin.yes'),'0'=>trans('admin.no')],$edit->blocking_user,['class'=>'form-control','placeholder'=>'......']) !!}	
</div>
 
 	

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
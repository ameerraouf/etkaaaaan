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
{!! Form::open(['url'=>app('aurl').'/sections/'.$edit->id,'method'=>'put']) !!}
<div class="form-body">
<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="name" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ $edit->name }}" placeholder="{{ trans('admin.name') }}">
</div>
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
@if(old('country_id'))
$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{country_id:'{{ old('country_id') }}',select:'{{ old('area_id') }}'},
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
@endif

$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{country_id:'{{ $edit->country_id }}',select:'{{ $edit->area_id }}'},
 	beforeSend: function()
 	{
 		$('.loadingc').removeClass('hidden');
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
@if(old('area_id'))
$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{area_id:'{{ old('area_id') }}',select:'{{ old('city_id') }}'},
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
@endif
$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{area_id:'{{ $edit->area_id }}',select:'{{ $edit->city_id }}'},
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
<label>{{ trans('admin.countries') }}</label>
{!! Form::select('country_id',App\Country::pluck('name','id'),$edit->country_id,['class'=>'form-control country','placeholder'=>'.........']) !!}
<i class="fa fa-spinner fa-spin loadingc hidden"></i>
</div>
 
<div class="form-group">
<label>{{ trans('admin.areas') }}</label>
<div class="areas"></div>
</div>

<div class="form-group">
<label>{{ trans('admin.city') }}</label>
<div class="city"></div>
</div>

<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
</div>
</div>
</div>
	 
	<!-- END SAMPLE FORM PORTLET-->

@stop
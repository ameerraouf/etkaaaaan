@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/users/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<br>
<br>
<div class="col-md-6">
	
<a href="{{ url(app('aurl').'/users?active=all&level='.Request::get('level').'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn blue">{{ trans('admin.all') }}</a>
<a href="{{ url(app('aurl').'/users?active=1&level='.Request::get('level').'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn blue">{{ trans('admin.active') }} <i class="fa fa-star"></i></a>
<a href="{{ url(app('aurl').'/users?active=0&level='.Request::get('level').'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn red">{{ trans('admin.deactivate') }} <i class="fa fa-star-o"></i></a>
<br />
<p>{{ trans('admin.usersmsgcontrol') }}</p>
<br />
<a href="{{ url(app('aurl').'/users?active='.Request::get('active').'&level=user'.'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn red">{{ trans('admin.user') }} <i class="fa fa-user"></i></a>
 
 

<a href="{{ url(app('aurl').'/users?active='.Request::get('active').'&level=admin'.'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn red">{{ trans('admin.admin') }} <i class="fa fa-user"></i></a>
<a href="{{ url(app('aurl').'/users?active='.Request::get('active').'&level='.'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}" class="btn red">{{ trans('admin.allusers') }} <i class="fa fa-group"></i></a>

<a href="{{ url(app('aurl').'/users?active='.Request::get('active').'&level='.'&country_id='.Request::get('country_id').'&city_id='.Request::get('city_id').'&area_id='.Request::get('area_id')) }}&blocking_user=1" class="btn red">{{ trans('admin.blocked') }} <i class="fa fa-group"></i></a>



</div>
<div class="col-md-6">
	{!! Form::open(['method'=>'get']) !!}
<div class="form-group">
	<label>{{ trans('admin.search') }}</label>
	<input type="text" name="search" placeholder="{{ trans('admin.searchuserto') }}" class="form-control" value="{{ Request::get('search') }}" />
</div>
<button type="submit" class="btn blue">{{ trans('admin.search') }} <i class="fa fa-search"></i></button>
{!! Form::close() !!}
</div>
<div class="col-md-12 hidden">
	<hr />

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
 		$('.preparing').removeClass('hidden');
 	}
 });
});
@if(Request::get('country_id'))
$(document).ready(function(){
	 $.ajax({
 	url:projecturl+'{{ app('aurl') }}/sections/get',
 	dataType:'html',
 	type:'get',
 	data:{country_id:'{{ Request::get('country_id') }}',select:'{{ Request::get('area_id') }}'},
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

@if(Request::get('area_id'))
	$(document).ready(function(){
		 $.ajax({
	 	url:projecturl+'{{ app('aurl') }}/sections/get',
	 	dataType:'html',
	 	type:'get',
	 	data:{area_id:'{{ Request::get('area_id') }}',select:'{{ Request::get('city_id') }}'},
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
</script> 
{!! Form::open(['method'=>'get']) !!}
<div class="col-md-3">
<div class="form-group">
<label>{{ trans('admin.countries') }}</label>
{!! Form::select('country_id',App\Country::pluck('name','id'),Request::get('country_id'),['class'=>'form-control country','placeholder'=>'.........']) !!}
<i class="fa fa-spinner fa-spin loadingc hidden"></i>
</div>
</div>
 
<div class="col-md-3">
<div class="form-group">
<label>{{ trans('admin.areas') }}</label>
<div class="areas"></div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>{{ trans('admin.city') }}</label>
<div class="city"></div>
</div>
</div>
<div class="col-md-3">
<br>
<button type="submit" class="btn green @if(!Request::has('country_id')) hidden @endif preparing">{{ trans('admin.preparing') }} <i class="fa fa-search"></i> </button>
</div>
{!! Form::close() !!}
</div>

<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-group"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.level') }}</th>
									<th>{{ trans('admin.orders_step1') }}</th>
									<th>{{ trans('admin.orders_step2') }}</th>
									<th>{{ trans('admin.orders_step3') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{ $user->name }}</td>
									<td>
									@if($user->active == 0)
									<span class="label label-danger pulsate-regular">{{ trans('admin.deactivate') }}</span>
									@elseif($user->blocking_user == 1)
									<span class="label label-danger pulsate-regular">{{ trans('admin.blocked') }}</span>
									@else
									<span class="label label-info">{{ trans('admin.active') }}</span>
									@endif

									</td>
									
									<td>
<span class="label @if($user->level == 'admin')label-info @elseif($user->level == 'premium') label-success @else label-default @endif">{{ trans('admin.'.$user->level) }}</span>
@if($user->level == 'premium')<br>
{{ trans('admin.from') }} - {{ date('d/m/Y',$user->expire_from) }} <br>
{{ trans('admin.to') }} - {{ date('d/m/Y',$user->expire_to) }} 
@endif	
									</td>
									<td>

									@if(!empty($user->step1()->first()))
										@if($user->step1()->first()->status == 'accept')
										<span class="label label-success">{{trans('admin.accept')}}</span>
										@elseif($user->step1()->first()->status == 'panding' || $user->step1()->first()->status == null)
										<span class="label label-warning">{{trans('admin.panding')}}</span>	
										@elseif($user->step1()->first()->status == 'refused')
										<span class="label label-danger">{{trans('admin.refused')}}</span>	
										@endif
									<a href="{{url(app('aurl').'/orders/'.$user->step1()->first()->id.'/edit')}}" class="label  label-default ">{{trans('admin.edit')}}</a>
									@else
									 <span class="label label-danger">{{trans('admin.no_order')}}</span>
									@endif

									</td>
									<td>
									@if(!empty($user->step2()->first()))
										@if($user->step2()->first()->status == 'accept')
										<span class="label label-success">{{trans('admin.accept')}}</span>
										@elseif($user->step2()->first()->status == 'panding' || $user->step2()->first()->status == null)
										<span class="label label-warning">{{trans('admin.panding')}}</span>	
										@elseif($user->step2()->first()->status == 'refused')
										<span class="label label-danger">{{trans('admin.refused')}}</span>	
										@endif
							     	<a href="{{url(app('aurl').'/orders2/'.$user->id.'/edit')}}" class="label  label-default ">{{trans('admin.edit')}}</a>
									@else
									 <span class="label label-danger">{{trans('admin.no_order')}}</span>
									@endif

									</td>
									<td>
									<?php
									 $hasfiles    =  $user->step3()->count();
									 $statusfiles =  $user->step3()->where('status','!=','accept')->count();
									?>
									@if($hasfiles > 0)
										@if($statusfiles == 0)
										<span class="label label-success">{{trans('admin.accept')}}</span>
										@elseif($statusfiles > 0)
										<span class="label label-warning">{{trans('admin.panding')}}</span>	
										@endif
									<a href="{{url(app('aurl').'/orders3/'.$user->id.'/edit')}}" class="label  label-default ">{{trans('admin.edit')}}</a>
									@else
									 <span class="label label-danger">{{trans('admin.no_order')}}</span>
									@endif
									</td>
									<td>
									<a href="{{ url(app('aurl').'/users/'.$user->id) }}"  title="{{ trans('admin.full_file') }}" class="btn blue"><i class="fa fa-file"></i></a>
									<a href="{{ url(app('aurl').'/users/'.$user->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $user->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/users/'.$user->id,'class'=>'deleteform'.$user->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $users->appends([
										'active'=>Request::get('active'),
										'level'=>Request::get('level'),
										'search'=>Request::get('search'),
										'country_id'=>Request::get('country_id'),
										'area_id'=>Request::get('area_id'),
										'city_id'=>Request::get('city_id'),
											])->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
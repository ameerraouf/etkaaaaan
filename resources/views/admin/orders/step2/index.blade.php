@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/orders2?status=panding') }}" class="btn yellow">{{ trans('admin.panding') }}</a>
<a href="{{ url(app('aurl').'/orders2?status=accept') }}" class="btn green">{{ trans('admin.accept') }}</a>
<a href="{{ url(app('aurl').'/orders2?status=refused') }}" class="btn red">{{ trans('admin.refused') }}</a>

{!! Form::open(['method'=>'get']) !!}
	
	<div class="col-md-6 col-lg-6">
	<label>{{trans('admin.search')}}</label>
	<input type="text" name="search" class="form-control" placeholder="{{trans('admin.search_orders')}}" value="{{Request::get('search')}}" />
	<p><small style="color:#c33">{{trans('admin.search_orders')}}</small></p>
	</div>
	<div class="col-md-6 col-lg-6">
		{!! Form::submit(trans('admin.search'),['class'=>'btn green','style'=>'margin-top:15px;']) !!}
	</div>

<div class="clearfix"></div>
{!! Form::close() !!}
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>{{ trans('admin.user_id') }}</th>
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($orders as $slide)
								<tr>
									<td>{{ $slide->user_id }}</td>
									<td>{{ $slide->user()->first()->name }}</td>
									<td>
										
										@if($slide->status == 'panding')
										<span class="label label-warning pulsate-regular">{{ trans('admin.panding') }}</span>
										@elseif($slide->status == 'refused')
										<span class="label label-danger pulsate-regular">{{ trans('admin.refused') }}</span>
										@elseif($slide->status == 'accept')
										<span class="label label-success">{{ trans('admin.accept') }}</span>
										@endif
									</td>
									<td>
									<a href="{{ url(app('aurl').'/orders2/'.$slide->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $slide->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/orders2/'.$slide->id,'class'=>'deleteform'.$slide->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $orders->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/packages/orderpackages?status=panding') }}" class="btn yellow">{{ trans('admin.panding') }}</a>
<a href="{{ url(app('aurl').'/packages/orderpackages?status=refused') }}" class="btn red">{{ trans('admin.refused') }}</a>
<a href="{{ url(app('aurl').'/packages/orderpackages?status=accept') }}" class="btn green">{{ trans('admin.accept') }}</a>
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
									<th>{{ trans('admin.timeout') }}</th>
									<th>{{ trans('admin.timeout_type') }}</th>
									<th>{{ trans('admin.file_bank') }}</th>
									<th>{{ trans('admin.addby') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($orders as $order)
								@php $user = $order->user()->first();  @endphp 
								<tr>
									<td>{{ $order->timeout }}</td>
									<td>{{ trans('admin.'.$order->timeout_type) }}</td>
									<td>{{ $order->file_bank }}</td>
									<td><a href="{{url(app('aurl').'/users/'.$user->id.'/edit')}}" target="_blank">{{ $user->name }}</a></td>
									<td>
									@if($order->status == 'panding')
									
									<span class="label label-warning pulsate-regular">{{ trans('admin.panding') }}</span>
									@elseif($order->status == 'refused')
									<span class="label label-danger pulsate-regular">{{ trans('admin.refused') }}</span>
									@else
									<span class="label label-info">{{ trans('admin.accept') }}</span>
									@endif
									</td>
									<td>
									<a href="{{ url(app('aurl').'/packages/orderpackages/'.$order->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $order->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/packages/orderpackages/'.$order->id,'class'=>'deleteform'.$order->id]) !!}
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
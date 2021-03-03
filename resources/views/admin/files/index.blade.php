@extends(app('at').'.index')
@section('admin')
<a href="{{url(app('aurl').'/orders3?status=panding')}}" class="btn yellow">{{trans('admin.panding')}}</a>
<a href="{{url(app('aurl').'/orders3?status=accept')}}" class="btn green">{{trans('admin.accept')}}</a>
<div class="clearfix"></div>
<br >
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
									<th>{{ trans('admin.user') }}</th>
									<th>{{ trans('admin.count_files') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($orders as $order)
								<tr>
									<td>{{ $order->user()->first()->name }}</td>
									<td>
									
									<h3> {{ trans('admin.count_files') }}:  {{App\Order3::where('user_id',$order->user_id)->count()}} <i class="fa fa-file fa-2x"></i></h3>
									</td>
									<td>
								   	 @if(App\Order3::where('user_id',$order->user_id)->where('status','!=','accept')->count() > 0) 
								   	  <span class="label label-warning">{{trans('admin.panding')}}</span>
								   	 @else
								   	  <span class="label label-success">{{trans('admin.accept')}}</span>
								   	 @endif
									</td>
									<td>
									<a href="{{ url(app('aurl').'/orders3/'.$order->user_id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $order->user_id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/orders3/'.$order->user_id,'class'=>'deleteform'.$order->user_id]) !!}
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
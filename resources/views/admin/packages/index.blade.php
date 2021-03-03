@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/packages/create') }}" class="btn green">{{ trans('admin.add') }}</a>
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
									<th>#</th>
									<th>{{ trans('admin.timeout') }}</th>
									<th>{{ trans('admin.price') }}</th>
									<th>{{ trans('admin.timeout_type') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($packages as $package)
								<tr>
									<td>{{ $package->id }}</td>
									<td>{{ $package->timeout }}</td>
									<td>${{ $package->price }} - USD دولار</td>
									<td>{{ trans('admin.'.$package->timeout_type) }}</td>
									<td>
									<a href="{{ url(app('aurl').'/packages/'.$package->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $package->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/packages/'.$package->id,'class'=>'deleteform'.$package->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $packages->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
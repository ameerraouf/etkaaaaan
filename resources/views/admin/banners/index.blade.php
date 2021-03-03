@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/banners/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>{{ trans('admin.title') }}</th>
									<th>{{ trans('admin.addby') }}</th>
									<th>{{ trans('admin.start_to') }}</th>
									<th>{{ trans('admin.expire_to') }}</th>
									<th>{{ trans('admin.type') }}</th>
									<th>{{ trans('admin.place') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($banners as $banner)
								<tr>
									<td>{{ $banner->title }}</td>
									<td>{{ $banner->user()->first()->name }}</td>
									<td>{{ @date('d-m-Y',$banner->start_to) }}</td>
									<td>{{ @date('d-m-Y',$banner->expire_to) }}</td>
									<td>{{ trans('admin.'.$banner->type) }}</td>
									<td>{{ trans('admin.'.$banner->place) }}</td>
									<td>
									@if($banner->active == 0)
									<span class="label label-danger pulsate-regular">{{ trans('admin.deactivate') }}</span>
									@else
									<span class="label label-info">{{ trans('admin.active') }}</span>
									@endif

									</td>
									<td>
									<a href="{{ url(app('aurl').'/banners/'.$banner->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $banner->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/banners/'.$banner->id,'class'=>'deleteform'.$banner->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>

								{!! $banners->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
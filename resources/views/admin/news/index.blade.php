@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/news/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>{{ trans('admin.title') }}</th>
									<th>{{ trans('admin.photo') }}</th>
									<th>{{ trans('admin.department') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($allnews as $dep)
								<tr>
									<td>{{ $dep->title }}</td>
									<td>
									@if(!empty($dep->photo))
								<img src="{{ url('upload/'.$dep->photo) }}" style="width:100px;height:100px;" />
									@endif 
									</td>
									<td>{{ $dep->department()->first()->title ?? 'لم يحدد' }}</td>
									<td>
									<a href="{{ url(app('aurl').'/news/'.$dep->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $dep->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/news/'.$dep->id,'class'=>'deleteform'.$dep->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $allnews->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
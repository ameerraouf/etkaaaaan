@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/sections/create') }}" class="btn green">{{ trans('admin.add') }}</a>
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
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.country') }}</th>
									<th>{{ trans('admin.area') }}</th>
									<th>{{ trans('admin.city') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($sections as $section)
								<tr>
									<td>{{ $section->name }}</td>
									<td>{{ $section->country()->first()->name }}</td>
									<td>{{ $section->area()->first()->name }}</td>
									<td>{{ @$section->city()->first()->name }}</td>
									<td>
									<a href="{{ url(app('aurl').'/sections/'.$section->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $section->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/sections/'.$section->id,'class'=>'deleteform'.$section->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>

								{!! $sections->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
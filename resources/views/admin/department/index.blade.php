@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/department/create') }}" class="btn green">{{ trans('admin.add') }}</a>
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
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($departments as $dep)
								<tr>
									<td>{{ $dep->title }}
									<ol>
									  @foreach($dep->parent()->get() as $parent)
									   <li>
									   	{{$parent->title}}  
									   	<a href="{{ url(app('aurl').'/department/'.$parent->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn red delrec" classform="deleteform{{ $parent->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
										{!! Form::open(['method'=>'delete','url'=>app('aurl').'/department/'.$parent->id,'class'=>'deleteform'.$parent->id]) !!}
										{!! Form::close() !!}
									   </li>
									  @endforeach
									</ol>	

									</td>
								 
									<td>
									<a href="{{ url(app('aurl').'/department/'.$dep->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									@if($dep->id != 9 and $dep->id != 8)
									<a href="#" class="btn red delrec" classform="deleteform{{ $dep->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/department/'.$dep->id,'class'=>'deleteform'.$dep->id]) !!}
									{!! Form::close() !!}
									@endif
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $departments->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
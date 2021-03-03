@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/Numbers/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> الارقام
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>الاعضاء</th>
									<th>المدرسين</th>
									<th>الحلقات</th>
									<th>الحفاظ</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    @if($numbers)
								<tr>
									<td>{{ $numbers->users }}</td>
									<td>{{ $numbers->teachers }}</td>
									<td>{{ $numbers->sessions }}</td>
									<td>{{ $numbers->keeps }}</td>
									<td>
	<a href="{{ url(app('aurl').'/Numbers/'.$numbers->id.'/edit') }}" title="" class="btn green"><i class="fa fa-edit"></i></a>
									
									<a href="#" class="btn red delrec" classform="deleteform{{ $numbers->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									
									
								    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/Numbers/'.$numbers->id,'class'=>'deleteform'.$numbers->id]) !!}
									{!! Form::close() !!}
									
								    
								    
									</td>
								</tr>
							    @endif
							
								</tbody>
								</table>
							
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
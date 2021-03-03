@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/YearReaports/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> قالو عنا
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>الاسم</th>
									<th>صوره</th>
									<th>الوصف</th>
									<th>ملف</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    @if($rows)
							    @foreach($rows as $row)
								<tr>
									<td>{{ $row->name }}</td>
									<td>
									    @if($row->img)
			 <img src="{{ asset('assets/uplodedimage/'.$row->img) }}"
                      style="width:50px;height:50px;border-radius:50%" />
									    @else
									        لايوجد صوره
									    @endif
									</td>
									<td>{{ $row->description }}</td>
									<td>
									    <a href="{{ asset('assets/uplodedfiles/'.$row->file) }}">
									            فتح
									    </a>
									</td>
									<td>
	<a href="{{ url(app('aurl').'/YearReaports/'.$row->id.'/edit') }}" title="" class="btn green"><i class="fa fa-edit"></i></a>
									
									<a href="#" class="btn red delrec" classform="deleteform{{ $row->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									
									
								    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/YearReaports/'.$row->id,'class'=>'deleteform'.$row->id]) !!}
									{!! Form::close() !!}
									
								    
								    
									</td>
								</tr>
							    	@endforeach
							    @endif
							
								</tbody>
								</table>
							
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
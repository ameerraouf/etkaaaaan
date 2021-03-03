@extends(app('at').'.index')
@section('admin')

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
								
									<th>الاسم</th>
									<th>رقم الهاتف</th>
									<th>الايميل</th>
									<th>النوع </th>
									<th>
									    علاقه الطالب بالمسجد
									</th>
									<th>المسجد </th>
									<th>اسم الامام </th>
									<th>
									    العنوان
									 </th>
									<th>
									    ملاحظات    
									</th>
									<th>##</th>
									
								</tr>
								</thead>
								<tbody>
								    
							    @if($says)
							    @foreach($says as $said)
							   
								<tr>
									
									<td>{{ $said->name }}</td>
									<td>{{ $said->phone }}</td>
									<td>{{ $said->email }}</td>
									<td>{{ $said->type }}</td>
									<td>{{ $said->relation }}</td>
									<td>{{ $said->mosque }}</td>
									<td>{{ $said->emam_name }}</td>
									<td>{{ $said->address }}</td>
									<td>{{ $said->note }}</td>
									<td>
                                    
                                <a href="#" class="btn red delrec" classform="deleteform{{ $said->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									
								    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/Episodes/'.$said->id,'class'=>'deleteform'.$said->id]) !!}
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
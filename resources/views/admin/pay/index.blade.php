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
									<th>السعر</th>
									<th>الدوله</th>
									<th>المدينه</th>
									<th>الاسم</th>
									<th>رقم الهاتف</th>
									<th>الايميل</th>
									<th>النوع </th>
									<th>البنك</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
								    
							    @if($says)
							    @foreach($says as $said)
							   
								<tr>
									<td>{{ $said->price }}</td>
									<td>{{ $said->country }}</td>
									<td>{{ $said->city }}</td>
									<td>{{ $said->name }}</td>
									<td>{{ $said->phone }}</td>
									<td>{{ $said->email }}</td>
									<td>{{ $said->type }}</td>
									<td>{{ $said->bank }}</td>
									<td>
                                    
                                <a href="#" class="btn red delrec" classform="deleteform{{ $said->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									
								    {!! Form::open(['method'=>'delete','url'=>app('aurl').'/Pay/'.$said->id,'class'=>'deleteform'.$said->id]) !!}
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
@extends(app('at').'.index')
@section('admin')
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>
								{{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>
									    التقييم
									</th>
									<th>##</th>
								</tr>
								</thead>
								<tbody>
							    @if($says)
							    @foreach($says as $said)
								<tr>
									<td>{{ $said['name'] }}</td>
									<td>

								{{ $said['count'] }}
									

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
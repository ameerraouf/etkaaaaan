@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/partner/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file"></i> شركاء العمل
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered text-center">
								<thead class="thead-dark">
								<tr>
									<th>{{ trans('الاسم') }}</th>
									<th>{{ trans('الشعار') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($partners as $partner)
								<tr>
									<td>{{ $partner->name }}</td>
									<td><img src="{{asset('public/'. $partner->logo)}}"></td>
									<td>
								    <a href="{{ url(app('aurl').'/partner/'.$partner->id.'/edit') }}" title="" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $partner->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/partner/'.$partner->id,'class'=>'deleteform'.$partner->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								@if($partners->count() == 0)
								    <tr>
								        <td colspan="3">لا يوجد بيانات</td>
								    </tr>
						        @endif
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
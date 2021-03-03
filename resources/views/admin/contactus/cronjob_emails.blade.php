@extends(app('at').'.index')
@section('admin')
 		<a href="{{ url(app('aurl').'/contactus/new/compose') }}" data-title="{{ trans('admin.compose') }}" class="btn green">
								<i class="fa fa-edit"></i> {{ trans('admin.compose') }}
							</a>
<br>
<small>{{ trans('admin.message_compose_cron') }}</small>
<hr />							

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
									<th>#</th>
									<th>{{ trans('admin.subject') }}</th>
									<th>{{ trans('admin.send_to') }}</th>
									<th>{{ trans('admin.email') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($maillists as $mail)
								<tr>
									<td>{{ $mail->id }}</td>
									<td>{{ $mail->subject }}</td>
									<td>
									@if($mail->send_to == 'admin')
									{{ trans('admin.gadmin') }}
									@elseif($mail->send_to == 'store')
									{{ trans('admin.guser') }}
									@elseif($mail->send_to == 'email')
									{{ trans('admin.email') }}
									@endif
									</td>
									<td>{{ $mail->email }}</td>
									<td>
									@if($mail->cronjob_status == 0)
									<span class="label label-danger pulsate-regular">{{ trans('admin.panding') }}</span>
									@else
									<span class="label label-info">{{ trans('admin.sent') }}</span>
									@endif
									</td>
									<td>
									<a href="{{ url(app('aurl').'/contactus/cronjob/messages/'.$mail->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $mail->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/contactus/cronjob/messages/'.$mail->id.'/delete','class'=>'deleteform'.$mail->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $maillists->render() !!}
							</div>
						</div>
					</div>
 
@stop
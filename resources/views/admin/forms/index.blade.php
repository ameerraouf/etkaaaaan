@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/formspdf/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.pdf') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($forms as $form)
								<tr>
									<td>{{ $form->title }}</td>
									<td><a href="{{ url('upload/'.$form->pdf) }}" target="_blank"><i class="fa fa-file fa-2x"></i></a></td>
									<td>
									<a href="{{ url(app('aurl').'/formspdf/'.$form->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red delrec" classform="deleteform{{ $form->id }}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/formspdf/'.$form->id,'class'=>'deleteform'.$form->id]) !!}
									{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>

								{!! $forms->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
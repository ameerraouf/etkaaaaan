@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/pages/create') }}" class="btn green">{{ trans('admin.add') }}</a>
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
								<table class="table table-hover table-bordered table table-striped">
								<thead>
								<tr>
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.status') }}</th>
									<th>ملفات</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($pages as $page)
								<tr>
									<td>{{ $page->name }}</td>
									<td>{{ trans('admin.'.$page->active) }}</td>
									<td>
									     @if($page->files->count())
                                            @foreach($page->files as $file)
                                                <a href="{{asset('assets/uplodedfiles/'. $file->file) }}" class="item slide-imgs h-100">
                                                    {{ $file->file }}
                                                </a>
                                            @endforeach
                                        @else 
                                       لايوجد
                                          @endif
                                	</td>
									<td>
									    <center>
									<a href="{{ url(app('aurl').'/pages/'.$page->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn hos-success">
									    <i class="fa fa-edit"></i>
									</a>
									<a href="{{ url('/page/'.$page->id) }}" target="_blank" title="{{ trans('admin.show') }}" class="btn hos-info">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn hos-danger delrec" classform="deleteform{{ $page->id }}" title="{{ trans('admin.delete') }}">
									    <i class="fa fa-times"></i>
									</a>
									{!! Form::open(['method'=>'delete','url'=>app('aurl').'/pages/'.$page->id.'/delete','class'=>'deleteform'.$page->id]) !!}
									  <input type="hidden" name="_token" value="{{ csrf_token() }}">
									{!! Form::close() !!}
									</center>
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
								{!! $pages->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
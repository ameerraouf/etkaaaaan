@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/links/create') }}" class="btn green">{{ trans('admin.add') }}</a>
<div class="clearfix"></div>
<br />
<script>
$(document).on('click','.delrec',function(){
	var furl = $(this).attr('furl');
	var classid = $(this).attr('classid');
	var classform = $(this).attr('classform');

	$('.formdelete').removeClass();
	$('#formdelete').addClass('formdelete');
	$('.formdelete').attr('action','{{url('/')}}/'+furl);
	$('.formdelete').addClass(classform);
});
</script>
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-link"></i> {{ $title }}
							</div>
						</div>
						<div class="portlet-body">
						{!! Form::open() !!}
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th>ترتيب</th>
									<th>{{ trans('admin.name') }}</th>
									<th>{{ trans('admin.url') }}</th>
									<th>{{ trans('admin.type') }}</th>
									<th>{{ trans('admin.action') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($links as $link)
								<tr>
									<td>
									<input type="text" name="dir[]" style="width:50px" value="{{$link->dir}}">
									<input type="hidden" name="id[]" value="{{$link->id}}">
									</td>
									<td>{{ $link->name }}</td>
									<td>{{ $link->url }}</td>
									<td>{{ trans('admin.'.$link->typelink) }}</td>
									<td>
									<a href="{{ url(app('aurl').'/links/'.$link->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
									<a href="#" class="btn red  delrec" classform="deleteform{{ $link->id }}" classid="{{ $link->id }}" furl="{{app('aurl').'/links/'.$link->id}}" title="{{ trans('admin.delete') }}"><i class="fa fa-times"></i></a>
									
									</td>
								</tr>
								<tr>
									<td colspan="5">
										 @foreach(App\Link::where('parent',$link->id)->get() as $sub)
										 <div class="col-md-6">
										 	<input type="text" name="dir[]" style="width:50px" value="{{$sub->dir}}">
										      <input type="hidden" name="id[]" value="{{$sub->id}}">

										 	<a href="{{ url($sub->url) }}" target="_blank">{{ $sub->name }}</a>
										 </div>
										 <div class="col-md-6">
										 	<a href="{{ url(app('aurl').'/links/'.$sub->id.'/edit') }}" title="{{ trans('admin.edit') }}" class="btn green"><i class="fa fa-edit"></i></a>
										

											    
											 <a href="#" class="btn red  delrec" 
											 classform="deleteform{{ $sub->id }}" 
											 classid="{{ $sub->id }}" 
											 furl="{{app('aurl').'/links/'.$sub->id}}" 
											 title="{{ trans('admin.delete') }}"
											 ><i class="fa fa-times"></i></a>
											 
										 </div>
										 <div class="clearfix"></div>
										 <hr />
										 @endforeach
									</td>
								</tr>

								@endforeach
								</tbody>
								</table>
								<input type="submit" name="save" value="حفظ الترتيب " class="btn green" />
								{!! Form::close() !!}
								{!! $links->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->

					{!! Form::open(['method'=>'delete','url'=>'','class'=>'formdelete','id'=>'formdelete']) !!}
					{!! Form::close() !!}
@stop
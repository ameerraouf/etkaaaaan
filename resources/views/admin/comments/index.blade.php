@extends(app('at').'.index')
@section('admin')
<a href="{{ url(app('aurl').'/comments?active=1') }}" class="btn green">{{ trans('admin.accept') }}</a>
<a href="{{ url(app('aurl').'/comments?active=0') }}" class="btn red">{{ trans('admin.panding') }}</a>
<div class="clearfix"></div>
<br />
<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> {{ $title }} - 
								@if(Request::get('active') == 1)
							 	{{ trans('admin.accept') }}
							 	@else
							 	{{ trans('admin.panding') }}
							 	@endif
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
							 
								 @foreach($comments as $comment)
								  <div>
								  	<ul>
								  		<li>{{trans('admin.news')}} : {{$comment->news()->first()->title}}</li>
								  		<li>{{trans('admin.user')}} : {{$comment->user()->first()->name}} </li>
								  		<li>{{trans('admin.comment')}} : {{$comment->comment }}</li>
								  		<li>	<br> <hr /></li>
								  		<li>{{trans('admin.status')}} 
								  		@if($comment->active == 0)

								  		<span class="label label-warning pulsate-regular">{{trans('admin.panding')}}</span>
								  		<br> <hr />
								  		<a href="{{url(app('aurl').'/comments?comment='.$comment->id.'&order=1')}}" class="btn green">{{trans('admin.do_active')}}</a>	
								  		@else
								  		<span class="label label-success">{{trans('admin.active')}}</span>
								  		<br> <hr />
								  		<a href="{{url(app('aurl').'/comments?comment='.$comment->id.'&order=0')}}" class="btn red">{{trans('admin.deactive')}}</a>	
								  		@endif
								  		<a href="{{url(app('aurl').'/comments?comment='.$comment->id.'&delete=1')}}" class="btn red pull-right">{{trans('admin.delete')}}</a>	
								  		</li>
								  	</ul>	
								  </div>
								 @endforeach	

								{!! $comments->appends(['active'=>Request::get('active')])->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
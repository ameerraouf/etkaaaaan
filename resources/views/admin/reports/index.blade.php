@extends(app('at').'.index')
@section('admin')
<style type="text/css" media="screen">
.list{
	padding:5px;
	margin:5px;
}	
.list li{
	list-style: none;
}
</style>
<a href="{{url(app('aurl').'/reports?get='.Request::get('get').'&done=0')}}" class="btn red">{{trans('admin.done_panding')}}</a>
<a href="{{url(app('aurl').'/reports?get='.Request::get('get').'&done=1')}}" class="btn green">{{trans('admin.done_is_done')}}</a>
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
						 
								@foreach($reports as $report)
								 <div class="panel panel-default">
								 <div class="panel-body">
								  	<ul class="list"> 
								  	<li>
								  		@if($report->comment_id > 0)
								  		<center><h1>{{trans('admin.report_comment')}}</h1></center>
								  		@elseif($report->news_id > 0)
								  		<center><h1>{{trans('admin.report_to_news')}}</h1></center>
								  		@elseif($report->to_user_id > 0)
								  		<center><h1>{{trans('admin.report_to_user')}}</h1></center>
								  		@endif
								  	</li>
								  	   @if(!empty($report->user()->first()))
								  		<li>{{trans('admin.report_by_user')}} : {{@$report->user()->first()->name}} </li>
								  	   @endif
								  		<li>{{trans('admin.content')}} : {{$report->content }}</li>
 								  		 
 										@if($report->comment_id > 0)
								  		<li>
								  		{{trans('admin.the_news')}} : 

								  		@if(!empty($report->comment()->first()) and !empty($report->comment()->first()->news()->first()))

								  		{{@$report->comment()->first()->news()->first()->title}}
								  		@else
								  		{{trans('admin.news_deleted')}}
								  		@endif 
								  		<br>
								  		@if(!empty($report->comment()->first()))
								  		{{trans('admin.comment')}} : {{@$report->comment()->first()->comment}}
								  		
								  		<br><br>

								  		<a href="#" class="btn red delrec" classform="deleteform{{ $report->comment_id }}" title="{{ trans('admin.delete_comment') }}">{{ trans('admin.delete_comment') }} <i class="fa fa-times"></i></a>

										{!! Form::open(['method'=>'delete','url'=>app('aurl').'/comments/'.$report->comment_id,'class'=>'deleteform'.$report->comment_id]) !!}
										{!! Form::close() !!}
										@else
										{{trans('admin.comment_is_deleted')}}
										@endif
								  		</li>
								  		@elseif($report->news_id > 0)
								  		<li>{{trans('admin.the_news')}} :
								  		@if(!empty($report->news()->first()))

								  		 <a href="{{url(app('aurl').'/news/'.@$report->news()->first()->id.'/edit')}}" target="_blank">{{@$report->news()->first()->title}}</a>
								  		<br><br>

								  		<a href="#" class="btn red delrec" classform="deleteform{{ $report->news_id }}" title="{{ trans('admin.delete_news') }}">{{ trans('admin.delete_news') }} <i class="fa fa-times"></i></a>

										{!! Form::open(['method'=>'delete','url'=>app('aurl').'/news/'.$report->news_id,'class'=>'deleteform'.$report->news_id]) !!}
										{!! Form::close() !!}

								  		@else
								  		{{trans('admin.news_deleted')}}
								  		@endif
								  		
								  		
								  		</li>
								  		@elseif($report->to_user_id > 0)
								  		<li>
								  		{{trans('admin.report_to_user')}} : <a href="{{url(app('aurl').'/users/'.@$report->to_user()->first()->id.'/edit')}}" target="_blank">{{@$report->to_user()->first()->name}}</a>
								  		<br><br>
								  		<a href="{{url(app('aurl').'/reports?report='.$report->id.'&order=block_user')}}" class="btn red">{{trans('admin.block_user')}} </a>	
								  		</li>
								  		
								  		@endif	

								  		<li>
								  		<br><br>
								  		<a href="{{url(app('aurl').'/reports?report='.$report->id.'&delete=1')}}" class="btn red pull-right">{{trans('admin.delete_report')}} </a>	
								  		</li>

								  		
								  	</ul>	
 								  </div>
 								  </div>
								@endforeach
							 	<hr />
								{!! $reports->appends(['done'=>Request::get('done'),'get'=>Request::get('get')])->render() !!}
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@stop
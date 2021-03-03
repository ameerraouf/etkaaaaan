@extends(app('at').'.index')
@section('admin')

			<div class="row inbox">
				<div class="col-md-2">
					@include(app('at').'.contactus.right')
				</div>
				<div class="col-md-10">

 <div class="inbox-header inbox-view-header">
	<h1 class="pull-left">{{$msg->title}}
	<a href="#">
		 {{ trans('admin.'.$msg->move_to) }}
	</a>
	</h1>
	<div class="pull-right">
		<a href="javascript:window.print();"><i class="fa fa-print"></i></a>
	</div>
</div>
<div class="inbox-view-info">
	<div class="row">
		<div class="col-md-7">
			 <i class="fa fa-envelope"></i>
			<span class="bold">
				 @if(!empty($msg->user()->first()))
				   {{ $msg->user()->first()->name }}
				   @else
				   {{ $msg->name }}
				 @endif
			</span>
			<span>
				 &#60;
				 @if(!empty($msg->user()->first()))
				 {{ $msg->user()->first()->email }}
				 @else
				 {{ $msg->email }}
				 @endif
				 &#62;
			</span>
			 {{ trans('admin.to') }}
			<span class="bold">
				{{ trans('admin.site') }}
			</span>
			 {{ trans('admin.in') }} {{ $msg->created_at }}
		</div>
	
			</div>
		</div>
		<div class="inbox-view">
		{{trans('admin.mobile')}} : {{ $msg->mobile }} <br>
		{{trans('admin.email')}} : {{ $msg->email }}
			<p>
		   {!! $msg->content !!}
			</p>
		</div>
		<hr />
		@php
			$replays = $msg->replay()->paginate(5);
		@endphp
		@foreach($replays as $replay)
		  <div class="inbox-view">
		  <i class="fa fa-user"></i> : {{ $replay->user()->first()->name }}
			<p>
		   {!! $replay->content !!}
			</p>
		</div>
		@endforeach
		<hr>
		{!! $replays->appends(['move_to'=>Request::get('move_to')])->render() !!}
		<div class="inbox-attached">
		 @php
		 	/*
			<div class="margin-bottom-15">
				<span>
					 {{ trans('admin.attachments') }}
				</span>
				<a href="#">
					 Download all attachments
				</a>
				<a href="#">
					 View all images
				</a>
			</div>
	<div class="margin-bottom-25">
				<img src="assets/img/gallery/image4.jpg">
				<div>
					<strong>image4.jpg</strong>
					<span>
						 173K
					</span>
					<a href="#">
						 View
					</a>
					<a href="#">
						 Download
					</a>
				</div>
			</div>
		 	*/
		 @endphp
	
		</div>

				</div>
			</div>
 
			{!! Form::open(['method'=>'delete','url'=>app('aurl').'/contactus/'.$msg->id,'class'=>'deleteform'.$msg->id]) !!}
									{!! Form::close() !!}

	{!! Form::open(['class'=>'inbox-compose form-horizontal','url'=>app('aurl').'/contactus/replay/'.$msg->id]) !!}
	<div class="inbox-compose-btn">
	
		   

		   	<div class="col-md-5 inbox-info-btn ">
			<div class="btn-group">
 						<button  type="submit" class="btn blue"><i class="fa fa-check"></i>{{ trans('admin.send') }}</button>
				<button class="btn blue dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					 
					<li>
						<a href="{{ url(app('aurl').'/contactus') }}">
							<i class="fa fa-arrow-right reply-btn"></i> {{ trans('admin.back') }}
						</a>
					</li>
					<li>
						<a href="javascript:window.print();">
							<i class="fa fa-print"></i> {{ trans('admin.print') }}
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#" class="delrec" classform="deleteform{{ $msg->id }}">
							<i class="fa fa-trash-o"></i> {{ trans('admin.delete') }}
						</a>
					</li>
						<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=inbox') }}" >
							<i class="fa fa-envelope"></i>  {{ trans('admin.inbox') }}
						</a>
					</li>
					<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=trash') }}" >
							<i class="fa fa-trash-o"></i>  {{ trans('admin.trash') }}
						</a>
					</li>
						<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=archive') }}" >
							<i class="fa fa-archive"></i>  {{ trans('admin.archive') }}
						</a>
					</li>
					<li>
					</div>
				</div>
					<div class="clearfix"></div>

	</div>
	<div class="inbox-form-group mail-to">
		<label class="control-label">{{ trans('admin.to') }}</label>
		<div class="controls controls-to">
		@php
			if(!empty($msg->user()->first()->email))
			{
				$email = $msg->user()->first()->email;
			}else{
				$email = $msg->email;
			}
		@endphp
			<input type="text" class="form-control" name="to" value="{{ $email }}">
			<span class="inbox-cc-bcc"  style="display:none">
				<span class="inbox-cc " style="display:none">
					 Cc
				</span>
				<span class="inbox-bcc">
					 Bcc
				</span>
			</span>
		</div>
	</div>
	@php
		/*
<div class="inbox-form-group input-cc hidden">
		<a href="javascript:;" class="close">
		</a>
		<label class="control-label">Cc:</label>
		<div class="controls controls-cc">
			<input type="text" name="cc" class="form-control" value="jhon.doe@gmail.com, kevin.larsen@gmail.com">
		</div>
	</div>
		*/
	@endphp
	<div class="inbox-form-group input-bcc display-hide">
		<a href="javascript:;" class="close">
		</a>
		<label class="control-label">Bcc:</label>
		<div class="controls controls-bcc">
			<input type="text" name="bcc" class="form-control">
		</div>
	</div>
	<div class="inbox-form-group">
		<label class="control-label">{{ trans('admin.subject') }}:</label>
		<div class="controls">
			<input type="text" class="form-control" name="subject" value="{{ $msg->title }}">
		</div>
	</div>
	<div class="inbox-form-group">
		<div class="controls-row" dir="rtl">
			<textarea class="inbox-editor ckeditor form-control pull-right" style="text-align: right;float: right;" dir="rtl" name="content"  rows="12">
				<div  style="text-align: : right;" dir="rtl">
					{!! $msg->content !!}
				<hr />
				<p>{{ trans('admin.to') }} : {{ $email }}</p>
				<p>{{ trans('admin.subject') }} : {{ $msg->title }}</p>
					<br />
					<hr />
				</div>
 	 		</textarea>
		  
		</div>
	</div>

	<div class="inbox-compose-btn">
	

		   	<div class="col-md-5 inbox-info-btn ">
			<div class="btn-group">
 						<button  type="submit" class="btn blue"><i class="fa fa-check"></i>{{ trans('admin.send') }}</button>
				<button class="btn blue dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					 
					<li>
						<a href="{{ url(app('aurl').'/contactus') }}">
							<i class="fa fa-arrow-right reply-btn"></i> {{ trans('admin.back') }}
						</a>
					</li>
					<li>
						<a href="javascript:window.print();">
							<i class="fa fa-print"></i> {{ trans('admin.print') }}
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#" class="delrec" classform="deleteform{{ $msg->id }}">
							<i class="fa fa-trash-o"></i> {{ trans('admin.delete') }}
						</a>
					</li>
						<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=inbox') }}" >
							<i class="fa fa-envelope"></i>  {{ trans('admin.inbox') }}
						</a>
					</li>
					<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=trash') }}" >
							<i class="fa fa-trash-o"></i>  {{ trans('admin.trash') }}
						</a>
					</li>
						<li>
						<a href="{{ url(app('aurl').'/contactus/'.$msg->id.'?move_to=archive') }}" >
							<i class="fa fa-archive"></i>  {{ trans('admin.archive') }}
						</a>
					</li>
					<li>
					</div>
				</div>
					<div class="clearfix"></div>
	
	</div>
{!! Form::close() !!}
@stop
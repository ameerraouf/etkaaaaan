	<div class="inbox-header">
						<h1 class="pull-left">{{ trans('admin.inbox') }}</h1>
							{!! Form::open(['method'=>'get','class'=>'form-inline pull-right']) !!}
							<div class="input-group input-medium">
								<input type="text" name="search" class="form-control" value="{{ Request::get('search') }}" placeholder="{{ trans('admin.search') }}">
								<span class="input-group-btn">
									<button type="submit" class="btn green"><i class="fa fa-search"></i></button>
								</span>
							</div>
						   {!! Form::close() !!}								
					</div>
					<div class="inbox-loading">
					{!! Form::open(['url'=>app('aurl').'/contactus/go','method'=>'post']) !!}
 						<div class="table-responsive">
								<table class="table table-hover table-bordered">
								<thead>
								<tr>
									<th></th>
									<th>الرساله</th>
									<th>{{ trans('admin.sent_by') }}</th>
								</tr>
								</thead>
								<tbody>
								@foreach($messages as $msg)
								 <tr @if($msg->reading == 0) class="success" @endif>
								 	<td><input type="checkbox" name="id[]" value="{{ $msg->id }}"></td>
								 	<td><a href="{{ url(app('aurl').'/contactus/'.$msg->id) }}">{{ $msg->content }}</a></td>
								 	<td>
    								 {{ $msg->email }}
								 	</td>
								 </tr>
								@endforeach	
						   	</tbody>
								</table>
				@if(count($messages) > 0)				
	       	   	<div class="col-md-5 inbox-info-btn ">
  				 	   {!! Form::select('move_to',[
 				 	   			'inbox'=>trans('admin.inbox'),
 				 	   			'trash'=>trans('admin.trash'),
 				 	   			'archive'=>trans('admin.archive'),
 				 	   			'delete'=>trans('admin.delete'),
 				 	   			],'',['class'=>'form-control','style'=>'display:inline']) !!}
			    	</div>
	       	   	<div class="col-md-5 inbox-info-btn ">
 		 			 {!! Form::submit(trans('admin.send'),['class'=>'btn green','style'=>'display:inline']) !!}
			    	</div>
					<div class="clearfix"></div>
								{!! Form::close() !!}

								{!! $messages->appends([
										'search'=>Request::get('search'),
										'move_to'=>Request::get('move_to'),
									])->render() !!}
					</div>
					@endif
					<div class="inbox-content">
 					</div>
 
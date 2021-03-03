<ul class="inbox-nav margin-bottom-10">
						<li class="compose-btn">
							<a href="{{ url(app('aurl').'/contactus/new/compose') }}" data-title="{{ trans('admin.compose') }}" class="btn green">
								<i class="fa fa-edit"></i> {{ trans('admin.compose') }}
							</a>
						</li>

						<li class="compose-btn">
						    <a href="{{ url(app('aurl').'/contactus/cronjob/messages') }}" data-title="{{ trans('admin.compose') }}" class="btn green">
								<i class="fa fa-envelope"></i> {{ trans('admin.cronjob_emails') }}
							</a>
						</li>

						
						<li class="inbox @if(!Request::has('move_to') || Request::get('move_to') == 'inbox') active @endif">
							<a href="{{url(app('aurl'))}}/contactus?move_to=inbox" class="btn" data-title="Inbox">
								<i class="fa fa-envelope-o"></i>
								@php
									$countinbox = App\Contact::where('reading',0)->count();
								@endphp
								 {{ trans('admin.inbox') }} @if($countinbox > 0) ({{ $countinbox }}) @endif
							</a>
							<b></b>
						</li>
				@php
					/*		<li class="sent  @if(Request::get('move_to') == 'sent') active @endif">
							<a class="btn" href="{{url(app('aurl'))}}/contactus?move_to=sent" data-title="Sent">
								 {{ trans('admin.sent') }}
							</a>
							<b></b>
						</li>*/
				@endphp
						<li class="archive @if(Request::get('move_to') == 'archive') active @endif">
							<a class="btn" href="{{url(app('aurl'))}}/contactus?move_to=archive" data-title="{{ trans('admin.archive') }}">
							<i class="fa fa-archive"></i>	 
							{{ trans('admin.archive') }} ({{ App\Contact::where('move_to','archive')->count() }})
							</a>
							<b></b>
						</li>
						<li class="trash @if(Request::get('move_to') == 'trash') active @endif">
							<a class="btn" href="{{url(app('aurl'))}}/contactus?move_to=trash" data-title="trash">
							<i class="fa fa-trash-o"></i>
								 {{ trans('admin.trash') }} ({{ App\Contact::where('move_to','trash')->count() }})
							</a>
							<b></b>
						</li>
					</ul>
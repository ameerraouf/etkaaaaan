@extends(app('at').'.index')
@section('admin')

	<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> {{ $title }}
							</div>
						</div>
	<div class="portlet-body form">
							{!! Form::open(['files'=>true]) !!}
								<div class="form-body">
									<div class="form-group">
										<label>{{ trans('admin.sitename') }}</label>
										<input name="sitename" type="text" placeholder="{{ trans('admin.sitename') }}" class="form-control" value="{{ Set::set()->sitename }}" placeholder="{{ trans('admin.sitename') }}">
										</div>
										 
										

										<div class="form-group">
										<label>{{ trans('admin.siteurl') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-link"></i>
											</span>
											<input type="url"  value="{{ Set::set()->siteurl }}" name="siteurl" class="form-control" placeholder="{{ trans('admin.siteurl') }}">
										</div>
										</div>

										<!--<div class="form-group">-->
										<!--<label>{{ trans('admin.active_users') }}</label>-->
										<!--<div class="input-group">-->
										<!--	<span class="input-group-addon">-->
										<!--		<i class="fa fa-group"></i>-->
										<!--	</span>-->
										<!--{!! Form::select('active_users',['auto'=>trans('admin.auto'),'email'=>trans('admin.byemail'),'sms'=>trans('admin.bysms')],Set::set()->active_users,['class'=>'form-control']) !!}	-->
										<!--</div>-->
										<!--</div>-->
 
										<div class="form-group">
										<label>{{ trans('admin.status_site') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-globe"></i>
											</span>
										{!! Form::select('status_site',['open'=>trans('admin.open'),'close'=>trans('admin.close')],Set::set()->status_site,['class'=>'form-control']) !!}	
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.status_message') }} </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-globe"></i>
											</span>
											 <textarea name="status_message" class="form-control" placeholder="{{ trans('admin.status_message') }}" >{{ Set::set()->status_message }}</textarea>
										</div>
										</div>

										 
										<div class="form-group">
										<label>{{ trans('admin.keywords') }} </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-tag"></i>
											</span>
											 <textarea name="keywords" class="form-control" placeholder="{{ trans('admin.keywords') }}" >{{ Set::set()->keywords }}</textarea>
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.discription') }} </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-tag"></i>
											</span>
											 <textarea name="discription" class="form-control" placeholder="{{ trans('admin.discription') }}" >{{ Set::set()->discription }}</textarea>
										</div>
										</div>
 	


										<div class="form-group">
										<label>{{ trans('admin.active_comment') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
										{!! Form::select('active_comment',['1'=>trans('admin.open'),'0'=>trans('admin.close')],Set::set()->active_comment,['class'=>'form-control']) !!}	
										</div>
										</div>

										
 									    <div class="form-group">
										<label>{{ trans('admin.enable_watermark') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
										{!! Form::select('enable_watermark',['1'=>trans('admin.open'),'0'=>trans('admin.close')],Set::set()->enable_watermark,['class'=>'form-control']) !!}	
										</div>
										</div>



										<div class="form-group">
										<label>{{ trans('admin.watermark') }} </label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-photo"></i>
											</span>
											 <input type="file" name="watermark" class="form-control">
											 @if(!empty(Set::set()->watermark))
											 <img src="{{url('upload/'.Set::set()->watermark)}}" style="width:100px;height:100px;" />
											 @endif
										</div>
										</div>
 							 
 
										<hr />

										<div class="form-group">
										<label>{{ trans('admin.sitemail') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
											<input type="email" 
											 value="{{ Set::set()->sitemail }}" name="sitemail" class="form-control" placeholder="{{ trans('admin.sitemail') }}">
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.fax') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-fax"></i>
											</span>
											<input type="text" 
											 value="{{ Set::set()->fax }}" name="fax" class="form-control" placeholder="{{ trans('admin.fax') }}">
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.phone') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-mobile-phone"></i>
											</span>
											<input type="text" 
											 value="{{ Set::set()->mobile2 }}" name="mobile2" class="form-control" placeholder="{{ trans('admin.phone') }}">
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.facebook') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-facebook"></i>
											</span>
											<input type="text" 
											 value="{{ Set::set()->facebook }}" name="facebook" class="form-control" placeholder="{{ trans('admin.facebook') }}">
										</div>
										</div>

										<div class="form-group">
										<label>{{ trans('admin.twitter') }}</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-twitter"></i>
											</span>
											<input type="text" 
											 value="{{ Set::set()->twitter }}" name="twitter" class="form-control" placeholder="{{ trans('admin.twitter') }}">
										</div>
										</div>


									
								</div>
								<div class="form-actions left">
								{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
								</div>
							{!! Form::close() !!}
					 
					</div>
					<!-- END SAMPLE FORM PORTLET-->

@stop
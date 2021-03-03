@extends(app('at').'.index')
@section('admin')
				<?php $SMS = new App\Http\Controllers\SMS; ?>
	<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> {{ $title }}
							</div>
						</div>
				<div class="portlet-body form" style="padding:10px;">
					
	 
<div class="tabbable" id="tabs-579673" style="padding:10px;">
				<ul class="nav nav-tabs">
					<li class="pull-left @if(Request::get('sms') == 'send' or !Request::has('sms')) active @endif"  >
						<a href="?sms=send" >ارسال رسائل لارقام</a>
					</li>
					<li class="pull-left @if(Request::get('sms') == 'setting')  active @endif ">
						<a href="?sms=setting" >اعدادات البوابة</a>
					</li>
				</ul>
				<div class="tab-content">
				 
					<div class="tab-pane @if(Request::get('sms') == 'send' or !Request::has('sms')) active @endif"  >
						{!! Form::open(array('method'=>'put')) !!}
						   <div class="form-group">
						 	{!! Form::label('number',trans('admin.number')) !!}
						 	{!! Form::text('number','',array('class'=>'form-control','placeholder'=>trans('admin.number'))) !!}
						 <small>يمكن ارسال الرسالة لاكثر من رقم بوضع فاصلة ما بين الارقام (,) مثال 
						 <span class="label label-info">966123456789,966123456789</span>
						 	</small>
						 </div>
						 <div class="form-group">
						 	{!! Form::label('msg',trans('admin.msg')) !!}
						 	{!! Form::textarea('msg','',array('class'=>'form-control','placeholder'=>trans('admin.msg'))) !!}
						 </div>
						 {!! Form::submit(trans('admin.send'),array('class'=>'btn btn-success')) !!}
						{!! Form::close() !!} 
					</div>
					<div class="tab-pane @if(Request::get('sms') == 'setting') active @endif"  >
						
						<div class="table-responsive">
{!! Form::open(array('method'=>'post')) !!}
 <div class="form-group">
 	{!! Form::label('sms_name',trans('admin.sms_name')) !!}
 	{!! Form::text('sms_name',Set::set()->sms_name,array('class'=>'form-control','placeholder'=>trans('admin.sms_name'))) !!}
 </div>
 <div class="form-group">
 	{!! Form::label('sms_user',trans('admin.sms_user')) !!}
 	{!! Form::text('sms_user',Set::set()->sms_user,array('class'=>'form-control','placeholder'=>trans('admin.sms_user'))) !!}
 </div>
 <div class="form-group">
 	{!! Form::label('sms_pass',trans('admin.sms_pass')) !!}
 	{!! Form::text('sms_pass',Set::set()->sms_pass,array('class'=>'form-control','placeholder'=>trans('admin.sms_pass'))) !!}
 </div>
 {!! Form::submit(trans('admin.save'),array('class'=>'btn btn-info btn-lg')) !!}
{!! Form::close() !!} 
</div><!--table-responsive-->
<hr />
<ul>
  <li><h2>{!! trans('admin.youhave',['have'=>@explode('/',$SMS->balance())[1],'to'=>@explode('/',$SMS->balance())[0]]) !!}</h2></li>
</ul>

			 

</div>					
									 
				</div>
    		   </div>
					<!-- END SAMPLE FORM PORTLET-->

@stop
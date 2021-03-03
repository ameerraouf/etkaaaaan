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
{!! Form::open(['route'=>'admingroup.store']) !!}

<div class="form-body">

<div class="form-group">
<label>{{ trans('admin.name') }}</label>
<input name="name" type="text" placeholder="{{ trans('admin.name') }}" class="form-control" value="{{ old('name') }}" placeholder="{{ trans('admin.name') }}">
</div>
 
<div class="form-group">
 <div class="checkbox-list">
    <div class="col-md-3">
	<label>
	<input type="checkbox" name="settings" value="1" @if(old('settings') == 1) checked @endif > {{ trans('admin.settings') }} </label>
    </div>
    <div class="col-md-3">
	<label>
	<input type="checkbox" name="country" value="1" @if(old('country') == 1) checked @endif > {{ trans('admin.country') }} </label>
    </div>
 
    <div class="col-md-3">
	<label>	
	<input type="checkbox" name="admingroup" value="1" @if(old('admingroup') == 1) checked @endif > {{ trans('admin.admingroup') }} </label>
    </div>


   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="links" value="1" @if(old('links') == 1) checked @endif > {{ trans('admin.links') }} </label>
   </div>
   <div class="col-md-3 hidden">
	<label>	
	<input type="checkbox" name="comments" value="1" @if(old('comments') == 1) checked @endif > {{ trans('admin.comments') }} </label>
   </div>
   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="contact" value="1" @if(old('contact') == 1) checked @endif > {{ trans('admin.contactus') }} </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="banners" value="1" @if(old('banners') == 1) checked @endif > {{ trans('admin.banners') }} </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="news" value="1" @if(old('news') == 1) checked @endif > {{ trans('admin.news') }} </label>
   </div>
  
  <div class="col-md-3">
	<label>	
	<input type="checkbox" name="departments" value="1" @if(old('departments') == 1) checked @endif > {{ trans('admin.departments') }} </label>
   </div>

   <div class="col-md-3">
	<label>	
	<input type="checkbox" name="formspdf" value="1" @if(old('formspdf') == 1) checked @endif > {{ trans('admin.formspdf') }} </label>
   </div>

 


    

    
	 
 </div>
 <div class="clearfix"></div>
</div> 


 
</div>
<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@stop
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
{!! Form::open(['url'=>app('aurl').'/banners/'.$edit->id,'method'=>'put','files'=>true]) !!}
<div class="form-body">
 
<div class="form-group">
<label>{{ trans('admin.title') }}</label>
<input name="title" type="text" placeholder="{{ trans('admin.title') }}" class="form-control" value="{{ $edit->title }}" placeholder="{{ trans('admin.title') }}">
</div>
<?php 
/*
'right'=>trans('admin.right'),'left'=>trans('admin.left'),
*/
?>
<div class="form-group">
<label>{{ trans('admin.place') }}</label>
{!! Form::select('place',['top'=>trans('admin.top'),'bottom'=>trans('admin.bottom'),'all'=>trans('admin.all')],$edit->place,['class'=>'form-control','placeholder'=>trans('admin.place')]) !!}
</div>
 
<script type="text/javascript">
$(document).on('change','.type',function(){
	var type = $('.type option:selected').val();
 if(type == 'photo')
 {
 	$('.photo').removeClass('hidden');
 	$('.text').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'text')
 {
 	$('.text').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'code')
 {
 	$('.code').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }else{
 	$('.code').addClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }
});
$(document).ready(function(){
var type = '{{ $edit->type }}';
 if(type == 'photo')
 {
 	$('.photo').removeClass('hidden');
 	$('.text').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'text')
 {
 	$('.text').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.code').addClass('hidden');
 }else if(type == 'code')
 {
 	$('.code').removeClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }else{
 	$('.code').addClass('hidden');
 	$('.photo').addClass('hidden');
 	$('.text').addClass('hidden');
 }
});
</script>
<div class="form-group">
<label>{{ trans('admin.type') }}</label>
{!! Form::select('type',['code'=>trans('admin.code'),'text'=>trans('admin.text'),'photo'=>trans('admin.photo')],$edit->type,['class'=>'form-control type','placeholder'=>trans('admin.type')]) !!}
</div>

<div class="form-group photo @if($edit->type != 'photo') hidden @endif">
<label>{{ trans('admin.photo') }}</label>
<input type="file" name="photo" placeholder="{{ trans('admin.photo') }}" >
<hr />
@if($edit->type == 'photo')
 @if(file_exists(base_path('upload/'.$edit->content)))
  <img src="{{ url('upload/'.$edit->content) }}" style="height:150px;" />
 @endif	
@endif
<hr />
<div class="clearfix"></div>
<div class="form-group col-md-3">
 	<label>{{ trans('admin.width') }}</label>
 	<input type="text" name="width" placeholder="{{ trans('admin.width') }}" value="{{ $edit->width }}">
</div>
<div class="form-group col-md-3">
 	<label>{{ trans('admin.height') }}</label>
 	<input type="text" name="height" placeholder="{{ trans('admin.height') }}" value="{{ $edit->height }}">
</div>
<div class="clearfix"></div>
<small style="color:#c33">{{ trans('admin.width_height_message') }}</small>
<div class="clearfix"></div>
</div>

<div class="form-group text hidden">
<label>{{ trans('admin.text') }}</label>
<textarea name="text" placeholder="{{ trans('admin.text') }}" class="form-control">@if($edit->type == 'text') {{ $edit->content }} @endif</textarea>
</div>

<div class="form-group code hidden">
<label>{{ trans('admin.code') }}</label>
<textarea name="code" placeholder="{{ trans('admin.code') }}" class="form-control">@if($edit->type == 'code') {{ $edit->content }} @endif</textarea>
</div>

<div class="clearfix"></div>
<div class="form-group col-md-3">
<label>{{ trans('admin.start_to') }} </label>
 <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
    <input type="text" name="start_to" value="{{ date('d-m-Y',$edit->start_to) }}" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>



<div class="form-group col-md-3">
<label>{{ trans('admin.expire_to') }}</label>
<div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
    <input type="text" name="expire_to" value="{{ date('d-m-Y',$edit->expire_to) }}" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>

<div class="clearfix"></div>


<div class="form-group">
<label>{{ trans('admin.url') }}</label>
<input name="url" type="url" placeholder="{{ trans('admin.url') }}" class="form-control" value="{{ $edit->url }}" placeholder="{{ trans('admin.url') }}">
</div>

<div class="clearfix"></div>

<div class="form-group">
<label>{{ trans('admin.status') }}</label>
{!! Form::select('active',['1'=>trans('admin.active'),'0'=>trans('admin.deactivate')],$edit->active,['class'=>'form-control status']) !!}
</div> 

<div class="form-actions left">
{!! Form::submit(trans('admin.save'),['class'=>'btn green']) !!}
</div>
			{!! Form::close() !!}
</div>
</div>
</div>
	 
	<!-- END SAMPLE FORM PORTLET-->

@stop
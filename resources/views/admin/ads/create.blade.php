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
{!! Form::open(['route'=>'Ads.store','files' => true]) !!}
<div class="form-body">
    
<div class="form-group">
<label>الاول</label>
<input type="file" accept="image/*" name="one" class="form-control">
</div>

<div class="form-group">
<label>الرابط الاول</label>
   
                      
<input type="text" name="link_one"  value="{{ old('link_one') }}" class="form-control">
</div>

<div class="form-group">
<label>الثاني</label>
<input type="file" accept="image/*" name="two" class="form-control">
</div>


<div class="form-group">
<label>
    الرابط الثاني    
</label>
  
<input type="text" name="link_two" value="{{ old('link_two') }}" class="form-control">
</div>

<div class="form-group">
<label>
  الثالث
</label>
<input type="file" accept="image/*" name="three" class="form-control">
</div>

 <div class="form-group">
<label>
الرابط الثالث
</label>
  
<input type="text" name="link_three"  value="{{ old('link_three') }}" class="form-control">
</div>

<div class="form-group">
<label>
  الرابع
</label>

<input type="file" accept="image/*" name="four" class="form-control">
</div>

<div class="form-group">
<label>
الرابط الرابع
</label>
<input type="text" name="link_four" value="{{ old('link_four') }}" class="form-control">
</div>

<div class="form-actions left">
{!! Form::submit(trans('admin.add'),['class'=>'btn green']) !!}
</div>
      {!! Form::close() !!}
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->

@stop
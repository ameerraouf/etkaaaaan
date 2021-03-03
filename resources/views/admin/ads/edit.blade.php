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

{!! Form::open(['url'=>app('aurl').'/Ads/'.$ads->id,'method'=>'put','files' => true]) !!}


<div class="form-body">
    
<div class="form-group">
<label>الاول</label>
    @if($ads->one)
      <img src="{{ asset('assets/adsimgs/'.$ads->one) }}"
      style="width:50px;height:50px;border-radius:50%" />
      @else 
        لايوجد
      @endif
                      
<input type="file" accept="image/*" name="one" class="form-control">
</div>

<div class="form-group">
<label>الرابط الاول</label>
    @if($ads->link_one)
        <a href="{{ $ads->link_one }}" />Link One </a>
      @else 
        لايوجد
      @endif
                      
<input type="text" name="link_one"  value="{{ $ads->link_one }}" class="form-control">
</div>


<div class="form-group">
<label>الثاني</label>
@if($ads->tow)
    <img src="{{ asset('assets/adsimgs/'.$ads->tow) }}"
    style="width:50px;height:50px;border-radius:50%" />
    @else 
    لايوجد
@endif
<input type="file" accept="image/*" name="two" class="form-control">
</div>

<div class="form-group">
<label>
    الرابط الثاني    
</label>
    @if($ads->link_two)
        <a href="{{ $ads->link_two }}" />Link two </a>
      @else 
        لايوجد
      @endif
                      
<input type="text" name="link_two" value="{{ $ads->link_two }}" class="form-control">
</div>

<div class="form-group">
<label>
  الثالث
</label>
 @if($ads->three)
    <img src="{{ asset('assets/adsimgs/'.$ads->three) }}"
    style="width:50px;height:50px;border-radius:50%" />
    @else 
لايوجد
@endif
<input type="file" accept="image/*" name="three" class="form-control">
</div>

<div class="form-group">
<label>
الرابط الثالث
</label>
    @if($ads->link_three)
        <a href="{{ $ads->link_three }}" />Link three </a>
      @else 
        لايوجد
      @endif
                      
<input type="text" name="link_three"  value="{{ $ads->link_three }}" class="form-control">
</div>

 <div class="form-group">
<label>
  الرابع
</label>
 @if($ads->four)
    <img src="{{ asset('assets/adsimgs/'.$ads->four) }}"
    style="width:50px;height:50px;border-radius:50%" />
    @else 
لايوجد
@endif
<input type="file" accept="image/*" name="four" class="form-control">
</div>

<div class="form-group">
<label>
الرابط الرابع
</label>
    @if($ads->link_four)
        <a href="{{ $ads->link_four }}" />Link One </a>
      @else 
        لايوجد
      @endif
                      
<input type="text" name="link_four" value="{{ $ads->link_four }}" class="form-control">
</div>

<div class="form-actions left">
{!! Form::submit(trans('admin.edit'),['class'=>'btn green']) !!}
</div>
      {!! Form::close() !!}
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->

@stop
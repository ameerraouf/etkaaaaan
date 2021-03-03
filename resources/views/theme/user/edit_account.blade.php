@extends(app('tmp').'.index')
@section('theme')

@if(auth()->user()->level == 'admin')
  <div class="alert alert-danger">
    <h1>المشرفين لا يوجد لديهم تحكم او ملفات كمستفيدين برجاء قم بإعداد حسابك من لوحة تحكم الادارة</h1>
  </div>
 @else

        <div class="userpaneledit">
        {!! Form::open() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">إسم المستخدم</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$user->name}}">
          </div><!-- end form-group -->
          <div class="form-group">
            <label for="exampleInputEmail1">البريد الإلكتروني</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$user->email}}">
          </div><!-- end form-group -->
          
          <div class="form-group">
            <label for="exampleInputEmail1">رقم الجوال</label>
            <input type="text" class="form-control" name="mobile" id="exampleInputEmail1" value="{{$user->mobile}}">
          </div><!-- end form-group -->
          <div class="form-group">
            <label for="exampleInputEmail1">الجنس</label>
            <label class="radio-inline">
              <input type="radio" @if($user->gender == 'male') checked @endif name="gender" id="inlineRadio1" value="male"> ذكر
            </label>
            <label class="radio-inline">
              <input type="radio" @if($user->gender == 'female') checked @endif name="gender" id="inlineRadio2" value="female"> أنثي
            </label>
          </div><!-- end form-group -->
          <button type="submit">حفظ</button>
        {!! Form::close() !!}
      </div><!-- end userpaneledit -->

@endif

@stop
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
            <label for="exampleInputEmail1">كلمة المرور الحالية</label>
            <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" >
          </div><!-- end form-group -->
          <div class="form-group">
            <label for="exampleInputEmail1">كلمة المرور الجديدة</label>
            <input type="password" class="form-control" name="password" id="exampleInputEmail1" >
          </div><!-- end form-group -->
          
          <div class="form-group">
            <label for="exampleInputEmail1">اعد كتابة كلمة المرور الجديدة</label>
            <input type="password" class="form-control" name="new_password" id="exampleInputEmail1" >
          </div><!-- end form-group -->
      
          <button type="submit">تغيير</button>
        {!! Form::close() !!}
      </div><!-- end userpaneledit -->

@endif

@stop
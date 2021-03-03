@extends(app('tmp').'.index')
@section('theme')

    <div class="registerpage">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="registerlinks">
              <a href="{{url('register')}}" title="#">{{trans('main.register')}}</a>
              <a href="{{url('login')}}" title="#">تسجيل الدخول</a>
              <a href="{{url('page/1')}}" title="#">تعليمات التسجيل</a>
              <a href="{{url('contactus')}}" title="#">تواصل معنا</a>
            </div><!-- end registerlinks -->
          </div><!-- end col-lg-4 -->
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="registerform">
               {!! Form::open() !!}
                <div class="form-group">
                  <label for="exampleInputEmail1">إسم المستخدم</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">البريد الإلكتروني</label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">كلمة المرور</label>
                  <input type="password" name="password"  class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">إعادة كلمة المرور</label>
                  <input type="password" name="password_confirmation"   class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">رقم الجوال</label>
                  <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">النوع</label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio1" @if(old('gender') == 'male') checked @endif value="male"> ذكر
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio2" @if(old('gender') == 'female') checked @endif value="female"> أنثي
                  </label>
                </div><!-- end form-group -->
                <button type="submit">سـجـل الأن</button>
              {!! Form::close() !!}
            </div><!-- end registerform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end registerpage -->



@stop
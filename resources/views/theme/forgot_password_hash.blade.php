@extends(app('tmp').'.index')
@section('theme')

   
     <div class="loginpage">
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
            <div class="loginform">
          <center>مرحبا بك يا {{$user->name}}</center>
              {!! Form::open() !!}
                <div class="form-group">
                  <label for="exampleInputEmail1">اكتب كلمة مرور جديدة</label>
                  <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">اعد كتابة كلمة مرور جديدة</label>
                  <input type="password" name="re_password" class="form-control" id="exampleInputEmail1">
                </div><!-- end form-group -->
               
                <button type="submit">دخــول</button>
              {!! Form::close() !!}
            </div><!-- end loginform -->
          </div><!-- end col-lg-8 -->
        </div><!-- end row -->
      </div><!-- end loginpage -->


@stop
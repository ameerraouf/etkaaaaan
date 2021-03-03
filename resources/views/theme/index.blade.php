@include(app('tmp').'.header')
@include(app('tmp').'.error')
@if(auth()->user())
@if(auth()->user()->active == 0)

 @if(Set::set()->active_users == 'email')
 <div class="alert alert-danger">
 	<h1>حسابك لم يتم تفعيله حتي الان </h1>
 	<h3>اضغط على الزر ادناه وقم تفعيل الحساب عبر البريد الالكتروني الخاص بك </h3>
 <a href="{{url('resend/active/account')}}" class="btn btn-danger">اضغط هنا للتفعيل عبر البريد الالكتروني  </a>
 </div>
 @elseif(Set::set()->active_users == 'sms')
 
  <div class="alert alert-warning">
     <h1><i class="fa fa-envelope"></i> قم بتفعيل حسابك عبر رسالة SMS بكود التفعيل الخاص بحسابك</h1>
  	 <h1> <i class="fa fa-phone"></i> لم تستلم كود التفعيل ؟!! </h1>
  	 <a href="{{url('active/sms/code')}}" class="btn btn-danger">اضغط هنا وسنقوم بإرسال كود التفعيل على جوالك</a>
  </div>
  <hr />

  <div class="alert alert-info">
  	 <h1> <i class="fa fa-phone"></i> ادخل كود التفعيل هنا واضغط على تفعيل ليصبح حسابك جاهز </h1>
  	 {!! Form::open(['url'=>'active/sms/code']) !!}
  	  <div class="col-md-6">
  	  	 <input type="text" name="code" placeholder="كود التفعيل" class="form-control"> 
  	  </div>
  	  <div class="col-md-6">
  	  	<input type="submit" name="active" value="تفعيل" class="btn btn-info" >
  	  </div>
  	 {!! Form::close() !!}
  	 <div class="clearfix"></div>
  </div>



 @endif
 <br />
@elseif(auth()->user()->blocking_user == 1)
 <div class="alert alert-danger">
 	<h1>{{trans('main.user_blocking')}}</h1>
 </div>
@else

@yield('theme')

@endif

@else

@yield('theme')

@endif

@include(app('tmp').'.footer')
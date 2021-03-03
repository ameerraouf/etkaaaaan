<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Send;
use App\Http\Controllers\SMS;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Set;
use Hash;
use Auth;
class Users extends Controller
{
    //

 public function register()
 {
 	return view(app('tmp').'.register',['title'=>trans('main.register')]);
 }
 public function register_post(Request $r)
 { 


 	$rules = [
 			'email'=>'required|email|unique:users',
 			'name'=>'required',
 			'mobile'=>'required|unique:users',
 			'password' => 'required|min:6|confirmed',
 			'password_confirmation'=>'required',
 			'gender'=>'required',
 			//'country'=>'required',
 			 ];
	$Validator = Validator::make($r->all(),$rules);
	$Validator->SetAttributeNames([
			'name'=>trans('admin.name'),
			'mobile'=>trans('admin.mobile'),
			'country'=>trans('admin.country'),
			'email'=>trans('admin.email'),
			'gender'=>trans('admin.gender'),
			'password'=>trans('admin.password'),
			'password_confirmation'=>trans('main.password_confirmation'),
			]);
	if($Validator->fails())
	{
		return back()->withInput()->withErrors($Validator);
	}else{
		//active_users
		$user = new User;
		$user->name         = $r->input('name');
		$user->email        = $r->input('email');
		if(preg_match('/^0/i',$r->input('mobile')))
		{	
		 $user->mobile       = substr($r->input('mobile'), 1);
		}else{
		 $user->mobile       = $r->input('mobile');
		}
		//$user->country      = $r->input('country');
		$user->level     = 'user';
		$user->password  = bcrypt($r->input('password'));
		$user->api_token = str_random(60);
		$user->active    	    = 0;
		$user->blocking_user    = 0;
		$user->active_account = str_random(100);
		$user->save();
		if(Set::set()->active_users == 'auto')
		{	
		 $user->active    = 1;
		 $user->save();
 		 Auth::login($user);
		}elseif(Set::set()->active_users == 'email')
		{
 			Auth::login($user);
			$data = ['name'=>$user->name,'url'=>$user->active_account,'email'=>$user->email,'sitename'=>Set::set()->sitename];
			Send::Mail('active_account',$data,$user->email,$user->name,trans('admin.active_account'));
			session()->flash('success',trans('admin.message_active_bymail'));
		  return redirect('/');
		}elseif(Set::set()->active_users == 'sms')
		{
 			//966506499275
 			$rand = rand(000000,999999);
 			$user->active_account = $rand;
 			$user->save();
 			Auth::login($user);
 			$key = 966;
 			$sms = new SMS;
 			$sms->sendSMS($key.$user->mobile,trans('admin.msg_act_mobile',['code'=>$rand]));
 			session()->flash('success',trans('admin.message_active_bymob'));
		    return redirect('/');
		}

		session()->flash('success',trans('main.your_account_register'));
		return redirect('/');

	} 			 
}	


  public function resend_active_account()
  {
  	 $user = auth()->user();
  	 $user->active_account = str_random(100);
  	 $user->save();
     	$data = ['name'=>$user->name,'url'=>$user->active_account,'email'=>$user->email,'sitename'=>Set::set()->sitename];
			Send::Mail('active_account',$data,$user->email,$user->name,trans('admin.active_account'));
			session()->flash('success',trans('main.message_active_bymail2'));
		  return redirect('/');
  }


 public function active_sms_post(Request $r)
 {
 	$user = User::where('active_account',$r->input('code'))->first();
 	if(empty($user))
 	{
 		session()->flash('error',trans('main.code_incorrect'));
 	}else{
 		session()->flash('success',trans('main.account_is_active_sms'));
 		$user->active_account = NULL;
 		$user->active   	  = 1;
 		$user->save();
 	}

 	if(auth()->user())
 	{
 		return redirect('/');
 	}else{	
     	return redirect('register');
 	}
 }

 public function active_sms()
 {
 	$user = auth()->user();
 	$rand = rand(000000,999999);
 	$user->active_account = $rand;
 	$user->save();

 	$sms = new SMS;
    $sms->sendSMS($user->mobile,trans('admin.msg_act_mobile',['code'=>$rand]));
 	session()->flash('success',trans('main.code_sent_to_mobile'));
	return redirect('/');
 }

 public function active($active)
 {
 	if(!empty($active))
 	{
	 	$user = User::where('active_account',$active)->first();
	 	if(!empty($user))
	 	{
	 		$user->active = 1;
	 		$user->active_account = '';
	 		$user->save();
	 		session()->flash('success',trans('main.account_activated'));
	 		if(auth()->user())
	 		{
	 		 return redirect('/');
	 		}

	 		return redirect('register');
	 	}else{
	 		return redirect('404');
	 	}
 	}
 }

 public function active_mobile(Request $r)
 {
	 if($r->has('code'))	
	 {
	 	$user = User::where('active_account',$r->input('code'))->first();
	 	if(!empty($user))
	 	{
	 		$user->active = 1;
	 		$user->active_account = '';
	 		$user->save();
	 		session()->flash('success',trans('main.account_activated'));
	 		return redirect('register');
	 	}else{
	 		return redirect('/');
	 	}
	 }else{
	 		return redirect('/');
	 }
 }
 public function login()
 {
 	return view(app('tmp').'.login',['title'=>trans('main.login')]);
 }

 public function login_post(Request $r)
 {
  
 	if(auth()->attempt(['email'=>$r->input('email'),'password'=>$r->input('password')],true))
 	{
 	 session()->flash('success',trans('main.done_loggedin'));
 	 return redirect('/');
 	}else{
 	 session()->flash('error',trans('main.error_loggedin'));
 	 return redirect('login');
 	}
 }

 public function myaccount()
 {
 	return view(app('tmp').'.user.myaccount',['title'=>auth()->user()->name,'user'=>auth()->user()]);
 }

 public function edit_account()
 {
 	return view(app('tmp').'.user.edit_account',['title'=>auth()->user()->name,'user'=>auth()->user()]);
 }

 public function edit_account_post(Request $r)
 {
 	$rules = ['name'=>'required','email'=>'required|email|unique:users,email,'.auth()->user()->id,'mobile'=>'required|numeric|min:12|unique:users,mobile,'.auth()->user()->id];
 	$Validator = Validator::make($r->all(),$rules);
 	$Validator->SetAttributeNames(['name'=>trans('main.name'),'email'=>trans('main.email'),'mobile'=>trans('main.mobile')]);
 	if($Validator->fails())
 	{
 		return back()->withInput()->withErrors($Validator);
 	}else{
 		$user = auth()->user();
 		$user->name = $r->input('name');
 		$user->email = $r->input('email');
 		$user->mobile = $r->input('mobile');
 		$user->gender = $r->input('gender');
 		$user->save();
 		session()->flash('success',trans('main.updated_account'));
 		return redirect('myaccount/edit');
 	}
 }

 public function change_password()
 {
 	return view(app('tmp').'.user.change_password',['title'=>auth()->user()->name,'user'=>auth()->user()]);
 }

 public function change_password_post(Request $r)
 {
 	$rules = ['old_password'=>'required','password'=>'required','new_password'=>'required|same:password'];
 	$Validator = Validator::make($r->all(),$rules);
 	$Validator->SetAttributeNames(['old_password'=>'كلمة المرور الحالية','password'=>'كلمة المرور الجديدة','new_password'=>'اعد كتابة كلمة المرور الجديد']);
 	if($Validator->fails())
 	{
 		return back()->withInput()->withErrors($Validator);
 	}else{
 		if($r->input('old_password') == $r->input('password') and $r->input('old_password') == $r->input('new_password'))
 		{
 			session()->flash('error',trans('main.error_changepassword1'));
 			return back();
 		}elseif(Hash::check($r->input('old_password'),auth()->user()->password)){
 			$user = auth()->user();
 			$user->password = bcrypt($r->input('password'));
 			$user->save();
 			session()->flash('success',trans('main.password_changed'));
 			return redirect('myaccount/change/password');
 		}else{
 			session()->flash('error',trans('main.old_password_incorrect'));
 			return back();
 		}
 	}
 }


 public function logout()
 {
 	Auth::logout();
 	session()->flash('success',trans('main.logoutmsg'));
 	return redirect('/');
 }

 public function forgot_password()
 {
 	return view(app('tmp').'.forgot_password',['title'=>trans('main.forgot_password')]);
 }
 

  public function forgot_password_post(Request $r)
  {
 	 $rules = ['email'=>'required|email'];
 	 $Validator = Validator::make($r->all(),$rules);
 	 $Validator->SetAttributeNames(['email'=>trans('admin.email')]);
 	 if($Validator->fails())
 	 {
 	 	return back()->withInput()->withErrors($Validator);
 	 }else{
 	 	$user = User::where('email','=',$r->input('email'))->first();
 	 	if(!empty($user))
 	 	{	
 	 	 $user->remember_token = str_random(60);
 	 	 $user->save(); 

 	 	    $data = ['name'=>$user->name,'url'=>$user->remember_token,'email'=>$user->email,'sitename'=>Set::set()->sitename];
			Send::Mail('forgot_password',$data,$user->email,$user->name,trans('main.forgot_password'));
 	 	 session()->flash('success',trans('main.reset_password_sent'));
 	 		return redirect('forgot/password');
 	 	}else{
 	 		session()->flash('error',trans('main.not_found_email'));
 	 		return redirect('forgot/password');
 	 	}
 	 }
  }

  public function forgot_password_hash($hash)
  {
  	$user = User::where('remember_token',$hash)->first();
  	if(!empty($user))
  	{
  		return view(app('tmp').'.forgot_password_hash',['title'=>trans('main.forgot_password'),'user'=>$user]);
  	}else{
  		session()->flash('error',trans('main.url_not_correct'));
 	 	return redirect('forgot/password');
  	}
  }

  public function forgot_password_hash_post(Request $r,$hash)
  {
  	$user = User::where('remember_token',$hash)->first();
  	if(!empty($user))
  	{
  		$rules = ['password'=>'required','re_password'=>'required|same:password'];
  		$Validator = Validator::make($r->all(),$rules);
  		$Validator->SetAttributeNames(['re_password'=>trans('main.re_password'),'password'=>trans('main.password')]);
  		if($Validator->fails())
  		{
  			return back()->withInput()->withErrors($Validator);
  		}else{
  			$user->password = bcrypt($r->input('password'));
  			$user->remember_token = '';
  			$user->save();
  			session()->flash('success',trans('main.password_is_reset'));
  			return redirect('login');
  		}
  	}else{
  		session()->flash('error',trans('main.url_not_correct'));
 	 	return redirect('forgot/password');
  	}
  }


 





}
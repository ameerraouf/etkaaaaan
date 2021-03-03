<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Setting;
use App\Banner;
use Upload;
class Home extends Controller
{
    public function home()
    {
      
       return view(app('at').'.home',[
                            'title'=>trans('admin.home')
                         
                            ]);
    }

    public function login_admin(){
    	return view(app('at').'.login',['title'=>trans('admin.login')]);
    }

    public static function set()
    {
    	return Setting::find(1);
    }

    public static function youtubelink($url)
    {
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
        return  $video_id = $match[1];
        }
    }

    public static function banner($place,$loop='loop',$col)
    {
       // return $place;
      $banners = Banner::where('place',$place)->where('start_to','<',time())->where('expire_to','>',time())->where('active',1)->get();
      return view(app('tmp').'.banner',['banners'=>$banners,'loop'=>$loop,'col'=>$col])->render();
    }

    public function login_admin_post(Request $r){
    	$rules = ['email'=>'required|email','password'=>'required'];
    	$Validator = Validator::make($r->all(),$rules);
    	$Validator->SetAttributeNames([
    			'email'=>trans('admin.email'),
    			'password'=>trans('admin.password')
    			]);
    	if($Validator->fails())
    	{
    		return back()->withInput()->withErrors($Validator);
    	}else{
    		if(auth()->attempt(['email'=>$r->input('email'),'password'=>$r->input('password')],$r->input('rememberme')))
    		{
    			if(auth()->user()->level == 'admin' and auth()->user()->active == 1)
    			{
    			    session()->flash('success',trans('admin.loggedin'));
    				return redirect(app('aurl'));
    			}else{
    				return redirect(app('aurl').'404');
    			}
    		}else{
    			session()->flash('error',trans('admin.errorloggedin'));
    			return redirect(app('aurl').'/login');
    		}
    	}
    }

    public function logout_admin()
    {
    	auth()->logout();
    	return redirect(app('aurl').'/login');
    }

    public function settings()
    {
    	return view(app('at').'.settings.settings',['title'=>trans('admin.settings')]);
    }

    public function settings_post(Request $r)
    {
    	$set = self::set();
    	$set->sitename         = $r->input('sitename');
    	$set->sitemail         = $r->input('sitemail');
    	$set->siteurl          = $r->input('siteurl');
    	$set->active_users     = $r->input('active_users');
    	$set->active_comment   = $r->input('active_comment');
    	$set->status_site      = $r->input('status_site');
    	$set->status_message   = $r->input('status_message');
    	$set->keywords         = $r->input('keywords');
    	$set->discription      = $r->input('discription');
    	$set->paypal_secret_id = $r->input('paypal_secret_id');
    	$set->paypal_client_id = $r->input('paypal_client_id');
        $set->payment          = $r->input('payment');
        $set->fax     = $r->input('fax');
        $set->mobile     = $r->input('mobile');
        $set->mobile2     = $r->input('mobile2');
        $set->facebook     = $r->input('facebook');
        $set->twitter     = $r->input('twitter');
        $set->youtube     = $r->input('youtube');
        $set->skype     = $r->input('skype');
        $set->pinterest     = $r->input('pinterest');
        $set->linkedin     = $r->input('linkedin');
        $set->active_offer     = $r->input('active_offer');
        $set->enable_watermark     = $r->input('enable_watermark');
        $set->address_lat_lng      = $r->input('address_lat_lng');
        if($r->hasFile('watermark'))
        {
                    $folder = explode('/',$set->watermark);
 
                    @unlink(base_path('upload/watermark/'.$set->watermark));   
                    @unlink(base_path('upload/watermark/'.$folder[1].'/index.php'));
                    @unlink(base_path('upload/watermark/'.$folder[1].'/index.html'));
                    array_map('unlink',glob(base_path('upload/watermark/'.$folder[1].'/*'))); 
                    if(is_dir(base_path('upload/watermark/'.$folder[1])))
                    {   
                     @rmdir(base_path('upload/'.$folder[1]));
                    }
    	 $set->watermark     = Upload::Upload($r->file('watermark'),'watermark/'.time(),'icon',0);
        }
    	$set->save();
    	session()->flash('success',trans('admin.updated'));
    	return redirect(app('aurl').'/settings');
    }

    public function settings_sms()
    {
        return view(app('at').'.settings.sms',['title'=>trans('admin.sms')]);
    }

    public function sms_put(Request $r)
    {
        $set = self::set();
        $set->sms_user          = $r->input('sms_user');
        $set->sms_pass          = $r->input('sms_pass');
        $set->sms_name          = $r->input('sms_name');
        $set->save();
        session()->flash('success',trans('admin.updated'));
        return redirect(app('aurl').'/sms');
    }
}

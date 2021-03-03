<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Slide;
use App\News;
use App\Department;
use App\Contact;
use App\Policie;
use App\Page;
use Validator;
use App\YearReports;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $video_dep = Department::where('parent',8)->get(['id']);
      $pice_dep = Department::where('parent',9)->get(['id']);
      $news = News::orderBy('id','desc')
      ->whereNotIn('department',$video_dep)
      ->whereNotIn('department',$pice_dep)
      ->where('department','!=',9)
      ->where('department','!=',8)
      ->take(4)
      ->get();
      
    $newss = News::orderBy('id','desc')
      ->whereNotIn('department',$video_dep)
      ->whereNotIn('department',$pice_dep)
      ->where('department','!=',9)
      ->where('department','!=',8)
      ->where('department','!=',12)
      ->take(4)
      ->get();

        return view(app('tmp').'.home',['slides'=>Slide::all(),'allnews'=>$news ,'newss' => $newss]);
    }

    public function all_news()
    {
      $video_dep = Department::where('parent',8)->get(['id']);
      $pice_dep = Department::where('parent',9)->get(['id']);
      $news = News::orderBy('id','desc')
      ->whereNotIn('department',$video_dep)
      ->whereNotIn('department',$pice_dep)
      ->where('department','!=',9)
      ->where('department','!=',8)
      ->paginate(10);
        return view(app('tmp').'.allnews',['slides'=>Slide::all(),'allnews'=>$news]);
    }

    public function all_category()
    {
      $video_dep = Department::where('parent',8)->get(['id']);
      $pice_dep = Department::where('parent',9)->get(['id']);
      $pics = Department::where('parent',9)->get();
      $videos = Department::where('parent',8)->get();

      //$departments = Department::where('parent',0)->get();
      $departments = Department::whereNotIn('id',$video_dep)->whereNotIn('id',$pice_dep)->whereNotIn('id',[9,8])->get();
      return view(app('tmp').'.all_category',['title'=>trans('main.all_category'),
          'departments'=>$departments,
          'videos'=>$videos,
          'pics'=>$pics,
          ]);
    }

    public function category($id)
    {
      $depp = Department::find($id);
      $dep  = Department::where('parent',$id)->get();
      $depnews = News::where('department',$id)->orderBy('id','desc')->paginate(10);
      if($depp->parent > 0)
      {
        $id = $depp->parent;
      }else{
        $id = $id;
      }
      $parent = Department::find($depp->parent);
      return view(app('tmp').'.category',['allnews'=>$depnews,'title'=>$depp->title,'id'=>$id,'departments'=>$dep,'parent'=>$parent]);
    }

    public function news($id)
    {
      $news = News::find($id);
      $department = Department::find($news->department);
      return view(app('tmp').'.news',['title'=>$news->title,'news'=>$news,'department'=>$department]);
    }


    public function contactus()
    {
      return view(app('tmp').'.contactus',['title'=>trans('main.contactus')]);
    }

    public function page($id)
    {
      $page = Page::find($id);
      return view(app('tmp').'.page',['title'=>$page->name,'page'=>$page]);
    }


    public function contactus_post(Request $r)
    {
      $rules = ['name'=>'required','email'=>'required|email','mobile'=>'required|numeric','title'=>'required','content'=>'required'];
      $validator = Validator::make($r->all(),$rules);
      $validator->SetAttributeNames([
                                    'name'=>trans('main.name'),
                                    'email'=>trans('main.email'),
                                    'title'=>trans('main.title'),
                                    'mobile'=>trans('main.mobile'),
                                    'content'=>trans('main.content'),
                                    ]);
      if($validator->fails())
      {
        return back()->withInput()->withErrors($validator);
      }else{
        $contact = new Contact;
        $contact->name = $r->input('name');
        $contact->email = $r->input('email');
        $contact->mobile = $r->input('mobile');
        $contact->title = $r->input('title');
        $contact->content = $r->input('content');
        $contact->move_to = 'inbox';
        if(auth()->user())
        {
          $contact->user_id = auth()->user()->id;
        }else{
          $contact->user_id = 0;
        }
          $contact->reading = 0;
          $contact->save();
          session()->flash('success',trans('main.success_sent_mesag'));
          return redirect('contactus');
      }
    }  


    






    public function getlatlng(Request $r,$uid)
    {
          $user = User::find(auth()->user()->id);

     if($r->has('address'))
     {
      $address = urlencode(str_replace(' ','+',$r->input('address')));
     }else{
      $address = urlencode(str_replace(' ', '+', $r->input('country')));
     }
    if($r->has('country'))
    {

      $country = urlencode(str_replace(' ','+',$r->input('country')));
                //$address = $country;
                $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=".$country;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $response = curl_exec($ch);
                curl_close($ch);
                $response_a = json_decode($response);
                $lat  = @$response_a->results[0]->geometry->location->lat;
                $long = @$response_a->results[0]->geometry->location->lng;
                $zoom = 5;
                $result_info[0] = $lat.','.$long.','.$zoom;
    }else{   
        if(!empty($user->lat_lng_zoom))
        {
                $result_info[0]  = str_replace('|',',', $user->lat_lng_zoom);
              return response()->json(explode(',',$result_info[0]));
        }else{
                $country = @Country::find($user->country)->name;
                $address = @$country;
                if(!empty($address))
                {
                $url ="http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=".$country;
                }else{
                $url ="http://maps.google.com/maps/api/geocode/json?address=ksa&sensor=false&region=Saudia+Arabia";
                }
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $response   = curl_exec($ch);
                curl_close($ch);
                $response_a = json_decode(@$response);
                if($response_a->status == 'OK')
                {
                $lat  = $response_a->results[0]->geometry->location->lat;
                $long = $response_a->results[0]->geometry->location->lng;
                $zoom = 5;
                $result_info[0] = $lat.','.$long.','.$zoom;
                }
        } 
     }
         return response()->json(@explode(',',$result_info[0]));

    }


    public function search(Request $r)
    {
        $searches = News::where('title','LIKE','%'.$r->input('search').'%')
                ->orWhere('content','LIKE','%'.$r->input('search').'%')
                ->paginate(10);
                return view(app('tmp').'.search',['title'=>$r->input('search'),'searches'=>$searches]); 
      
    }
    public function Policie(){
        $rows = Policie::all();
        return view('theme.policie',compact('rows'));
    }
    public function YearReaports(){
        $rows = YearReports::all();
        return view('theme.yearreaports',compact('rows'));
    }
}

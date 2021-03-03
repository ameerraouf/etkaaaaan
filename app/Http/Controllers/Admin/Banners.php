<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Set;
use App\Banner;
use Validator;
use Upload;
use Illuminate\Http\Request;

class Banners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','desc')->paginate(10);
        return view(app('at').'.banners.index',['title'=>trans('admin.banners'),'banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.banners.create',['title'=>trans('admin.title')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = [
                'title'=>'required',
                'place'=>'required',
                'type'=>'required',
                'photo'=>'image|mimes:jpeg,jpg,png|max:10000',
                'start_to'=>'required',
                'expire_to'=>'required',
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                                'title'=>trans('admin.title'),
                                'place'=>trans('admin.place'),
                                'type'=>trans('admin.type'),
                                'expire_to'=>trans('admin.expire_to'),
                                'start_to'=>trans('admin.start_to'),
                                'photo'=>trans('admin.photo'),
                                ]);       
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $banner = new Banner;
            $banner->title     = $r->input('title');
            $banner->user_id    = auth()->user()->id;
            $banner->place     = $r->input('place');
            $banner->active    = $r->input('active');
            $banner->type      = $r->input('type');
            $banner->url       = $r->input('url');
            $banner->start_to  = strtotime($r->input('start_to'));
            $banner->expire_to = strtotime($r->input('expire_to'));
            if($r->input('type') == 'text')
            {   
                $banner->content = $r->input('text');
            }elseif($r->input('type') == 'code')
            {
                $banner->content = $r->input('code');
            }elseif($r->input('type') == 'photo')
            {
                if($r->hasFile('photo'))
                {   
                 $banner->content   =  Upload::Upload($r->file('photo'),'banners/'.time().'/','icon',0);
                }
                $banner->width     = $r->input('width');
                $banner->height    = $r->input('height');
            }
            $banner->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/banners');
        }                               
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(app('at').'.banners.edit',['title'=>trans('admin.edit'),'edit'=>Banner::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
           $rules = [
                'title'=>'required',
                'place'=>'required',
                'type'=>'required',
                'photo'=>'image|mimes:jpeg,jpg,png|max:10000',
                'start_to'=>'required',
                'expire_to'=>'required',
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                                'title'=>trans('admin.title'),
                                'place'=>trans('admin.place'),
                                'type'=>trans('admin.type'),
                                'expire_to'=>trans('admin.expire_to'),
                                'start_to'=>trans('admin.start_to'),
                                'photo'=>trans('admin.photo'),
                                ]);       
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $banner = Banner::find($id);
            $banner->title     = $r->input('title');
            $banner->user_id    = auth()->user()->id;
            $banner->place     = $r->input('place');
            $banner->active    = $r->input('active');
            $banner->url       = $r->input('url');
            $banner->start_to  = strtotime($r->input('start_to'));
            $banner->expire_to = strtotime($r->input('expire_to'));
            if($r->input('type') == 'text')
            {   
                if($banner->type == 'photo')
                {
                     if(file_exists(base_path('upload/'.$banner->content)))
                     {  
                      $expath = explode('/',$banner->content);   
                      @unlink(base_path('upload/'.$banner->content));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.php'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @rmdir(base_path('upload/'.$expath[0].'/'.$expath[1]));   
                     }    
                }
                $banner->content = $r->input('text');

            }elseif($r->input('type') == 'code')
            {
                if($banner->type == 'photo')
                {
                     if(file_exists(base_path('upload/'.$banner->content)))
                     {  
                      $expath = explode('/',$banner->content);   
                      @unlink(base_path('upload/'.$banner->content));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.php'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @rmdir(base_path('upload/'.$expath[0].'/'.$expath[1]));   
                     }    
                }
                $banner->content = $r->input('code');
            }elseif($r->input('type') == 'photo')
            {
                if($r->hasFile('photo'))
                {   
                 if(file_exists(base_path('upload/'.$banner->content)))
                 {  
                  $expath = explode('/',$banner->content);   
                  @unlink(base_path('upload/'.$banner->content));   
                  @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.php'));   
                  @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                  @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                  @rmdir(base_path('upload/'.$expath[0].'/'.$expath[1]));   
                 }    
                 $banner->content   =  Upload::Upload($r->file('photo'),'banners/'.time().'/','icon',0);
                }
                $banner->width     = $r->input('width');
                $banner->height    = $r->input('height');
            }
            $banner->type      = $r->input('type');
            $banner->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/banners');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
                if($banner->type == 'photo')
                {
                     if(file_exists(base_path('upload/'.$banner->content)))
                     {  
                      $expath = explode('/',$banner->content);   
                      @unlink(base_path('upload/'.$banner->content));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.php'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @unlink(base_path('upload/'.$expath[0].'/'.$expath[1].'/index.html'));   
                      @rmdir(base_path('upload/'.$expath[0].'/'.$expath[1]));   
                     }    
                }
        $banner->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/banners');    
    }
}

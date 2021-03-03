<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\Files;
use Set;
use Validator;
use Upload;

class ConNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allnews = News::orderBy('id','desc')->paginate(10);
        return view(app('at').'.news.index',['title'=>trans('admin.news'),'allnews'=>$allnews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.news.create',['title'=>trans('admin.add')]);
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
                'content'=>'nullable',
                'department'=>'required',
                //'youtube.1'=>'url',
                //'youtube.2'=>'url',
                'photo'=>'image|mimes:jpeg,jpg,png,gif|max:10000',
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                'title'=>trans('admin.title'),
                'content'=>trans('admin.content'),
                'photo'=>trans('admin.photo'),
                'department'=>trans('admin.department'),
                'youtube.1'=>trans('admin.youtube'),
                'youtube.2'=>trans('admin.youtube'),
                ]);
      
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new News;
            $add->title    = $r->input('title');
            $add->content  = $r->input('content');
            $add->department  = $r->input('department');
            $add->youtube  = implode('||',$r->input('youtube'));
            $add->user_id  = auth()->user()->id;
            if($r->hasFile('photo'))
            {
             $add->photo   =  Upload::Upload($r->file('photo'),'news/'.time(),'icon',0);
            }
            $add->save();

            if($r->has('id_other_files'))
            {
                $files = Files::whereIn('id',explode(',',$r->input('id_other_files')))->get();
                foreach($files as $file){
                    $file->news_id = $add->id;
                    $file->save();
                }
            }


            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/news');
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
        return view(app('at').'.news.edit',['title'=>trans('admin.edit'),'edit'=>News::find($id)]);
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
                'content'=>'nullable',
                'department'=>'required',
                ///'youtube.1'=>'url',
                //'youtube.2'=>'url',
                'photo'=>'image|mimes:jpeg,jpg,png,gif|max:10000',
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                'title'=>trans('admin.title'),
                'content'=>trans('admin.content'),
                'photo'=>trans('admin.photo'),
                'department'=>trans('admin.department'),
                'youtube.1'=>trans('admin.youtube'),
                'youtube.2'=>trans('admin.youtube'),
                ]);
      
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = News::find($id);
            $add->title    = $r->input('title');
            $add->content  = $r->input('content');
            $add->department  = $r->input('department');
            $add->youtube  = implode('||',$r->input('youtube'));
            $add->user_id  = auth()->user()->id;
            if($r->hasFile('photo'))
            {
             $add->photo   =  Upload::Upload($r->file('photo'),'news/'.time(),'icon',0,'no_water');
            }
            $add->save();

            if($r->has('id_other_files'))
            {
                $files = Files::whereIn('id',explode(',',$r->input('id_other_files')))->get();
                foreach($files as $file){
                    $file->news_id = $add->id;
                    $file->save();
                }
            }

            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/news');
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
        $news = News::find($id);
        //$news->files();
        foreach($news->files()->get() as $file)
        {
            $id = $file->id;
            $file = Files::find($id);
            if(!empty($file))
            {
                if($file->ext == 'mp3')
                {
                    @unlink(base_path('upload/'.$file->path.'/'.$file->file));
                }else{
                      $size = Upload::Size_image();
                        foreach($size as $key => $val)
                        {
                           @unlink(base_path('upload/'.$file->path.'/'.$key.'_'.$file->file));  
                        }
                           @unlink(base_path('upload/'.$file->path.'/'.$file->file));  
                }
                    @unlink(base_path('upload/'.$file->path.'/index.html'));
                    @unlink(base_path('upload/'.$file->path.'/index.php'));
                    @rmdir(base_path('upload/'.$file->path));
                    $file->delete();
            }
        }
        if(!empty($news->photo))
        {
            $folder = explode('/',$news->photo);
            @unlink(base_path('upload/'.$news->photo));
            @unlink(base_path('upload/news/'.$folder[1].'/index.php'));
            @unlink(base_path('upload/news/'.$folder[1].'/index.html'));
            @rmdir(base_path('upload/news/'.$folder[1]));
        }
        $news->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/news');
    }


     public function upload_file_ajax(Request $r)
    {
        //news_id,mpga
        $rules = ['other_file'=>'image|mimes:jpeg,jpg,png,gif|required',];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['other_file'=>trans('admin.other_file')]);
        if($Validator->fails())
        {
            return response()->json(['status'=>'error','message'=>trans('admin.just_image_or_mp3')]);
        }else{
            $file = $r->file('other_file');
            $ext  = $file->getClientOriginalExtension();
            /*if($ext == 'mp3')
            {
                $upload = Upload::Upload($file,'news/attachfile/'.time(),'mp3file',0,'yes');
                $files  = Files::find($upload);

                $file_html =  view(app('at').'.news.audiofile',['file'=>$files])->render();
                return response(['status'=>'success','id'=>$files->id,'file_html'=>$file_html]);
            }else{
            }*/
                $upload = Upload::Upload($file,'news/attachfile/'.time(),'photo',0,'yes');
                $files  = Files::find($upload);
                $file_html =  view(app('at').'.news.photofile',['file'=>$files])->render();
                return response(['status'=>'success','id'=>$files->id,'file_html'=>$file_html]);
        }   
        


    }


    public function delete_file_ajax(Request $r)
    {
        if($r->has('id'))
        {
            $id = $r->input('id');
            $file = Files::find($id);
            if(!empty($file))
            {
                if($file->ext == 'mp3')
                {
                    @unlink(base_path('upload/'.$file->path.'/'.$file->file));
                }else{
                      $size = Upload::Size_image();
                        foreach($size as $key => $val)
                        {
                           @unlink(base_path('upload/'.$file->path.'/'.$key.'_'.$file->file));  
                        }
                           @unlink(base_path('upload/'.$file->path.'/'.$file->file));  
                }
                    @unlink(base_path('upload/'.$file->path.'/index.html'));
                    @unlink(base_path('upload/'.$file->path.'/index.php'));
                    @rmdir(base_path('upload/'.$file->path));
                    $file->delete();
            }
        }
    }

}

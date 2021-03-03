<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Slide;
use Set;
use App\User;
use Upload;
class Slides extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(app('at').'.slides.index',['title'=>trans('admin.slideshow'),'slides'=>Slide::orderBy('id','desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.slides.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = ['title'=>'required','url'=>'url','photo'=>'required|image|mimes:jpg,png,gif,bmp'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title'),'url'=>trans('admin.url'),'photo'=>trans('admin.photo')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $slide = new Slide;
            $slide->title = $r->input('title');
            $slide->url   = $r->input('url');
            $slide->photo = Upload::upload($r->file('photo'),'slide/','icon',0,'no');
            $slide->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/slides');
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
        return view(app('at').'.slides.edit',['title'=>trans('admin.edit'),'edit'=>Slide::find($id)]);
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
        $rules = ['title'=>'required','url'=>'url','photo'=>'image|mimes:jpg,png,gif,bmp'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title'),'url'=>trans('admin.url'),'photo'=>trans('admin.photo')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $slide = Slide::find($id);
            $slide->title = $r->input('title');
            $slide->url   = $r->input('url');
            if($r->hasFile('photo'))
            {
             @unlink(base_path('upload/'.$slide->photo));
             $slide->photo = Upload::upload($r->file('photo'),'slide/','icon',0,'no');
            }
            $slide->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/slides');
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
         $slide = Slide::find($id);
         @unlink(base_path('upload/'.$slide->photo));
         $slide->delete();
         session()->flash('success',trans('admin.deleted'));
         return redirect(app('aurl').'/slides');
    }
}

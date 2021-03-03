<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyImage;
use App\ImagesCategory;
use Intervention\Image\Facades\Image;
use Set;
use Upload;
use Validator;

class MyImageController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MyImages = MyImage::orderBy('id','desc')->paginate(10);
        return view(app('at').'.MyImage.index',['title'=>trans('admin.MyImages'),'MyImages'=>$MyImages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MyImages = MyImage::orderBy('id','desc')->paginate(10);
        $ImageCategories = ImagesCategory::get();
        return view(app('at').'.MyImage.create',['title'=>trans('admin.add'),'MyImages'=>$MyImages,'ImageCategories'=>$ImageCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'name'           => 'required',
            // 'images_category_id'           => 'required',
            // 'image'     => 'required',
        ];
        $this->validate(request(), $rules, [], [
            // 'name'           => trans('admin.name'),
            // 'images_category_id'           => trans('admin.ImageCategoryName'),
            // 'image'     => trans('admin.photo'),
        ]);
        dd($request->file('image'));
        $data = $request->except('_token','_method','images');
        
        // if($request->hasFile('image')){
        //     $img = Storage::disk('public')->putFile('images',$request->file('image'));
        //     $data['image']=$img;
        // }
        
        $image = $request->file('image');
        $Imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = base_path('assets/MyImage/');
        $image->move($destinationPath, $Imagename);

        $data['image_name'] = $Imagename;


        $MyImage = MyImage::create($data);
        session()->flash('success', trans('admin.added'));
            return redirect(app('aurl').'/MyImage');
        
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
        return view(app('at').'.MyImage.edit',['title'=>trans('admin.edit'),'edit'=>MyImage::find($id)]);
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
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = MyImage::find($id);
            $add->title  = $r->input('title');
            // if($r->has('parent'))
            // {
            //     $add->parent = $r->input('parent');
            // }else{
            //     $add->parent = 0;
            // }
            $add->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/MyImage');
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
    //    if($id == 8 || $id == 9)
    //    {
    //     session()->flash('error',trans('admin.can_not_delete_this_cats'));
    //    }else{
        $MyImage = MyImage::find($id);
        // $MyImage->parent()->delete();
        $MyImage->delete();
        session()->flash('success',trans('admin.deleted'));
    //    } 
        return redirect(app('aurl').'/MyImage');
    }
}

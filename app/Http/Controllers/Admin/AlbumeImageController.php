<?php

namespace App\Http\Controllers\Admin;

use App\AlbumeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Upload;

class AlbumeImageController   extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = AlbumeImage::all();
        $title  = "صور الالبومات";
        return view('admin.albumeimag.index', compact('says','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title  = "اضافه";
       return view('admin.albumeimag.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {   


        
        $Validator = Validator::make($r->all(),[
        'albume_id'    =>  'required',
          'img' => 'required|array',
        ]);
        
   
        
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            
            
           $imgs = $r->file('img');
           
           
           $imgs_names = [];
           
           foreach($imgs as $image):
                // preapre iamge 
              
                $Imagename = rand(1,1000000).'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/uplodedimage/');
                $image->move($destinationPath, $Imagename);
               // end praepte iamge 
               
               $imgs_names[] = $Imagename;
            endforeach;
        
            // insert multipul data 
            foreach($imgs_names as $img):
                AlbumeImage::create([
                    'albume_id' => $r->input('albume_id'),
                    'img' => $img
                ]);
                
               
            endforeach;
    
            
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/AlbumeImage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function show(Numebr $Numebr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $said  = AlbumeImage::findOrFail($id);
         $title  = "صور الالبومات";
        
        return view('admin.albumeimag.edit', compact('said','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $said  = AlbumeImage::findOrFail($id);

       $Validator = Validator::make($r->all(),[
          'img' => 'nullable',
          'albume_id'    =>  'required',
        ]);


        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            
            $Imagename = $said->img;
            
            // check if new img 
            if($r->hasFile('img'))
            {
               $image = $r->file('img');
                $Imagename = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/uplodedimage/');
                $image->move($destinationPath, $Imagename);
            // end praepte iamge 
            }
            
            DB::table('albume_img')
            ->where('id', $id)
            ->update([
             'albume_id' =>  $r->input('albume_id'), 
              'img' =>  $Imagename , 
               ]);
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/AlbumeImage/'. $id . '/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AlbumeImage = AlbumeImage::findOrFail($id);
        $AlbumeImage->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}
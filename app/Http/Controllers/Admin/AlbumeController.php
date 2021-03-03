<?php

namespace App\Http\Controllers\Admin;

use App\Albume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Upload;
use App\AlbumeImage;

class AlbumeController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Albume::all();
        $title  = "البومات";
        return view('admin.albume.index', compact('says','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title  = "اضافه";
       return view('admin.albume.create', compact('title'));
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
          'name' => 'required',
          'img'    =>  'required',
        ]);
        
   
        
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            
           // preapre iamge 
            $image = $r->file('img');
            $Imagename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedimage/');
            $image->move($destinationPath, $Imagename);
           // end praepte iamge 
            
        
            $Albume = new Albume;
            $Albume->name       = $r->input('name');
            $Albume->img = $Imagename;
            
            $Albume->save(); // save recourcd
            
 
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/Albume');
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
        $said  = Albume::findOrFail($id);
        $title  = "البومات";
        
        return view('admin.albume.edit', compact('said','title'));
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
        $said  = Albume::findOrFail($id);

       $Validator = Validator::make($r->all(),[
          'name' => 'required',
          'img'    =>  'nullable',
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
            
            DB::table('albumes')
            ->where('id', $id)
            ->update([
             'name' =>  $r->input('name'), 
              'img' =>  $Imagename , 
               ]);
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/Albume/'. $id . '/edit');
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
        $Albume = Albume::findOrFail($id);
        AlbumeImage::where('albume_id', $id)->delete();
        $Albume->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

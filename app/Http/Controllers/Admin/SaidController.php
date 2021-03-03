<?php

namespace App\Http\Controllers\Admin;

use App\Said;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class SaidController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Said::all();
        $title  = "قالوا عنا";
        return view('admin.said.index', compact('says','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "قالو عنا";
       return view('admin.said.create', compact('title'));
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
          'name' => 'nullable',
          'description' => 'nullable',
        ]);

        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            
            // preapre iamge  
            if($r->hasFile('img')):
                $image = $r->file('img');
                $Imagename1 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/uploded/');
                $image->move($destinationPath, $Imagename1);
            else:
                $Imagename1 = null;
            endif;
           // end praepte iamge 
           
            $Said = new Said;
            $Said->name       = $r->input('name');
            $Said->description = $r->input('description');
            $Said->img = $Imagename1;
            
            $Said->save(); // save recourcd
            
            
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/Said');
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
        $said = Said::findOrFail($id);
        $title  = "قالوا عنا";
        
        return view('admin.said.edit', compact('said','title'));
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
        
        
        $said = Said::findOrFail($id);
        
       $Validator = Validator::make($r->all(),[
          'name' => 'nullable',
          'description' => 'nullable',
        ]);


        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
        
             // preapre iamge  
            if($r->hasFile('img')):
                $image = $r->file('img');
                $Imagename1 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/uploded/');
                $image->move($destinationPath, $Imagename1);
            else:
                $Imagename1 = $said->img;
            endif;
           // end praepte iamge 
        
            DB::table('saids')
            ->where('id', $id)
            ->update(['name' =>  $r->input('name'), 
             'description' =>  $r->input('description') , 'img' => $Imagename1]);
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/Said/'. $id . '/edit');
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
        $Said = Said::findOrFail($id);
        $Said->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

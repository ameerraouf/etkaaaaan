<?php

namespace App\Http\Controllers\Admin;

use App\Market;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Upload;

class MarketController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Market::all();
        $title  = "المتجر";
        return view('admin.market.index', compact('says','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title  = "المتجر";
       return view('admin.market.create', compact('title'));
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
          'price' => 'required',
          'description' => 'required',
          'img'    =>  'required|mimes:jpeg,jpg,png|max:10000',
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
            
        
            $Market = new Market;
            $Market->price = $r->input('price');
            $Market->name       = $r->input('name');
            $Market->description = $r->input('description');
            $Market->img = $Imagename;
            
            $Market->save(); // save recourcd
            
 
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/Market');
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
        $said  = Market::findOrFail($id);
        $title  = "المتجر";
        
        return view('admin.market.edit', compact('said','title'));
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
        $said  = Market::findOrFail($id);

       $Validator = Validator::make($r->all(),[
          'name' => 'required',
          'price' => 'required',
          'description' => 'required',
          'img'    =>  'nullable|mimes:jpeg,jpg,png|max:10000',
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
            
            DB::table('markets')
            ->where('id', $id)
            ->update(['name' =>  $r->input('name'), 
             'description' =>  $r->input('description') , 'img' =>  $Imagename , 'price' => $r->input('price') ]);
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/Market/'. $id . '/edit');
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
        $Market = Market::findOrFail($id);
        $Market->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

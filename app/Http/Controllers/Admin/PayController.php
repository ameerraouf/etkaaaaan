<?php

namespace App\Http\Controllers\Admin;

use App\Pay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class PayController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $says = Pay::all();
        foreach($says as $pay)
        {
            $pay->read_it = 'yes';
            $pay->save();
        }
        $title  = "المدفوعات";
        return view('admin.pay.index', compact('says','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title  = "المدفوعات";
       return view('admin.pay.create', compact('title'));
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
          'description' => 'required',
        ]);

        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $Pay = new Pay;
            $Pay->name       = $r->input('name');
            $Pay->description = $r->input('description');
            
            $Pay->save(); // save recourcd
            
            
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/Pay');
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
        $Pay = Pay::findOrFail($id);
         $title  = "المدفوعات";
        
        return view('admin.pay.edit', compact('Pay','title'));
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
        

       $Validator = Validator::make($r->all(),[
          'name' => 'required',
          'description' => 'required',
        ]);


        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{

        
            DB::table('pay')
            ->where('id', $id)
            ->update(['name' =>  $r->input('name'), 
             'description' =>  $r->input('description') ]);
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/Pay/'. $id . '/edit');
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
        $Pay = Pay::findOrFail($id);
        $Pay->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

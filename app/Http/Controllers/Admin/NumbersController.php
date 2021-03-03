<?php

namespace App\Http\Controllers\Admin;

use App\Number;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class NumbersController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::first();
        $title  = "الارقام";
        return view('admin.numbers.index', compact('numbers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "الارقام";
       return view('admin.numbers.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {   

        Number::where('id','>',-1)->delete();

        $Validator = Validator::make($r->all(),[
          'users' => 'required',
          'teachers' => 'required',
          'sessions' => 'required',
          'keeps' => 'required',
        ]);

        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $Number = new Number;
            $Number->users       = $r->input('users');
            $Number->teachers = $r->input('teachers');
            $Number->keeps = $r->input('keeps');
            $Number->sessions = $r->input('sessions');
            
            $Number->save(); // save recourcd
            
            
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/Numbers');
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
        $numebr = Number::findOrFail($id);
        $title  = "الارقام";
        
        return view('admin.numbers.edit', compact('numebr','title'));
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
        Number::where('id','>',-1)->delete();

        $Validator = Validator::make($r->all(),[
          'users' => 'required',
          'teachers' => 'required',
          'sessions' => 'required',
          'keeps' => 'required',
        ]);

        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $Number = new Number;
            $Number->users       = $r->input('users');
            $Number->teachers = $r->input('teachers');
            $Number->keeps = $r->input('keeps');
            $Number->sessions = $r->input('sessions');
            $Number->save(); // save recourcd
            
          
            session()->flash('success',"تم التعديل بنجاح");
            return redirect( app('aurl').'/Numbers');
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
        $Numebr = Number::findOrFail($id);
        $Numebr->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use Set;
use Validator;

class Departments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::where('parent',0)->orderBy('id','desc')->paginate(10);
        return view(app('at').'.department.index',['title'=>trans('admin.departments'),'departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.department.create',['title'=>trans('admin.add')]);
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
                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new Department;
            $add->title  = $r->input('title');
            if($r->has('parent'))
            {
                $add->parent = $r->input('parent');
            }else{
                $add->parent = 0;
            }
            $add->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/department');
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
        return view(app('at').'.department.edit',['title'=>trans('admin.edit'),'edit'=>Department::find($id)]);
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
            $add = Department::find($id);
            $add->title  = $r->input('title');
            if($r->has('parent'))
            {
                $add->parent = $r->input('parent');
            }else{
                $add->parent = 0;
            }
            $add->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/department');
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
       if($id == 8 || $id == 9)
       {
        session()->flash('error',trans('admin.can_not_delete_this_cats'));
       }else{
        $department = Department::find($id);
        $department->parent()->delete();
        $department->delete();
        session()->flash('success',trans('admin.deleted'));
       } 
        return redirect(app('aurl').'/department');
    }
}

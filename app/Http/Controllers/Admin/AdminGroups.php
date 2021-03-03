<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Set;
use Upload;
use Validator;
class AdminGroups extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Admin::orderBy('id','desc')->paginate(10);
        return view(app('at').'.group.admin.index',['title'=>trans('admin.admingroup'),'groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.group.admin.create',['title'=>trans('admin.addadmingroup')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules  = ['name'=>'required'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $admin = new Admin;
            $admin->name    = $r->input('name');
            if($r->has('settings')){ $admin->settings = 1; }else{ $admin->settings = 0;}
            if($r->has('country')){ $admin->country = 1; }else{ $admin->country = 0;}
            if($r->has('users')){ $admin->users = 1; }else{ $admin->users = 0;}
            if($r->has('admingroup')){ $admin->admingroup = 1; }else{ $admin->admingroup = 0;}
            if($r->has('pages')){ $admin->pages = 1; }else{ $admin->pages = 0;}
            if($r->has('links')){ $admin->links = 1; }else{ $admin->links = 0;}
            //if($r->has('comments')){ $admin->comments = 1; }else{ $admin->comments = 0;}
            if($r->has('contact')){ $admin->contact = 1; }else{ $admin->contact = 0;}
            if($r->has('banners')){ $admin->banners = 1; }else{ $admin->banners = 0;}
            if($r->has('departments')){ $admin->departments = 1; }else{ $admin->departments = 0;}
            if($r->has('news')){ $admin->news = 1; }else{ $admin->news = 0;}
            if($r->has('formspdf')){ $admin->formspdf = 1; }else{ $admin->formspdf = 0;}
            if($r->has('orders')){ $admin->orders = 1; }else{ $admin->orders = 0;}
            if($r->has('orders2')){ $admin->orders2 = 1; }else{ $admin->orders2 = 0;}
            if($r->has('orders3')){ $admin->orders3 = 1; }else{ $admin->orders3 = 0;}
            $admin->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/admingroup');
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
     return view(app('at').'.group.admin.edit',['title'=>trans('admin.edit'),'edit'=>Admin::find($id)]);
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
        $rules  = ['name'=>'required'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $admin = Admin::find($id);
            $admin->name    = $r->input('name');
            if($r->has('settings')){ $admin->settings = 1; }else{ $admin->settings = 0;}
            if($r->has('country')){ $admin->country = 1; }else{ $admin->country = 0;}
            if($r->has('users')){ $admin->users = 1; }else{ $admin->users = 0;}
            if($r->has('admingroup')){ $admin->admingroup = 1; }else{ $admin->admingroup = 0;}
            if($r->has('pages')){ $admin->pages = 1; }else{ $admin->pages = 0;}
            if($r->has('links')){ $admin->links = 1; }else{ $admin->links = 0;}
            //if($r->has('comments')){ $admin->comments = 1; }else{ $admin->comments = 0;}
            if($r->has('contact')){ $admin->contact = 1; }else{ $admin->contact = 0;}
            if($r->has('banners')){ $admin->banners = 1; }else{ $admin->banners = 0;}
            if($r->has('departments')){ $admin->departments = 1; }else{ $admin->departments = 0;}
            if($r->has('news')){ $admin->news = 1; }else{ $admin->news = 0;}
            if($r->has('formspdf')){ $admin->formspdf = 1; }else{ $admin->formspdf = 0;}
            if($r->has('orders')){ $admin->orders = 1; }else{ $admin->orders = 0;}
            if($r->has('orders2')){ $admin->orders2 = 1; }else{ $admin->orders2 = 0;}
            if($r->has('orders3')){ $admin->orders3 = 1; }else{ $admin->orders3 = 0;}
            $admin->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/admingroup');
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
        @Admin::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/admingroup');
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Area;
use Validator;
class Areas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::paginate(10);
        return view(app('at').'.area.index',['title'=>trans('admin.areas'),'areas'=>$areas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.area.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = ['name'=>'required','country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),'country_id'=>trans('admin.country')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $Area = new Area;
            $Area->name       = $r->input('name');
            $Area->country_id = $r->input('country_id');
            $Area->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/areas');
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
      return view(app('at').'.area.edit',['title'=>trans('admin.edit'),'edit'=>Area::find($id)]);
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
        $rules = ['name'=>'required','country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),'country_id'=>trans('admin.country')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $Area = Area::find($id);
            $Area->name         = $r->input('name');
            $Area->country_id   = $r->input('country_id');
            $Area->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/areas');
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
      $area = Area::find($id);
      $area->city()->delete();
      $area->section()->delete();
      $area->delete();  
      session()->flash('success',trans('admin.deleted'));
      return redirect(app('aurl').'/areas');
    }
}

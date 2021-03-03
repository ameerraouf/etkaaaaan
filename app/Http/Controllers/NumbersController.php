<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Country;
use Validator;
use Form;
class Cities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate(10);
        return view(app('at').'.city.index',['title'=>trans('admin.cities'),'cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.city.create',['title'=>trans('admin.add')]);
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
           'name'=>'required',
           'area_id'=>'required|numeric',
           'country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),
                'area_id'=>trans('admin.area'),
                'country_id'=>trans('admin.country'),
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $city = new City;
            $city->name       = $r->input('name');
            $city->area_id    = $r->input('area_id');
            $city->country_id = $r->input('country_id');
            $city->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/cities');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r,$id)
    {
        if($r->ajax())
        {
            if($r->has('country_id'))
            {
                $areas = Area::where('country_id',$r->input('country_id'))->pluck('name','id');
                $form  = Form::select('area_id',$areas,$r->input('select'),['class'=>'form-control','placeholder'=>'......']);
                return $form;
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view(app('at').'.city.edit',['title'=>trans('admin.edit'),'edit'=>City::find($id)]);
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
           'name'=>'required',
           'area_id'=>'required|numeric',
           'country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),
                'area_id'=>trans('admin.area'),
                'country_id'=>trans('admin.country'),
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $city = City::find($id);
            $city->name         = $r->input('name');
            $city->area_id   = $r->input('area_id');
            $city->country_id   = $r->input('country_id');
            $city->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/cities');
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
      $city = City::find($id);
      $city->section()->delete();  
      $city->delete();  
      session()->flash('success',trans('admin.deleted'));
      return redirect(app('aurl').'/cities');
    }
}

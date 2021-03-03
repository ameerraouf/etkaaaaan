<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Country;
use App\Section;
use Validator;
use Form;
class Sections extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::paginate(10);
        return view(app('at').'.section.index',['title'=>trans('admin.sections'),'sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.section.create',['title'=>trans('admin.add')]);
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
           'city_id'=>'required|numeric',
           'area_id'=>'required|numeric',
           'country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),
                'area_id'=>trans('admin.area'),
                'city_id'=>trans('admin.city'),
                'country_id'=>trans('admin.country'),
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $section = new Section;
            $section->name       = $r->input('name');
            $section->area_id    = $r->input('area_id');
            $section->country_id = $r->input('country_id');
            $section->city_id    = $r->input('city_id');
            $section->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/sections');
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
                $form  = Form::select('area_id',$areas,$r->input('select'),['class'=>'form-control area','placeholder'=>'......']);
                return $form;
            }elseif($r->has('area_id'))
            {
                $areas = City::where('area_id',$r->input('area_id'))->pluck('name','id');
                $form  = Form::select('city_id',$areas,$r->input('select'),['class'=>'form-control','placeholder'=>'......']);
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
      return view(app('at').'.section.edit',['title'=>trans('admin.edit'),'edit'=>Section::find($id)]);
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
           'city_id'=>'required|numeric',
           'area_id'=>'required|numeric',
           'country_id'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                'name'=>trans('admin.name'),
                'area_id'=>trans('admin.area'),
                'city_id'=>trans('admin.city'),
                'country_id'=>trans('admin.country'),
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $section = Section::find($id);
            $section->name         = $r->input('name');
            $section->area_id      = $r->input('area_id');
            $section->country_id   = $r->input('country_id');
            $section->city_id      = $r->input('city_id');
            $section->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/sections');
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
      @Section::find($id)->delete();  
      session()->flash('success',trans('admin.deleted'));
      return redirect(app('aurl').'/sections');
    }
}

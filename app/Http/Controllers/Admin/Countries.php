<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use Validator;
class Countries extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(10);
        return view(app('at').'.country.index',['title'=>trans('admin.countries'),'countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.country.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = ['name'=>'required','code'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),'code'=>trans('admin.code')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $country = new Country;
            $country->name = $r->input('name');
            $country->code = $r->input('code');
            $country->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/countries');
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
      return view(app('at').'.country.edit',['title'=>trans('admin.edit'),'edit'=>Country::find($id)]);
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
        $rules = ['name'=>'required','code'=>'required|numeric'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['name'=>trans('admin.name'),'code'=>trans('admin.code')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $country = Country::find($id);
            $country->name = $r->input('name');
            $country->code = $r->input('code');
            $country->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/countries');
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
      $country = Country::find($id);
      $country->areas()->delete();  
      $country->city()->delete();  
      $country->section()->delete();
      $country->delete();
        
      session()->flash('success',trans('admin.deleted'));
      return redirect(app('aurl').'/countries');
    }
}

<?php

namespace App\Http\Controllers;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        $title = 'شركاء العمل';
        return view('admin.partner.index',compact('partners','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "انشاء شركاء عمل";
        return view('admin.partner.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        if($request->hasFile('logo')){
            $input['logo'] = Storage::disk('public')->putFile('logos', $request->file('logo'));
        }
        Partner::query()->create($input);
        return redirect()->route('partner.index');
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
        $partner = Partner::find($id);
        $title = "انشاء شركاء عمل";
        return view('admin.partner.edit',compact('title','partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token','_method');
        if($request->hasFile('logo')){
            $input['logo'] = Storage::disk('public')->putFile('logos', $request->file('logo'));
        }
        Partner::query()->where('id',$id)->update($input);
        return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Partner::find($id);
        $p->delete();
        return redirect()->route('partner.index');
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifcation;
use Validator;
class Notifcations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifcations = Notifcation::paginate(10);
        return view(app('at').'.notifcations.index',['title'=>trans('admin.notifcations'),'notifcations'=>$notifcations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.notifcations.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = ['title'=>'required','content'=>'required'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title'),'content'=>trans('admin.content')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $notifcations = new Notifcation;
            $notifcations->title = $r->input('title');
            $notifcations->content = $r->input('content');
            $notifcations->addby   = auth()->user()->id;
            $notifcations->accept_application   = 0;
            $notifcations->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/notifcations');
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
      return view(app('at').'.notifcations.edit',['title'=>trans('admin.edit'),'edit'=>Notifcation::find($id)]);
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
        $rules = ['title'=>'required','content'=>'required'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['title'=>trans('admin.title'),'content'=>trans('admin.content')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $notifcations = Notifcation::find($id);
            $notifcations->title = $r->input('title');
            $notifcations->content = $r->input('content');
            $notifcations->addby   = auth()->user()->id;

            $notifcations->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/notifcations');
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
      $notifcations = Notifcation::find($id);
      $notifcations->delete();
        
      session()->flash('success',trans('admin.deleted'));
      return redirect(app('aurl').'/notifcations');
    }
}

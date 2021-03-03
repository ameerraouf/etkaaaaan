<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Link;
use Validator;

class Links extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(app('at').'.links.index',['title'=>trans('admin.links'),'links'=>Link::where('parent',0)->orderBy('dir','asc')->paginate(40)]);
    }

    public function sort_list_link(Request $r)
    {
      $id = $r->input('id');
      $i = 0;
      foreach($r->input('dir') as $dir)
      {
        $link = Link::find($id[$i]);
        if(!empty($link))
        {
          $link->dir = $dir;
          $link->save();
        }
        $i++;
      }
      session()->flash('success',trans('admin.updated'));
      return redirect(app('aurl').'/links');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.links.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
         $rules = ['name'=>'required'];
         $Validator = Validator::make($r->all(),$rules);
         $Validator->SetAttributeNames(['name'=>trans('admin.name')]);
         if($Validator->fails())
         {
            return back()->withInput()->withErrors($Validator);
         }else{
          $link = new Link;
          $link->name = $r->input('name');
          $link->url       = $r->input('url');
          $link->typelink    = $r->input('typelink');
          if($r->has('parent'))
          {
           $link->parent= $r->input('parent'); 
          }else{
           $link->parent= 0;  
          }
          $link->save();
          session()->flash('success',trans('admin.added'));
          return redirect(app('aurl').'/links');
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
        return view(app('at').'.links.edit',['title'=>trans('admin.edit'),'edit'=>Link::find($id)]);
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
       $rules = ['name'=>'required'];
         $Validator = Validator::make($r->all(),$rules);
         $Validator->SetAttributeNames(['name'=>trans('admin.name')]);
         if($Validator->fails())
         {
            return back()->withInput()->withErrors($Validator);
         }else{
          $link = Link::find($id);
          $link->name = $r->input('name');
          $link->url       = $r->input('url');
          $link->typelink    = $r->input('typelink');
          if($r->has('parent'))
          {
           $link->parent= $r->input('parent'); 
          }else{
           $link->parent= 0;  
          }
          $link->save();
          session()->flash('success',trans('admin.added'));
          return redirect(app('aurl').'/links');
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
         @Link::find($id)->delete();
         @Link::where('parent',$id)->delete();
          session()->flash('success',trans('admin.deleted'));
          return redirect(app('aurl').'/links');
    }
}

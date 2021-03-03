<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Comment;
use Validator;
use Set;
use Upload;

class Comments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        if($r->has('order') and $r->has('comment'))
        {
            $comment = Comment::find($r->input('comment'));
            if(!empty($comment))
            {
                if($r->input('order') == 0 || $r->input('order') == 1)
                {   
                 $comment->active = $r->input('order');
                 $comment->save();
                 session()->flash('success',trans('admin.updated'));
                }
            }
                return back();
        }elseif($r->has('delete') && $r->input('comment'))
        {
          $comment = Comment::find($r->input('comment'));
          if(!empty($comment))
          {
            $comment->delete();
            session()->flash('success',trans('admin.deleted'));
          }
                return back();
        }
        $comments =Comment::where(function($q)use($r){
            if($r->has('active'))
            {
                return $q->where('active',$r->input('active'));
            }else{
                return $q->where('active',0);
            }
        })->orderBy('id','desc')->paginate(10);
        return view(app('at').'.comments.index',['title'=>trans('admin.comments'),'comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        @Comment::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/comments');
    }
}

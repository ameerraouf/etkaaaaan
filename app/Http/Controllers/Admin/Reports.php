<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Set;
use Validator;
use Upload;
use App\User;
use App\News;
use App\Comment;
use App\Report;
use URL;

class Reports extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        if($r->has('report'))
        {
            $report = Report::find($r->input('report'));
            if(!empty($report))
            {   
                if($r->input('order') == 'block_user')
                {
                    $user = User::find($report->to_user_id);
                    $user->blocking_user = 1;
                    $user->save();

                    $report->done = 1;
                    $report->save();
                    session()->flash('success',trans('admin.blocking_user',['name'=>$report->to_user()->first()->name]));
                }elseif($r->has('delete') and $r->input('delete') == 1)
                {
                    $report->delete();
                    session()->flash('success',trans('admin.deleted'));
                }
            }

            return redirect(app('aurl').'/reports');
        }

        $reports = Report::where(function($q)use($r){
            if($r->has('done'))
            {
                return $q->where('done',$r->input('done'));
            }else{
                return $q->where('done',0);
            }
        })->where(function($q) use($r){
            if($r->input('get') == 'report_comment')
            {
                return $q->where('comment_id','>',0);
            }elseif($r->input('get') == 'report_to_news')
            {
                return $q->where('news_id','>',0);
            }elseif($r->input('get') == 'report_to_user')
            {
                return $q->where('to_user_id','>',0);
            }
        })->orderBy('id','desc')->paginate(10);
        return view(app('at').'.reports.index',['title'=>trans('admin.reports'),'reports'=>$reports]);
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
        //
    }
}

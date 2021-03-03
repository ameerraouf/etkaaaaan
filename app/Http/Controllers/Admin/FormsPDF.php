<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormPDF as FPDF;
use Upload;
use Validator;
use Set;
class FormsPDF extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = FPDF::orderBy('id','desc')->paginate(10);
        return view(app('at').'.forms.index',['title'=>trans('admin.formspdf'),'forms'=>$forms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.forms.create',['title'=>trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $rules = ['title'=>'required','content'=>'','pdf'=>'required|mimes:pdf'];
        $Validator = Validator::make($r->all(),$rules);
    $Validator->SetAttributeNames(['title'=>trans('admin.title'),'content'=>trans('admin.content'),'pdf'=>trans('admin.pdf')]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{   
            $pdf = new FPDF;
            $pdf->title = $r->input('title');
            $pdf->content = $r->input('content');
            $pdf->pdf = Upload::upload($r->file('pdf'),'/pdf','icon',0,'','no');
            $pdf->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/formspdf');
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
        return view(app('at').'.forms.edit',['title'=>trans('admin.edit'),'edit'=>FPDF::find($id)]);
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
          $rules = ['title'=>'required','content'=>'','pdf'=>'mimes:pdf'];
        $Validator = Validator::make($r->all(),$rules);
            $Validator->SetAttributeNames([
                    'title'=>trans('admin.title'),
                    'content'=>trans('admin.content'),
                    'pdf'=>trans('admin.pdf')
                    ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{   
            $pdf = FPDF::find($id);
            $pdf->title = $r->input('title');
            $pdf->content = $r->input('content');
            if($r->hasFile('pdf'))
            {
                unlink(base_path('upload/'.$pdf->pdf));
                $pdf->pdf = Upload::upload($r->file('pdf'),'/pdf','icon',0,'','no');
            }
            $pdf->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/formspdf');
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
        $pdf = FPDF::find($id);
        @unlink(base_path('upload/'.$pdf->pdf));
        $pdf->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/formspdf');

    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Policie;
use Validator;

class PolicieController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
      $rows = Policie::all();
      $title = 'السياسات';
      
      return view(app('at').'.policie.index',compact('rows','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view(app('at').'.policie.create',
        ['title'=> "السياسات"]);
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
            'img' => 'required|image',
            'file' => 'required|file'
        ];
                 
        $Validator = Validator::make($r->all(),$rules);
        
        $Validator->SetAttributeNames([
            'name'=>trans('admin.name'),
           
            'img'=>trans('admin.img'),
            'file'=>trans('admin.file'),
        ]);
        
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            
            // preapre iamge 
            $image = $r->file('img');
            $Imagename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedimage/');
            $image->move($destinationPath, $Imagename);
           // end praepte iamge 
           
           // preapre iamge 
            $file = $r->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedfiles/');
            $file->move($destinationPath, $fileName);
           // end praepte iamge 
           
            $report = new Policie;
            $report->name         = $r->input('name');
            $report->description  = $r->description;
            $report->img          = $Imagename;
            $report->file         = $fileName;
            $report->save();
            
            session()->flash('success',trans('admin.added'));
            return back();
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $row = Policie::findOrFail($id);
        
        return view(app('at').'.policie.edit',
        ['title'=> $row->name , 'row' => $row]);
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
        
        $row = Policie::findOrFail($id);

       $rules = [
            'name'=>'required',
            
            'img' => 'nullable|image',
            'file' => 'nullable|file'
        ];
                 
        $Validator = Validator::make($r->all(),$rules);
        
        $Validator->SetAttributeNames([
            'name'=>trans('admin.name'),
           
            'img'=>trans('admin.img'),
            'file'=>trans('admin.file'),
        ]);
        
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }
            
        $Imagename = $row->img;
        
        if($r->hasFile('img')):
            // preapre iamge 
            $image = $r->file('img');
            $Imagename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedimage/');
            $image->move($destinationPath, $Imagename);
           // end praepte iamge 
        endif;
        
        $fileName = $row->file;
        
        if($r->hasFile('file')):    
        // preapre file 
            $file = $r->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedfiles/');
            $file->move($destinationPath, $fileName);
           // end praepte file 
        endif;
        
        $row->update([
            'name' => $r->name,
            'description' => $r->description,
            'img' => $Imagename,
            'file' => $fileName
        ]);
    
        session()->flash('success', "تم التعديل بنجاح");
        return back();
        
    }

    /**Controller
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $row = Policie::findOrFail($id);
         $row->delete();
        session()->flash('success',trans('admin.deleted'));
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class RateController   extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Rate::all();
        $title  = "التقييمات";
        return view('admin.rate.index', compact('says','title'));
    }
    
    
     public function trush()
    {
       
        $Said = Rate::findOrFail($id);
        $Said->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }

    
}

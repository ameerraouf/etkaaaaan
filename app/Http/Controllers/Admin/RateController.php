<?php

namespace App\Http\Controllers\Admin;

use App\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class RateController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $title  = "التقييمات";
        
        $good = [
            'name' => 'good',
            'count' =>   Rate::where('rate','good')->count()
        ];
        
        $bad = [
            'name' => 'bad',
            'count' =>   Rate::where('rate','bad')->count()
        ];
        
        $vreygood = [
            'name' => 'vreygood',
            'count' =>   Rate::where('rate','vreygood')->count()
        ];
        
        $excellent = [
            'name' => 'excellent',
            'count' =>   Rate::where('rate','excellent')->count()
        ];

        $says[] = $good;
        $says[] = $bad;
        $says[] = $vreygood;
        $says[] = $excellent;
        
        $says = collect($says);
        
        $says = $says->sortByDesc('count');

        
        return view('admin.rate.index', compact('says','title'));
    }
    
    
   public function destroy($id)
    {
        $Said = Rate::findOrFail($id);
        $Said->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
    
}

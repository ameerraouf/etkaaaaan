<?php

namespace App\Http\Controllers\Admin;

use App\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class EpisodesController extends Controller
{
   
    public function index()
    {
        $says = Episode::all();
        
        $title = 'الحلقات';

        return view('admin.episode.index', compact('says','title'));
    }

    
    public function destroy($id)
    {
        $Pay = Episode::findOrFail($id);
        $Pay->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

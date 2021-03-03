<?php

namespace App\Http\Controllers\Admin;

use App\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class AdsController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::first();
        $title  = "الاعلانات";
        return view('admin.ads.index', compact('ads','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title  = "بنرات";
       return view('admin.ads.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {   

            Ad::where('id','>',-1)->delete();


            // preapre iamge  1
            if($r->hasFile('one')):
                $image = $r->file('one');
                $Imagename1 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename1);
            else:
                $Imagename1 = null;
            endif;
           // end praepte iamge 
           
            // preapre iamge  2
            if($r->hasFile('two')):
                $image = $r->file('two');
                $Imagename2 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename2);
            else:
                $Imagename2 = null;
            endif;
           // end praepte iamge 
           
            // preapre iamge  3
            if($r->hasFile('three')):
                $image = $r->file('three');
                $Imagename3 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename3);
            else:
                $Imagename3 = null;
            endif;
           // end praepte iamge 
           
           // preapre iamge  4
            if($r->hasFile('four')):
                $image = $r->file('four');
                $Imagename4 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename4);
            else:
                $Imagename4 = null;
            endif;
           // end praepte iamge 
            
            
            $ad = new Ad;
            $ad->one         = $Imagename1;
            $ad->tow         =  $Imagename2;
            $ad->three       = $Imagename3;
            $ad->four       = $Imagename4;
             $ad->link_one   = $r->link_one;
            $ad->link_two    = $r->link_two;
            $ad->link_three  = $r->link_three;
            $ad->link_four   = $r->link_four;
            $ad->save(); // save recourcd
            
            
            session()->flash('success' , 'تم التعديل');
            return redirect(app('aurl').'/Ads');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function show(Numebr $Numebr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = Ad::findOrFail($id);
        $title  = "بنرات";
        
        return view('admin.ads.edit', compact('ads','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
            $ads = Ad::findOrFail($id);


            // preapre iamge  1
            if($r->hasFile('one')):
                $image = $r->file('one');
                $Imagename1 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename1);
            else:
                $Imagename1 = $ads->one;
            endif;
           // end praepte iamge 
           
            // preapre iamge  2
            if($r->hasFile('two')):
                $image = $r->file('two');
                $Imagename2 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename2);
            else:
                $Imagename2 = $ads->tow;
            endif;
           // end praepte iamge 
           
            // preapre iamge  3
            if($r->hasFile('three')):
                $image = $r->file('three');
                $Imagename3 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename3);
            else:
                $Imagename3 = $ads->three;
            endif;
           // end praepte iamge 
           
           // preapre iamge  4
            if($r->hasFile('four')):
                $image = $r->file('four');
                $Imagename4 = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = base_path('assets/adsimgs/');
                $image->move($destinationPath, $Imagename4);
            else:
                $Imagename4 = $ads->three;
            endif;
           // end praepte iamge 
           
            $data = [
                'one' => $Imagename1,
                'tow' => $Imagename2,
                'three' => $Imagename3,
                'four' => $Imagename4,
                'link_one' => $r->link_one,
                'link_two' => $r->link_two,
                'link_three' => $r->link_three,
                'link_four' => $r->link_four,
                
            ];
            
            
            DB::table('ads')
            ->where('id', $id)
            ->update($data);
            
            
            session()->flash('success',trans('admin.edited'));
            return redirect(app('aurl').'/Ads/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Numebr  $Numebr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Numebr = Ad::findOrFail($id);
        $Numebr->delete();
        return back()->with('success','تم الحذف بنجاح ...');
    }
}

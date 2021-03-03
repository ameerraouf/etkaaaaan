<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
      $users = User::where(function($q)use($r){
        if($r->has('active') and is_numeric($r->input('active')))
        {
            return $q->where('active',$r->input('active'));
        }
      })->where(function($q)use($r){
        if($r->has('level'))
        {
            return $q->where('level',$r->input('level'));
        }
      })->where(function($q)use($r){
        if($r->has('country_id'))
        {
            return $q->where('country',$r->input('country_id'));
        }
      })->where(function($q)use($r){
        if($r->has('area_id'))
        {
            return $q->where('area',$r->input('area_id'));
        }
      })->where(function($q)use($r){
        if($r->has('city_id'))
        {
            return $q->where('city',$r->input('city_id'));
        }
      })->where(function($q)use($r){
        if($r->has('search'))
        {
            return $q->where('id','=',$r->input('search'))
                    ->orWhere('name','LIKE','%'.$r->input('search').'%')
                    ->orWhere('email','LIKE','%'.$r->input('search').'%')
                    ->orWhere('mobile','LIKE','%'.$r->input('search').'%')
                    ->orWhere('other_mobile','LIKE','%'.$r->input('search').'%');
        }
      })->orderBy('id','desc')->where(function($q) use($r){
        if($r->has('blocking_user'))
        {
          return $q->where('blocking_user',$r->input('blocking_user'));
        }
      })->paginate(10);
      return view(app('at').'.users.index',['title'=>trans('admin.users'),'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(app('at').'.users.create',['title'=>trans('admin.adduser')]);
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
                'email'=>'required|email|unique:users,email',
                'mobile'=>'required|numeric|unique:users,mobile',
                'password'=>'required|min:6|max:14',
                'country_id'=>'required',
               // 'city_id'=>'required',
               // 'area_id'=>'required',
                'level'=>'required',
                'active'=>'required',
                 ];
        $Validator = Validator::make($r->all(),$rules);                  
        $Validator->SetAttributeNames([
            'name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'mobile'=>trans('admin.mobile'),
            'password'=>trans('admin.password'),
            'country_id'=>trans('admin.country'),
            'city_id'=>trans('admin.city'),
            'area_id'=>trans('admin.area'),
            'level'=>trans('admin.level'),
            'active'=>trans('admin.status'),
        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $user = new User;
            $user->name          = $r->input('name');
            $user->email          = $r->input('email');
            $user->password   = bcrypt($r->input('password'));
            $user->mobile        = $r->input('mobile');
            $user->country       = $r->input('country_id');
            $user->area           = '0';//$r->input('area_id');
            $user->city             = '0';//$r->input('city_id');
            $user->active         = $r->input('active');
            $user->blocking_user         = 0;
            $user->expire_from  = 0;
            $user->expire_to    = 0;
            $user->level   = $r->input('level');
            if($r->input('level') == 'premium')
            {
                if($r->has('expire_from'))
                {
                    $user->expire_from = strtotime($r->input('expire_from'));
                }

                if($r->has('expire_to'))
                {
                    $user->expire_to = strtotime($r->input('expire_to'));
                }
            }elseif($r->input('level') == 'admin')
            {
                if($r->has('group_id'))
                {
                 $user->group_id = $r->input('group_id');   
                }
            }

            if($r->input('level') != 'admin')
            {
               $user->group_id = 0;
            }
               $user->api_token = ' ';
            $user->save();
            session()->flash('success',trans('admin.added'));
            return redirect(app('aurl').'/users');
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
        $user = User::find($id);
        return view(app('at').'.users.show',['title'=>$user->name,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(app('at').'.users.edit',['title'=>trans('admin.edit'),'edit'=>User::find($id)]);
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
        //return dd(strtotime($r->input('expire_from')));
        $rules = [
                'name'=>'required',
                'email'=>'required|email|unique:users,email,'.$id,
                'mobile'=>'required|numeric|unique:users,mobile,'.$id,
                //'password'=>'required|min:6|max:14',
                'country_id'=>'required',
                //'city_id'=>'required',
                //'area_id'=>'required',
                'level'=>'required',
                'active'=>'required',
                 ];
        $Validator = Validator::make($r->all(),$rules);                  
        $Validator->SetAttributeNames([
            'name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'mobile'=>trans('admin.mobile'),
            'password'=>trans('admin.password'),
            'country_id'=>trans('admin.country'),
            'city_id'=>trans('admin.city'),
            'area_id'=>trans('admin.area'),
            'level'=>trans('admin.level'),
            'active'=>trans('admin.status'),
        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{

            $user = User::find($id);
            $user->name     = $r->input('name');
            $user->email    = $r->input('email');
            if($r->has('password'))
            { 
             $user->password = bcrypt($r->input('password'));
            }
            $user->mobile   = $r->input('mobile');
            $user->country  = $r->input('country_id');
            $user->area     = 0;//$r->input('area_id');
            $user->city     = 0;//$r->input('city_id');
            $user->active        = $r->input('active');
            $user->level   = $r->input('level');

            if($r->input('level') == 'premium')
            {
                if($r->has('expire_from'))
                {
                    $user->expire_from = strtotime($r->input('expire_from'));
                }

                if($r->has('expire_to'))
                {
                    $user->expire_to = strtotime($r->input('expire_to'));
                }
            }elseif($r->input('level') == 'admin')
            {
                if($r->has('group_id'))
                {
                 $user->group_id = $r->input('group_id');   
                }
            }else{
               $user->group_id = 0;   
            }
            $user->blocking_user         = $r->input('blocking_user');
            $user->save();
            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/users');
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
        $user = User::find($id);
       // @$user->builds()->delete();
        @$user->step1()->delete();
        @$user->step2()->delete();
        @$user->step3()->delete();
       // @$user->update_admin_builds(); // delete id admin (admin_id column) from builds table updated
        @$user->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/users');
    }
}

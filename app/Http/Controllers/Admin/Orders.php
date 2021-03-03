<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SMS;
use App\Http\Controllers\Admin\Send;
use Illuminate\Http\Request;
use App\Order;
use App\Order2;
use App\User;
use Upload;
use Set;
use Validator;
class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $orders = Order::where(function($q)use($r){
            if($r->has('status'))
            {
                return $q->where('status',$r->input('status'));
            }elseif($r->has('search'))
            {
                $user = User::where('name','LIKE',$r->input('search'))->first();
                if(!empty($user))
                {
                    return $q->where('user_id',$user->id);
                }else{   
                    return $q->where('id_card','=',$r->input('search'))
                             ->orWhere('id',$r->input('search'))
                             ->orWhere('user_id',$r->input('search'));
                }
            }
        })->orderBy('id','desc')->paginate();
        return view(app('at').'.orders.step1.index',['title'=>trans('admin.orders_step1'),'orders'=>$orders]);
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
        return view(app('at').'.orders.step1.edit',['title'=>trans('admin.edit'),'edit'=>Order::find($id)]);
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
        $rules = [];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $order = Order::find($id);
            $order->name = $r->input('name');
            $order->id_card = $r->input('id_card');
            $order->birth = $r->input('birth');
            $order->gender = $r->input('gender');
            $order->age = $r->input('age');
            $order->num_of_family = $r->input('num_of_family');
            $order->handicapped = $r->input('handicapped');
            $order->handicapped_num = $r->input('handicapped_num');
            $order->sick = $r->input('sick');
            $order->sick_num = $r->input('sick_num');
            $order->social_status = $r->input('social_status');
            $order->pension_insurance = $r->input('pension_insurance');
            $order->salary = $r->input('salary');
            $order->have_job = $r->input('have_job');
            $order->title_job = $r->input('title_job');
            $order->ensure_monthly = $r->input('ensure_monthly');
            $order->yearly_guarantee = $r->input('yearly_guarantee');
            $order->finance_climate = $r->input('finance_climate');
            $order->finance_climate_salary = $r->input('finance_climate_salary');
            $order->other_income = $r->input('other_income');
            $order->type_income = $r->input('type_income');
            $order->type_salary = $r->input('type_salary');
    
            $order->total_salary = number_format(
                                                $r->input('finance_climate_salary') + 
                                                $r->input('salary') + 
                                                $r->input('type_salary') + 
                                                $r->input('sheep_salary') + 
                                                $r->input('transport_salary') + 
                                                $r->input('farm_salary') + 
                                                $r->input('camel_salary') + 
                                                $r->input('forestry_salary') + 
                                                $r->input('employment_salary') + 
                                                $r->input('basta_salary') + 
                                                $r->input('corporation_salary') 
                                                );


            $order->transport = $r->input('transport');
            $order->transport_salary = $r->input('transport_salary');
            $order->sheep = $r->input('sheep');
            $order->sheep_salary = $r->input('sheep_salary');
            $order->camel = $r->input('camel');
            $order->camel_salary = $r->input('camel_salary');
            $order->farm = $r->input('farm');
            $order->farm_salary = $r->input('farm_salary');
            $order->home_property = $r->input('home_property');
            $order->home_salary = $r->input('home_salary');
            $order->employment = $r->input('employment');
            $order->employment_salary = $r->input('employment_salary');
            $order->forestry = $r->input('forestry');
            $order->forestry_salary = $r->input('forestry_salary');
            $order->basta = $r->input('basta');
            $order->basta_salary = $r->input('basta_salary');
            $order->corporation = $r->input('corporation');
            $order->corporation_salary = $r->input('corporation_salary');
            $order->details = $r->input('details');
            $order->status = $r->input('status');
            $order->refused_reason = $r->input('refused_reason');
            $order->save();

            if($order->status == 'accept' and $r->has('send_alarm'))
            {
                $user = $order->user()->first();
                $data = [
                            'user'=>$user,
                            'content'=>trans('admin.accept_message',['name'=>$user->name]),
                        ];
                Send::Mail(app('at').'.emails_templates.accept_order',$data,$user->email,$user->name,trans('admin.accept_order_subject_mail'));
                $sms = new SMS;
                $sms->sendSMS($user->mobile,trans('admin.accept_order_subject_mail').'-'.Set::set()->sitename); 
            }

            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/orders/'.$order->id.'/edit');
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
        @Order::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/orders');
    }
}

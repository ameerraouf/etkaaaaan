<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SMS;
use App\Http\Controllers\Admin\Send;
use Illuminate\Http\Request;
use App\Order2;
use App\User;
use Upload;
use Set;
use Validator;
class Orders2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $orders = Order2::where(function($q)use($r){
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
                    return $q->orWhere('id',$r->input('search'))
                             ->orWhere('user_id',$r->input('search'));
                }
            }
        })->orderBy('id','desc')->paginate();
        return view(app('at').'.orders.step2.index',['title'=>trans('admin.orders_step2'),'orders'=>$orders]);
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
        $order = Order2::find($id);
        $user  = User::find($order->user_id);
        return view(app('at').'.orders.step2.edit',['title'=>trans('admin.edit'),'edit'=>$order,'user'=>$user]);
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
            $order = Order2::find($id);
            $user  = User::find($order->user_id);
            $order->housing_type = $r->input('housing_type');
            $order->housing_text = $r->input('housing_text');
            $order->employer     = $r->input('employer');
            $order->home_no      = $r->input('home_no');
            $order->employer_name      = $r->input('employer_name');
            $order->mobile1      = $r->input('mobile1');
            $order->mobile2      = $r->input('mobile2');
            $order->mobile3      = $r->input('mobile3');
            $order->mobile4      = $r->input('mobile4');

            $order->monthly                = $r->input('monthly');
            $order->monthly_salary         = $r->input('monthly_salary');
            $order->retirement             = $r->input('retirement');
            $order->retirement_salary      = $r->input('retirement_salary');
            $order->financial              = $r->input('financial');
            $order->financial_salary       = $r->input('financial_salary');
            $order->financial_information  = $r->input('financial_information');
            $order->financial_information_salary  = $r->input('financial_information_salary');
            $order->insurance                     = $r->input('insurance');
            $order->insurance_salary              = $r->input('insurance_salary');
            $equal = number_format($r->input('monthly_salary') + $r->input('retirement_salary') + $r->input('financial_salary')+$r->input('financial_information_salary') + $r->input('insurance_salary'));
            if($r->input('housing_type') == 'rent')
            {
             $order->balance                           = number_format($equal - $user->step1()->first()->num_of_family - 416);
            }else{
             $order->balance                           = number_format($equal - $user->step1()->first()->num_of_family);
            }
            $order->total                             = $equal;
            $order->status                            = $r->input('status');
            $order->refused_reason                    = $r->input('refused_reason');
            if($r->has('file_pdf_download'))
            {
                $order->file_pdf_download = implode(',',$r->input('file_pdf_download'));
            }
            $order->save();

            if($order->status == 'accept' and $r->has('send_alarm'))
            {
                $user = $order->user()->first();
                $data = [
                            'user'=>$user,
                            'content'=>trans('admin.accept_messageـstep2',['name'=>$user->name]),
                        ];
                Send::Mail(app('at').'.emails_templates.accept_order',$data,$user->email,$user->name,trans('admin.accept_order_subject_mail'));
                $sms = new SMS;
                $sms->sendSMS($user->mobile,trans('admin.accept_order_subject_mail').'-'.Set::set()->sitename); 
            }

            session()->flash('success',trans('admin.updated'));
            return redirect(app('aurl').'/orders2/'.$order->id.'/edit');
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
        @Order2::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/orders2');
    }
}

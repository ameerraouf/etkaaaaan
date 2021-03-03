<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Order2;
use App\Order3;
use Validator;
use Upload;
use App\FormPDF as PDF;
class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index_()
    {
        $order1 = self::step1();
        if($order1->status != 'accept')
        {
            return redirect('step/1');
        }else{
            return redirect('step/2');
        }
    }

    public function index($id)
    {
        if($id == 1){
            $order1 = self::step1();
            return view(app('tmp').'.user.step.step1',['title'=>trans('main.step1'),'order'=>$order1,'id',$id]);
        }elseif($id == 2)
        {
            $order2 = self::step2();
            return view(app('tmp').'.user.step.step3',['title'=>trans('main.step3'),'order'=>$order2,'id',$id]);
        }elseif($id == 3)
        {
            $order2 = self::step2();
            return view(app('tmp').'.user.step.step5',['title'=>trans('main.step5'),'order'=>$order2,'id',$id]);
        }
    }

    public function update_steps(Request $r,$id)
    {
        if($id == 1)
        {
        $order = self::step1();
        $rules = ['id_card'=>'required|numeric|min:0','name'=>'required','birth'=>'required','age'=>'required','num_of_family'=>'required','accept_info'=>'required'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                'id_card'=>trans('admin.id_card'),
                'name'=>trans('admin.name'),
                'birth'=>trans('admin.birth'),
                'age'=>trans('admin.age'),
                'num_of_family'=>trans('admin.num_of_family'),
                'accept_info'=>trans('main.accept_info'),
                ]); 
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
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
            $order->status = 'panding';
            $order->save();

            session()->flash('success',trans('main.step1_added'));
            return redirect('step');
        }
     }elseif($id == 2)
     {
        $rules = [
                 'accept_info'=>'required',
                 'mobile1'=>'required|numeric',
                 'mobile2'=>'required|numeric',
                 'mobile3'=>'required|numeric',
                 'mobile4'=>'required|numeric',
                 'housing_type'=>'required',
                 'housing_text'=>'required',
                 'employer'=>'required',
                 'home_no'=>'required',
                 'employer_name'=>'required',
                 'monthly'=>'required',
                 //'monthly_salary'=>'required',
                 'retirement'=>'required',
                 //'retirement_salary'=>'required',
                 'financial'=>'required',
                // 'financial_salary'=>'required',
                 'financial_information'=>'required',
                // 'financial_information_salary'=>'required',
                 'insurance'=>'required',
                // 'insurance_salary'=>'required',

                 ];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames([
                'accept_info'=>trans('main.accept_info'),
                'mobile1'=>trans('admin.mobile1'),
                'mobile2'=>trans('admin.mobile2'),
                'mobile3'=>trans('admin.mobile3'),
                'mobile4'=>trans('admin.mobile4'),
                'employer_name'=>trans('admin.employer_name'),
                'home_no'=>trans('admin.home_no'),
                'employer'=>trans('admin.employer'),
                'housing_text'=>trans('admin.housing_text'),
                'housing_type'=>trans('admin.housing_type'),
                'monthly'=>trans('admin.monthly'),
                'monthly_salary'=>trans('admin.monthly_salary'),
                'retirement'=>trans('admin.retirement'),
                'retirement_salary'=>trans('admin.retirement_salary'),
                'financial'=>trans('admin.financial'),
                'financial_salary'=>trans('admin.financial_salary'),
                'financial_information'=>trans('admin.financial_information'),
                'financial_information_salary'=>trans('admin.financial_information_salary'),
                'insurance'=>trans('admin.insurance'),
                'insurance_salary'=>trans('admin.insurance_salary'),
                ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $order = self::step2();
            $user  = auth()->user();
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

            $order->status                           = 'panding';
            $order->save();
            session()->flash('success',trans('main.step3_is_updated'));
            return redirect('step/2');
        }
     }elseif($id == 3){
        $order3 = Order3::where('user_id',auth()->user()->id)->where('status','=',null)->get();
        foreach($order3 as $file)
        {
            $f = Order3::find($file->id);
            $f->status = 'panding';
            $f->save();
        }
            session()->flash('success',trans('main.file_saved'));
            return redirect('step/3');
     }else{
        return redirect('/');
     }


    }

    public function upload_pdf(Request $r)
    {
        $rules = ['pdf'=>'required|mimes:pdf'];
        $Validator = Validator::make($r->all(),$rules);
        $Validator->SetAttributeNames(['pdf'=>trans('admin.pdf')]);
        if($Validator->fails())
        {
            return response()->json(['status'=>'error','message'=>trans('main.error_file_type')]);
        }else{
            $order3 = new Order3;
            $order3->user_id   = auth()->user()->id;
            $order3->pdf_files = Upload::upload($r->file('pdf'),'/pdf/users/'.auth()->user()->id,'icon',0,'','no');
            $order3->pdf_name  = $r->file('pdf')->getClientOriginalName();
            $order3->save();
            $data = view(app('tmp').'.user.step.filepdf',['data'=>$order3])->render();
            return response()->json(['status'=>'success','data'=>$data]);
        }
    }

    public function removefile(Request $r)
    {
        if($r->has('fid'))
        {
            $order3 = Order3::find($r->input('fid'));
            if(!empty($order3) and $order3->user_id == auth()->user()->id)
            {
                @unlink('upload'.$order3->pdf_files);
                $order3->delete();
            }
        }
    }

    public function downloadpdf($id)
    {
        $pdf = PDF::find($id);
        $order = self::step2();
        if(in_array($pdf->id, explode(',',$order->file_pdf_download)))
        {

        $filename = base_path('upload/'.$pdf->pdf); // of course find the exact filename....        
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private', false); // required for certain browsers 
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="'. basename($pdf->title.'.pdf') . '";');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
        }else{
        return redirect('/');            
        }

    }
    

    public static function step1()
    {
        $order1 = auth()->user()->step1()->first();
        if(empty($order1))
        {
            $addorder = new Order;
            $addorder->user_id = auth()->user()->id;
            $addorder->save();
            return $addorder;
        }else{
            return $order1;
        }
    }


    public static function step2()
    {
        $order1 = auth()->user()->step2()->first();
        if(empty($order1))
        {
            $addorder = new Order2;
            $addorder->user_id = auth()->user()->id;
            $addorder->save();
            return $addorder;
        }else{
            return $order1;
        }
    }

   
}

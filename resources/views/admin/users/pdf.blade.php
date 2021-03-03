 <?php 
  $step1 = $user->step1()->first();
  $step2 = $user->step2()->first(); 
 ?>

    <h1>{{Set::set()->sitename}}  </h1>
     <p><small dir="ltr">{{url('/')}}</small></p>
    <h1>بيانات المستفيد : {{$user->name}}</h1>
 <table cellpadding="5" cellspacing="1" border="1" dir="rtl">
   <tr>
     <td>رقم الملف</td>
     <td><span>{{$step1->user_id}}</span></td>
     <td>{{trans('admin.name')}}</td>
     <td>{{$step1->name}}</td>
   </tr>
   <tr>
     <td>{{trans('admin.id_card')}}</td>
     <td><span>{{$step1->id_card}}</span></td>
     <td>{{trans('admin.birth')}}</td>
     <td><span>{{ $step1->birth }}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.gender')}}</td>
     <td><span>{{trans('admin.'.$step1->gender)}}</span></td>
     <td>{{trans('admin.age')}}</td>
     <td><span>{{$step1->age}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.num_of_family')}}</td>
     <td><span>{{$step1->num_of_family}}</span></td>
     <td>{{trans('admin.handicapped')}}</td>
     <td><span>{{trans('admin.'.$step1->handicapped)}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.handicapped_num')}}</td>
     <td><span>{{$step1->handicapped_num}}</span></td>
     <td>{{trans('admin.sick')}}</td>
     <td><span>{{trans('admin.'.$step1->sick)}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.sick_num')}}</td>
     <td><span>{{$step1->sick_num}}</span></td>
     <td>{{trans('admin.social_status')}}</td>
     <td><span>{{trans('admin.'.$step1->social_status)}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.pension_insurance')}}</td>
     <td><span>{{trans('admin.'.$step1->pension_insurance)}}</span></td>
     <td>{{trans('admin.salary')}}</td>
     <td><span>{{$step1->salary}}</span></td>
   </tr><tr>
     <td>{{trans('admin.have_job')}}</td>
     <td><span>{{trans('admin.'.$step1->have_job)}}</span></td>
     <td>{{trans('admin.title_job')}}</td>
     <td>  <span>{{$step1->title_job}}</span></td>
   </tr>
    <tr>
     <td>{{trans('admin.ensure_monthly')}}</td>
     <td><span>{{$step1->ensure_monthly}}</span></td>
     <td>{{trans('admin.yearly_guarantee')}}</td>
     <td><span>{{$step1->yearly_guarantee}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.finance_climate')}}</td>
     <td><span>{{trans('admin.'.$step1->finance_climate)}}</span></td>
     <td>{{trans('admin.finance_climate_salary')}}</td>
     <td><span>{{$step1->finance_climate_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.other_income')}}</td>
     <td><span>{{trans('admin.'.$step1->other_income)}}</span></td>
     <td>{{trans('admin.type_income')}}</td>
     <td><span>{{$step1->type_income}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.type_salary')}}</td>
     <td colspan="3"><span>{{$step1->type_salary}}</span></td>
   </tr>
    <tr>
     <td>{{trans('admin.transport')}}</td>
     <td> <span>{{trans('admin.'.$step1->transport)}}</span></td>
     <td>{{trans('admin.transport_salary')}}</td>
     <td> <span>{{$step1->transport_salary}}</span></td>
   </tr>
    <tr>
     <td>{{trans('admin.sheep')}}</td>
     <td><span>{{trans('admin.'.$step1->sheep)}}</span></td>
     <td>{{trans('admin.sheep_salary')}}</td>
     <td> <span>{{$step1->sheep_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.camel')}}</td>
     <td> <span>{{trans('admin.'.$step1->camel)}}</span></td>
     <td>{{trans('admin.camel_salary')}}</td>
     <td><span>{{$step1->camel_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.farm')}}</td>
     <td><span>{{trans('admin.'.$step1->farm)}}</span></td>
     <td>{{trans('admin.farm_salary')}}</td>
     <td> <span>{{$step1->farm_salary}}</span></td>
   </tr>
    <tr>
     <td>{{trans('admin.home_property')}}</td>
     <td><span>{{trans('admin.'.$step1->home_property)}}</span></td>
     <td>{{trans('admin.home_salary')}}</td>
     <td><span>{{$step1->home_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.employment')}}</td>
     <td><span>{{trans('admin.'.$step1->employment)}}</span></td>
     <td>{{trans('admin.employment_salary')}}</td>
     <td><span>{{$step1->employment_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.forestry')}}</td>
     <td><span>{{trans('admin.'.$step1->forestry)}}</span></td>
     <td>{{trans('admin.forestry_salary')}}</td>
     <td><span>{{$step1->forestry_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.basta')}}</td>
     <td> <span>{{trans('admin.'.$step1->basta)}}</span> </td>
     <td>{{trans('admin.basta_salary')}}</td>
     <td><span>{{$step1->basta_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.corporation')}}</td>
     <td><span>{{trans('admin.'.$step1->corporation)}}</span></td>
     <td>{{trans('admin.corporation_salary')}}</td>
     <td><span>{{$step1->corporation_salary}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.total_salary')}}</td>
     <td><span>{{$step1->total_salary}}</span></td>
     <td>{{trans('admin.balance')}}</td>
     <td>{{
                      number_format(
                        $step1->finance_climate_salary + 
                        $step1->salary + 
                        $step1->type_salary + 
                        $step1->sheep_salary + 
                        $step1->transport_salary + 
                        $step1->farm_salary + 
                        $step1->camel_salary + 
                        $step1->forestry_salary + 
                        $step1->employment_salary + 
                        $step1->basta_salary + 
                        $step1->corporation_salary / $step1->num_of_family)

                      }}</td>
   </tr>
   <tr>
     <td>{{trans('admin.details')}}</td>
     <td colspan="3"><span>{{$step1->details}}</span></td>
   
   </tr>
 </table>    
                
                

<br /><br />




 <h1>{{Set::set()->sitename}}  </h1>
     <p><small dir="ltr">{{url('/')}}</small></p>
    <h1>السكن / المالية : {{$user->name}}</h1>
 <table cellpadding="5" cellspacing="1" border="1" dir="rtl">
   <tr>
     <td>{{trans('admin.housing_type')}}</td>
     <td><span>{{trans('admin.'.$step2->housing_type)}}</span></td>
     <td>{{trans('admin.housing_text')}}</td>
     <td>{{$step2->housing_text}}</td>
   </tr>
   <tr>
     <td>{{trans('admin.employer')}}</td>
     <td> <span>{{$step2->employer}}</span></td>
     <td>{{trans('admin.home_no')}}</td>
     <td> <span>{{$step2->home_no}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.employer_name')}}</td>
     <td><span>{{$step2->employer_name}}</span></td>
     <td>{{trans('admin.mobile1')}}</td>
     <td><span>{{$step2->mobile1}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.mobile2')}}</td>
     <td> <span>{{$step2->mobile2}}</span></td>
     <td>{{trans('admin.mobile3')}}</td>
     <td><span> {{$step2->mobile3}}</span></td>
   </tr>
   <tr>
     <td colspan="2">{{trans('admin.mobile4')}}</td>
     <td colspan="2"><span>{{$step2->mobile4}}</span></td>
   </tr>
   <tr>
     <td>{{trans('admin.financial_information')}}</td>
     <td><span>{{trans('admin.'.$step2->financial_information)}}</span></td>
     <td>{{ trans('admin.financial_information_salary') }} </td>
     <td><span>{{$step2->financial_information_salary}}</span></td>
   </tr>
   <tr>
     <td>{{ trans('admin.insurance_salary') }} </td>
     <td><span>{{$step2->insurance_salary}}</span></td>
     <td>{{trans('admin.insurance')}}</td>
     <td> <span>{{trans('admin.'.$step2->insurance)}}</span></td>
   </tr>

   <tr>
   <td>{{trans('admin.monthly')}}</td>
   <td><span>{{trans('admin.'.$step2->monthly)}}</span></td>
   <td>{{ trans('admin.monthly_salary') }} </td>
   <td><span>{{$step2->monthly_salary}}</span></td>
   </tr>
   <tr>
   <td>{{trans('admin.retirement')}}</td>
   <td><span>{{trans('admin.'.$step2->retirement)}}</span></td>
   <td>{{ trans('admin.retirement_salary') }} </td>
   <td><span>{{$step2->retirement_salary}}</span></td>
   </tr>
   <tr>
   <td>{{trans('admin.financial')}}</td>
   <td><span>{{trans('admin.'.$step2->financial)}}</span></td>
   <td>{{ trans('admin.financial_salary') }} </td>
   <td><span>{{$step2->financial_salary}}</span></td>
   </tr>
 
   <tr>
     <td>{{trans('admin.total')}}</td>
     <td><span>{{$step2->total}}</span></td>
     <td>{{trans('admin.balance')}}</td>
     <td> <span>{{$step2->balance}}</span> </td>
   </tr>
  
 </table>  
 <table cellpadding="5" cellspacing="1" border="1" dir="rtl">
    <tr>
     <td>{{trans('admin.formspdf')}}</td>
     <td>المرفقات</td>
    </tr>
   <tr>
     <td>
       <ol>
   @foreach(App\FormPdf::all() as $pdf)
              <li class="col-md-4">
                   
                   <input type="checkbox" name="file_pdf_download[]" @if(in_array($pdf->id, explode(',',$step2->file_pdf_download))) checked @endif value="{{$pdf->id}}">
                    {{ $pdf->title }}
              </li>
    @endforeach
   </ol>
   </td>
   <td>
    <ol>
    @foreach($user->step3()->get() as $file)
            <li>
        <a href="{{url(app('aurl').'/downloadpdf/'.$file->id)}}"> <i class="fa fa-download fa-2x"></i> {{$file->pdf_name}} </a> 
            </li>
    @endforeach
    </ol>
     </td>
   </tr>
 </table>
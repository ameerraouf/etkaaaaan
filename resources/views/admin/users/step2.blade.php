 <?php $edit = $user->step2()->first(); ?>
 

 
<div class="stepsuser">
<div class="step1content">
          <h1>السكن / المالية</h1>
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.housing_type')}}</label>
                  <div class="col-sm-8">
                     <h4>{{trans('admin.'.$edit->housing_type)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.housing_text')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$edit->housing_text}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->employer}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.home_no')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->home_no}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer_name')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->employer_name}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile1')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->mobile1}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile2')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->mobile2}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile3')}} </label>
                  <div class="col-sm-8">
                   <h4> {{$edit->mobile3}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile4')}} </label>
                  <div class="col-sm-8">
                    <h4>{{$edit->mobile4}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->


              <div class="clearfix"></div>
              
          

             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.financial_information')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$edit->financial_information)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label"> 
                     {{ trans('admin.financial_information_salary') }} 
                    </label>
                    <div class="col-sm-8">
                      <h4>{{$edit->financial_information_salary}}</h4>
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.insurance')}}</label>
                  <div class="col-sm-8">
                     <h4>{{trans('admin.'.$edit->insurance)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label"> 
                     {{ trans('admin.insurance_salary') }} 
                    </label>
                    <div class="col-sm-8">
                    <h4>{{$edit->insurance_salary}}</h4>
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
   

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.total')}} </label>
                  <div class="col-sm-8">
                     <h4>{{$edit->total}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.balance')}} </label>
                  <div class="col-sm-8">
                     <h4>{{$edit->balance}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->


               <div class="clearfix"></div>

              


              </div>






               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('admin.monthly')}}</label>
                    <div class="col-sm-8">
                     <h4>{{trans('admin.'.$edit->monthly)}}</h4>
                    </div><!-- end col-sm-8 -->
                  </div><!-- end form-group -->
                </div><!-- end col-lg-6 -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                      <label class="col-sm-4 control-label"> 
                       {{ trans('admin.monthly_salary') }} 
                      </label>
                      <div class="col-sm-8">
                      <h4>{{$edit->monthly_salary}}</h4>
                      </div><!-- end col-sm-8 -->
                  </div><!-- end form-group -->
                </div><!-- end col-lg-6 -->

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.retirement')}}</label>
                  <div class="col-sm-8">
                     <h4>{{trans('admin.'.$edit->retirement)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label"> 
                     {{ trans('admin.retirement_salary') }} 
                    </label>
                    <div class="col-sm-8">
                     <h4>{{$edit->retirement_salary}}</h4>
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.financial')}}</label>
                  <div class="col-sm-8">
                      <h4>{{trans('admin.'.$edit->financial)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label"> 
                     {{ trans('admin.financial_salary') }} 
                    </label>
                    <div class="col-sm-8">
                    <h4>{{$edit->financial_salary}}</h4>
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              </div>

 
               
              <div class="clearfix"></div>
            </div><!-- end row -->
            <hr>
              <center><h1>{{trans('admin.formspdf')}}</h1></center>
              @foreach(App\FormPdf::all() as $pdf)
              <div class="col-md-4">
                 <label>  
                   <input type="checkbox" name="file_pdf_download[]" @if(in_array($pdf->id, explode(',',$edit->file_pdf_download))) checked @endif value="{{$pdf->id}}">
                    {{ $pdf->title }}
                 </label> 
              </div>
              @endforeach
              <div class="clearfix"></div>
              <hr />
              <div class="clearfix"></div>
            
    

              <center><h1>المرفقات</h1></center>
         @foreach($user->step3()->get() as $file)
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <a href="{{url(app('aurl').'/downloadpdf/'.$file->id)}}"> <i class="fa fa-download fa-2x"></i> {{$file->pdf_name}} </a> 
            </div>
         @endforeach
        
           <div class="clearfix"></div>

     
           <div class="clearfix"></div>

         </div>
         </div>



  

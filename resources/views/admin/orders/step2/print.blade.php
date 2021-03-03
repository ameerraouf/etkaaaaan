<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue" id="printarea">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> {{ $title }}
			</div>
		</div>
	<div class="portlet-body form">



<div class="stepsuser">
<div class="step1content">
          <div class="alert alert-info" role="alert">هذه العلامة (<span>*</span>) تعني ان الحقل إجباري</div>
          <h1>السكن / المالية</h1>
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.housing_type')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('housing_type',[
                          'property'=>trans('admin.property'),
                          'rent'=>trans('admin.rent'),
                          'stood'=>trans('admin.stood'),
                          'mutual'=>trans('admin.mutual'),
                          ],$edit->housing_type,['class'=>'form-control housing_type']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.housing_text')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control housing_text" name="housing_text" value="{{$edit->housing_text}}" type="text" placeholder="{{trans('admin.housing_text')}}" />
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->employer}}" name="employer" type="text" placeholder="{{trans('admin.employer')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.home_no')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->home_no}}" name="home_no" type="text" placeholder="{{trans('admin.home_no')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer_name')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->employer_name}}" name="employer_name" type="text" placeholder="{{trans('admin.employer_name')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile1')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->mobile1}}" name="mobile1" type="text" placeholder="{{trans('admin.mobile1')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile2')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->mobile2}}" name="mobile2" type="text" placeholder="{{trans('admin.mobile2')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile3')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->mobile3}}" name="mobile3" type="text" placeholder="{{trans('admin.mobile3')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile4')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->mobile4}}" name="mobile4" type="text" placeholder="{{trans('admin.mobile4')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="clearfix"></div>

               <script>show_div('monthly','monthly_salaryy');</script>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('admin.monthly')}}</label>
                    <div class="col-sm-8">
                      {!! Form::select('monthly',[
                            'yes'=>trans('admin.yes'),
                            'no'=>trans('admin.no'),
                            ],$edit->monthly,['class'=>'form-control monthly']) !!}
                    </div><!-- end col-sm-8 -->
                  </div><!-- end form-group -->
                </div><!-- end col-lg-6 -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 monthly_salaryy">
                  <div class="form-group">
                      <label class="col-sm-4 control-label">
                       {{ trans('admin.monthly_salary') }}
                      </label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control monthly_salary"
                             value="{{$edit->monthly_salary}}"
                             name="monthly_salary"
                             placeholder="{{trans('admin.monthly_salary')}}" />
                      </div><!-- end col-sm-8 -->
                  </div><!-- end form-group -->
                </div><!-- end col-lg-6 -->

               <script>show_div('retirement','retirement_salaryy');</script>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.retirement')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('retirement',[
                          'no'=>trans('admin.no'),'yes'=>trans('admin.yes')
                          ],$edit->retirement,['class'=>'form-control retirement']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 retirement_salaryy">
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                     {{ trans('admin.retirement_salary') }}
                    </label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control retirement_salary"
                           value="{{$edit->retirement_salary}}"
                           name="retirement_salary"
                           placeholder="{{trans('admin.retirement_salary')}}" />
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

<script>show_div('financial','financial_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.financial')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('financial',[
                          'no'=>trans('admin.no'),'yes'=>trans('admin.yes')
                          ],$edit->financial,['class'=>'form-control financial']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 financial_salaryy">
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                     {{ trans('admin.financial_salary') }}
                    </label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control financial_salary"
                           value="{{$edit->financial_salary}}"
                           name="financial_salary"
                           placeholder="{{trans('admin.financial_salary')}}" />
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->


              </div>


              <script>show_div('financial_information','financial_information_salaryy');</script>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.financial_information')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('financial_information',[
                          'no'=>trans('admin.no'),'yes'=>trans('admin.yes')
                          ],$edit->financial_information,['class'=>'form-control financial_information']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 financial_information_salaryy">
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                     {{ trans('admin.financial_information_salary') }}
                    </label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control financial_information_salary"
                      value="{{$edit->financial_information_salary}}"
                      name="financial_information_salary" placeholder="{{trans('admin.financial_information_salary')}}" />
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
               <script>show_div('insurance','insurance_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.insurance')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('insurance',[
                          'no'=>trans('admin.no'),'yes'=>trans('admin.yes')
                          ],$edit->insurance,['class'=>'form-control insurance']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 insurance_salaryy">
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                     {{ trans('admin.insurance_salary') }}
                    </label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control insurance_salary"
                           value="{{$edit->insurance_salary}}"
                           name="insurance_salary"
                           placeholder="{{trans('admin.insurance_salary')}}" />
                    </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

               <div class="clearfix"></div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.balance')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control balance" disabled name="balance" value="0" type="text" placeholder="{{trans('admin.balance')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.total')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control total" value="0" disabled name="totall" type="text" placeholder="{{trans('admin.total')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->


              </div>


              <script>
              var classes = '.monthly_salary,.retirement_salary,.financial_salary,.financial_information_salary,.insurance_salary,.housing_text';
               $(document).on('keyup',classes,function(){
                var housing_type                  = $('.housing_type option:selected').val();
                var monthly_salary                = $('.monthly_salary').val();
                var retirement_salary             = $('.retirement_salary').val();
                var financial_salary              = $('.financial_salary').val();
                var financial_information_salary  = $('.financial_information_salary').val();
                var insurance_salary              = $('.insurance_salary').val();
                var housing_text                  = $('.housing_text').val();
                var num_of_family                 = {{$user->step1()->first()->num_of_family}};


                var final  =  Number(monthly_salary) + Number(retirement_salary) + Number(financial_salary) + Number(financial_information_salary) + Number(insurance_salary) + Number(housing_text);
                 if(housing_type == 'rent')
                 {
                  if(final.toFixed(2) > 416)
                  {
                  var  endfinal  = final.toFixed(2) - Number(416);
                  }else{
                  var endfinal = final;
                  }
                 } else {
                  var  endfinal  = final.toFixed(2);
                 }

                 $('.total').val(endfinal);
                  $('.balance').val(endfinal / Number(num_of_family));

               });

               $(document).on('change','.housing_type',function(){
                var housing_type                  = $('.housing_type option:selected').val();
                var monthly_salary                = $('.monthly_salary').val();
                var retirement_salary             = $('.retirement_salary').val();
                var financial_salary              = $('.financial_salary').val();
                var financial_information_salary  = $('.financial_information_salary').val();
                var insurance_salary              = $('.insurance_salary').val();
                var housing_text                  = $('.housing_text').val();
                var num_of_family                 = {{$user->step1()->first()->num_of_family}};


                var final  =  Number(monthly_salary) + Number(retirement_salary) + Number(financial_salary) + Number(financial_information_salary) + Number(insurance_salary) + Number(housing_text);
                 if(housing_type == 'rent')
                 {
                  if(final.toFixed(2) > 416)
                  {
                  var  endfinal  = final.toFixed(2) - Number(416);
                  }else{
                  var  endfinal  = 0;
                  }
                 } else {
                  var  endfinal  = final.toFixed(2);
                 }

                 $('.total').val(endfinal);
                 $('.balance').val(endfinal / Number(num_of_family));

               });

               $(document).ready(function(){
                var housing_type                  = $('.housing_type option:selected').val();
                var monthly_salary                = $('.monthly_salary').val();
                var retirement_salary             = $('.retirement_salary').val();
                var financial_salary              = $('.financial_salary').val();
                var financial_information_salary  = $('.financial_information_salary').val();
                var insurance_salary              = $('.insurance_salary').val();
                var housing_text                  = $('.housing_text').val();
                var num_of_family                 = {{$user->step1()->first()->num_of_family}};


                var final  =  Number(monthly_salary) + Number(retirement_salary) + Number(financial_salary) + Number(financial_information_salary) + Number(insurance_salary) + Number(housing_text);
                 if(housing_type == 'rent')
                 {
                  if(final.toFixed(2) > 416)
                  {
                  var  endfinal  = final.toFixed(2) - Number(416);
                  }else{
                  var  endfinal  = 0;
                  }
                 } else {
                  var  endfinal  = final.toFixed(2);
                 }

                 $('.total').val(endfinal);
                 $('.balance').val(endfinal / Number(num_of_family));
               });

              </script>


              <div class="clearfix"></div>
              <br />
              <script>
              	$(document).on('change','.status',function(){
              		var status = $('.status option:selected').val();
              		if(status == 'refused')
              		{
              			$('.refused_reason').removeClass('hidden');
              			$('.notifcation').addClass('hidden');
              		}else if(status == 'accept'){
              			$('.refused_reason').addClass('hidden');
              			$('.notifcation').removeClass('hidden');
              		}else{
              			$('.refused_reason').addClass('hidden');
              			$('.notifcation').addClass('hidden');
              		}
              	});
              </script>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	              <div class="form-group">
	                  <label class="col-sm-4 control-label">{{trans('admin.status')}}</label>
	                  <div class="col-sm-8">
	                   {!! Form::select('status',['panding'=>trans('admin.panding'),'accept'=>trans('admin.accept'),'refused'=>trans('admin.refused')],$edit->status,['class'=>'form-control status']) !!}
	                  </div><!-- end col-sm-8 -->
	                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="form-group notifcation @if($edit->status != 'accept') hidden @endif">
                 <label>
                 	<input type="checkbox" name="send_alarm" value="1">
                 	{{trans('admin.send_alarm')}}
                 </label>
                </div>
                <div class="form-group refused_reason @if($edit->status != 'refused') hidden @endif">
                  <label class="col-sm-2 control-label">{{trans('admin.refused_reason')}}</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="refused_reason" rows="10" placeholder="{{trans('admin.refused_reason')}} ....">{{$edit->refused_reason}}</textarea>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->


              <div class="clearfix"></div>
            </div><!-- end row -->
            <hr>
              <center><h1>{{trans('admin.formspdf')}}</h1></center>
              @foreach(App\FormPDF::all() as $pdf)
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


            <div class="clearfix"></div>
         </div>



		</div>
  </div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->


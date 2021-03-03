@extends(app('tmp').'.index')
@section('theme')

     <div class="stepsuser">

        <div class="stepsitems">
          <ul>
            <li class="active">
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                  <span>بيانات المستفيد</span>
                </a>
              </li>
              <li class="active">
                <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>حالة الطلب</span>
              </a>
            </li>
            <li class="active">
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>السكن/المالية</span>
              </a>
            </li>
            <li @if($order->status != null) class="active" @endif>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>مراجعى الطلب</span>
              </a>
            </li>
            <li>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>تحميل الملفات</span>
              </a>
            </li>
            <li>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>نهاية الطلب</span>
              </a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div><!-- end stepsitems -->

        @if($order->status != null || $order->status != 'refused')
          @include(app('tmp').'.user.step.step4')
        @endif
        {!! Form::open(['class'=>'form-horizontal'], ['url'=>'step/2']) !!}

<input type="hidden" name="balance" class="balance" />
<input type="hidden" name="total" class="total" />

<div class="step1content @if(!empty($order->status) and $order->status != 'refused') hidden @endif">
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
                          ],old('housing_type'),['class'=>'form-control housing_type']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.housing_text')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control housing_text" name="housing_text" value="{{old('housing_text')}}" type="text" placeholder="{{trans('admin.housing_text')}}" />
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('employer')}}" name="employer" type="text" placeholder="{{trans('admin.employer')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.home_no')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('home_no')}}" name="home_no" type="text" placeholder="{{trans('admin.home_no')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employer_name')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('employer_name')}}" name="employer_name" type="text" placeholder="{{trans('admin.employer_name')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile1')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('mobile1')}}" name="mobile1" type="text" placeholder="{{trans('admin.mobile1')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile2')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('mobile2')}}" name="mobile2" type="text" placeholder="{{trans('admin.mobile2')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile3')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('mobile3')}}" name="mobile3" type="text" placeholder="{{trans('admin.mobile3')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.mobile4')}} </label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('mobile4')}}" name="mobile4" type="text" placeholder="{{trans('admin.mobile4')}}">
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
                            ],old('monthly'),['class'=>'form-control monthly']) !!}
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
                             value="{{old('monthly_salary')}}" 
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
                          ],old('retirement'),['class'=>'form-control retirement']) !!}
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
                           value="{{old('retirement_salary')}}" 
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
                          ],old('financial'),['class'=>'form-control financial']) !!}
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
                           value="{{old('financial_salary')}}" 
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
                          ],old('financial_information'),['class'=>'form-control financial_information']) !!}
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
                      value="{{old('financial_information_salary')}}" 
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
                          ],old('insurance'),['class'=>'form-control insurance']) !!}
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
                           value="{{old('insurance_salary')}}" 
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
                var num_of_family                 = {{auth()->user()->step1()->first()->num_of_family}};
               

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
                var num_of_family                 = {{auth()->user()->step1()->first()->num_of_family}};
               

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
                
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="accept_info" value="1"> <a href="{{url('page/2')}}">التعهد بصحة المعلومات</a>
                    </label>
                  </div><!-- end checkbox -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->

              <div class="clearfix"></div>
              <br />
              
              <div class="clearfix"></div>
            </div><!-- end row -->
            <hr>
            <div class="pull-right">
            <button type="submit">{{trans('admin.save')}} 
              <i class="fa fa-save" aria-hidden="true"></i>
              </button></div>

            <div class="clearfix"></div>
          </form>
        </div>
 
 
      {!! Form::close() !!}

      </div><!-- end stepsuser -->

@stop
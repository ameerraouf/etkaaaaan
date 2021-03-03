 <?php $step1 = $user->step1()->first(); ?>
<div class="stepsuser">
<div class="step1content">
          <h1>بيانات المستفيد</h1>
          <form action="#" class="form-horizontal">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">رقم الملف</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->user_id}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.name')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <h4>{{$step1->name}}</h4> 
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.id_card')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <h4>{{$step1->id_card}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.birth')}} <i>*</i></label>
                  <div class="col-sm-8">
 					           <h4>{{ $step1->birth }}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.gender')}} <i>*</i></label>
                  <div class="col-sm-8">
                   @if($step1->gender == 'male')
                    <h4>{{trans('admin.male')}}</h4>
                   @else 
                    <h4>{{trans('admin.female')}}</h4>
                   @endif
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.age')}} <i>*</i></label>
                  <div class="col-sm-8">
                     <h4>{{$step1->age}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.num_of_family')}} <i>*</i></label>
                  <div class="col-sm-8">
                   <h4>{{$step1->num_of_family}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.handicapped')}}</label>
                  <div class="col-sm-8">
                  @if($step1->handicapped == 'yes')
                    <h4>{{trans('admin.yes')}}</h4>
                   @else 
                    <h4>{{trans('admin.no')}}</h4>
                   @endif

                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.handicapped_num')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->handicapped_num}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->

              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sick')}}</label>
                  <div class="col-sm-8">
                  @if($step1->sick == 'yes')
                    <h4>{{trans('admin.yes')}}</h4>
                   @else 
                    <h4>{{trans('admin.no')}}</h4>
                   @endif
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sick_num')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->sick_num}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.social_status')}}</label>
                  <div class="col-sm-8">
                    <h4>{{trans('admin.'.$step1->social_status)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.pension_insurance')}}</label>
                  <div class="col-sm-8">
                    <h4>{{trans('admin.'.$step1->pension_insurance)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.have_job')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->have_job)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.title_job')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->title_job}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.ensure_monthly')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->ensure_monthly}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.yearly_guarantee')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->yearly_guarantee}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate')}}</label>
                  <div class="col-sm-8">
                  <h4>{{trans('admin.'.$step1->finance_climate)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate_salary')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->finance_climate_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.other_income')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->other_income)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.type_income')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->type_income}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.type_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->type_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.transport')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->transport}}</h4>
                  </div><!-- end col-sm-8 -->
                  <div class="clearfix"></div>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.transport_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->transport_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep')}}</label>
                  <div class="col-sm-8">
                  <h4>{{trans('admin.'.$step1->sheep)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->sheep_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.camel')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->camel)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.camel_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->camel_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.farm')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->farm)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.farm_salary')}}</label>
                  <div class="col-sm-8">
                     <h4>{{$step1->farm_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.home_property')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->home_property)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.home_salary')}}</label>
                  <div class="col-sm-8">
                  <h4>{{$step1->home_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employment')}}</label>
                  <div class="col-sm-8">
                  <h4>{{trans('admin.'.$step1->employment)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employment_salary')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->employment_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->forestry)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry_salary')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->forestry_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.basta')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->basta)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.basta_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->basta_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.corporation')}}</label>
                  <div class="col-sm-8">
                   <h4>{{trans('admin.'.$step1->corporation)}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.corporation_salary')}}</label>
                  <div class="col-sm-8">
                   <h4>{{$step1->corporation_salary}}</h4>
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{trans('admin.details')}}</label>
                  <div class="col-sm-10">
                    <h4>{{$step1->details}}</h4>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->

              <div class="clearfix"></div>
              <br />

              <script>
               
               $(document).ready(function(){
                var num_of_family                     = {{$step1->num_of_family}};
                var finance_climate_salary            = {{$step1->finance_climate_salary}}; 
                var salary                            = {{$step1->salary}};
                var type_salary                       = {{$step1->type_salary}};
                var sheep_salary                      = {{$step1->sheep_salary}};
                var transport_salary                  = {{$step1->transport_salary}};
                var farm_salary                       = {{$step1->farm_salary}};
                var camel_salary                      = {{$step1->camel_salary}};
                var forestry_salary                   = {{$step1->forestry_salary}};
                var employment_salary                 = {{$step1->employment_salary}};
                var basta_salary                      = {{$step1->basta_salary}};
                var corporation_salary                = {{$step1->corporation_salary}};

                var final  =  Number(type_salary) + Number(salary) + Number(corporation_salary) + Number(basta_salary) + Number(employment_salary) + Number(forestry_salary) + Number(camel_salary) + Number(farm_salary) + Number(transport_salary) + Number(sheep_salary) + Number(finance_climate_salary);
                
                
                 $('.balance').text(final.toFixed(2) / Number(num_of_family));

               }); 

              </script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.total_salary')}}</label>
                  <div class="col-sm-8">
                    <h4>{{$step1->total_salary}}</h4>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.balance')}}</label>
                  <div class="col-sm-8 ">
                    <h4 class="balance"></h4>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
              <?php 
              /*
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
                $(document).ready(function(){
                  if('{{$step1->status}}' == 'refused')
                  {
                    
                  }
                });
              </script>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('admin.status')}}</label>
                    <div class="col-sm-8">
                     <h4>{{trans('admin.'.$step1->status)}}</h4>
             
                    </div><!-- end col-sm-8 -->
                  </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="form-group refused_reason @if($step1->status != 'refused') hidden @endif">
                  <label class="col-sm-2 control-label">{{trans('admin.refused_reason')}}</label>
                  <div class="col-sm-10">
                    <h4>{{$step1->refused_reason}}</h4>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
              */
          ?>
              <div class="clearfix"></div>
            </div><!-- end row -->
            

            <div class="clearfix"></div>
        
        </div>
 
 

		</div>

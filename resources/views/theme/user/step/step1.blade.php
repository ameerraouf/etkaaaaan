@extends(app('tmp').'.index')
@section('theme')


    
       <div class="stepsuser">
        <div class="stepsitems">
          <ul>
            <li @if($order->status == null || $order->status == 'refused' || $order->status == 'panding'  || $order->status == 'accept') class="active" @endif  >
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                  <span>بيانات المستفيد</span>
                </a>
              </li>
              <li @if($order->status != null || $order->status == 'accept') class="active" @endif>
                <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>حالة الطلب</span>
              </a>
            </li>
            <li>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>السكن/المالية</span>
              </a>
            </li>
            <li>
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

       {!! Form::open(['class'=>'form-horizontal'], ['url'=>'step/1']) !!}
                     <input type="hidden" name="final" class="final">

       @if($order->status != null || $order->status != 'refused') 
       @include(app('tmp').'.user.step.step2')
       @endif

 <div class="step1content @if(!empty($order->status) and $order->status != 'refused') hidden @endif">
          <div class="alert alert-info" role="alert">هذه العلامة (<span>*</span>) تعني ان الحقل إجباري</div>
          <h1>بيانات المستفيد</h1>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">رقم الملف</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="disabledInput" type="text" placeholder="{{auth()->user()->id}}" disabled="">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.name')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <input class="form-control" name="name" value="{{auth()->user()->name}}" type="text" placeholder="{{trans('admin.name')}}" />
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.id_card')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{old('id_card')}}" name="id_card" type="text" placeholder="{{trans('admin.id_card')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.birth')}} <i>*</i></label>
  

                  <div class="col-sm-8" id="datepicker">
                  <div class="input-group" > 

                    <input type="text" name="birth" value="{{ old('birth') }}"  onclick="pickADate();" id="picked-text" placeholder="{{trans('admin.birth')}}" class="form-control">
                    <span id="birthings"></span>
                    <div class="input-group-addon">
                        <span class="fa fa-calendar" id="pick-button" ></span>
                    </div>
                  </div>
                  </div><!-- end col-sm-8 -->


<link rel="stylesheet" href="https://ZulNs.github.io/libs/calendar.css"/>
 
<script type="text/javascript" src="{{url('style')}}/js/calendar.js"></script>
<script type="text/javascript" src="{{url('style')}}/js/hijri-date.js"></script>

<script type="text/javascript">
    var pickedTxt = document.getElementById('picked-text'),
        pickBtn = document.getElementById('pick-button'),
        datepicker = new Calendar(true, 0, true, false),
        datepickerMode = datepicker.isHijriMode();

    document.getElementById('datepicker').appendChild(datepicker.getElement());
    datepicker.getElement().style.marginTop = '10px';

    datepicker.callback = function() {
        pickedTxt.value = datepicker.getDate().getFullYear()+'/'+datepicker.getDate().getMonth()+'/'+datepicker.getDate().getDate();
        pickedTxt.selectionStart = 0;
        pickedTxt.selectionEnd = pickedTxt.value.length;
        pickedTxt.focus();
    };

    datepicker.onHide = function() {
        pickBtn.style.display = 'inline-block';
    };

    function pickADate() {
        datepicker.show();
    }
</script>

                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.gender')}} <i>*</i></label>
                  <div class="col-sm-8">
                    {!! Form::select('gender',['male'=>trans('admin.male'),'female'=>trans('admin.female')],old('gender'),['class'=>'form-control']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.age')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{old('age')}}" name="age">
                      <a class="plus" href="javascript:void(0)">+</a>
                    </div><!-- end inputnumber -->
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.num_of_family')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty num_of_family" value="{{old('num_of_family')}}" name="num_of_family">
                      <a class="plus" href="javascript:void(0)">+</a>
                    </div><!-- end inputnumber -->
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('handicapped','handicapped_num_div');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.handicapped')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('handicapped',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('handicapped'),['class'=>'form-control handicapped']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group handicapped_num_div">
                  <label class="col-sm-4 control-label">{{trans('admin.handicapped_num')}}</label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{old('handicapped_num')}}" name="handicapped_num">
                      <a class="plus" href="javascript:void(0)">+</a>
                    </div><!-- end inputnumber -->
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->

              </div><!-- end col-lg-6 -->
              <script>show_div('sick','sick_num');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sick')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('sick',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('sick'),['class'=>'form-control sick']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group sick_num">
                  <label class="col-sm-4 control-label">{{trans('admin.sick_num')}}</label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{old('sick_num')}}" name="sick_num">
                      <a class="plus" href="javascript:void(0)">+</a>
                    </div><!-- end inputnumber -->
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.social_status')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('social_status',[
                      'male_married'=>trans('admin.male_married'),
                      'male_unmarried'=>trans('admin.male_unmarried'),
                      'male_widowed'=>trans('admin.male_widowed'),
                      'female_married'=>trans('admin.female_married'),
                      'female_unmarried'=>trans('admin.female_unmarried'),
                      'female_widowed'=>trans('admin.female_widowed'),
                      ],old('social_status'),['class'=>'form-control']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.pension_insurance')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('pension_insurance',['pension'=>trans('admin.pension'),'insurance'=>trans('admin.insurance'),'no'=>trans('admin.no')],old('pension_insurance'),['class'=>'form-control']) !!}

                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control salary" name="salary" value="{{old('salary')}}" type="text" placeholder="{{trans('admin.salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('have_job','title_job');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.have_job')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('have_job',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('have_job'),['class'=>'form-control have_job']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group title_job">
                  <label class="col-sm-4 control-label">{{trans('admin.title_job')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="title_job" value="{{old('title_job')}}" type="text" placeholder="{{trans('admin.title_job')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group ensure_monthly">
                  <label class="col-sm-4 control-label">{{trans('admin.ensure_monthly')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="ensure_monthly" value="{{old('ensure_monthly')}}" type="text" placeholder="{{trans('admin.ensure_monthly')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.yearly_guarantee')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="yearly_guarantee" value="{{old('yearly_guarantee')}}" type="text" placeholder="{{trans('admin.yearly_guarantee')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
               <script>show_div('finance_climate','finance_climate_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('finance_climate',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('finance_climate'),['class'=>'form-control finance_climate']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group finance_climate_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control finance_climate_salary" name="finance_climate_salary" value="{{old('finance_climate_salary')}}" type="text" placeholder="{{trans('admin.finance_climate_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('other_income','type_income,.type_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.other_income')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('other_income',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('other_income'),['class'=>'form-control other_income']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group type_income">
                  <label class="col-sm-4 control-label">{{trans('admin.type_income')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="type_income" value="{{old('type_income')}}"  type="text" placeholder="{{trans('admin.type_income')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group type_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.type_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control type_salary" name="type_salary" value="{{old('type_salary')}}" type="text" placeholder="{{trans('admin.type_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>
              var classes = '.finance_climate_salary,.salary,.type_salary,.sheep_salary,.transport_salary,.farm_salary,.camel_salary,.forestry_salary,.employment_salary,.basta_salary,.corporation_salary';
               $(document).on('keyup',classes,function(){
                var num_of_family                     = $('.num_of_family').val();
                var finance_climate_salary            = $('.finance_climate_salary').val();
                var salary                            = $('.salary').val();
                var type_salary                       = $('.type_salary').val();
                var sheep_salary                      = $('.sheep_salary').val();
                var transport_salary                  = $('.transport_salary').val();
                var farm_salary                       = $('.farm_salary').val();
                var camel_salary                      = $('.camel_salary').val();
                var forestry_salary                   = $('.forestry_salary').val();
                var employment_salary                 = $('.employment_salary').val();
                var basta_salary                      = $('.basta_salary').val();
                var corporation_salary                = $('.corporation_salary').val();

                var final  =  Number(type_salary) + Number(salary) + Number(corporation_salary) + Number(basta_salary) + Number(employment_salary) + Number(forestry_salary) + Number(camel_salary) + Number(farm_salary) + Number(transport_salary) + Number(sheep_salary) + Number(finance_climate_salary);
                
                 $('.total_salary').val(final.toFixed(2));
                 $('.final').val(final.toFixed(2));
               //  alert(num_of_family);
               @if($order->status == null)
                if(num_of_family == '' || num_of_family == null)
                {
                    alert('قم بتحديد عدد افراد الاسرة');
                }
               @endif  
                 $('.balance').val(final.toFixed(2) / Number(num_of_family));
               });

 
               $(document).ready(function(){
                var num_of_family                     = $('.num_of_family').val();
                var finance_climate_salary            = $('.finance_climate_salary').val();
                var salary                            = $('.salary').val();
                var type_salary                       = $('.type_salary').val();
                var sheep_salary                      = $('.sheep_salary').val();
                var transport_salary                  = $('.transport_salary').val();
                var farm_salary                       = $('.farm_salary').val();
                var camel_salary                      = $('.camel_salary').val();
                var forestry_salary                   = $('.forestry_salary').val();
                var employment_salary                 = $('.employment_salary').val();
                var basta_salary                      = $('.basta_salary').val();
                var corporation_salary                = $('.corporation_salary').val();

                var final  =  Number(type_salary) + Number(salary) + Number(corporation_salary) + Number(basta_salary) + Number(employment_salary) + Number(forestry_salary) + Number(camel_salary) + Number(farm_salary) + Number(transport_salary) + Number(sheep_salary) + Number(finance_climate_salary);
                  
                 $('.total_salary').val(final.toFixed(2));
                 $('.final').val(final.toFixed(2));
                 $('.balance').val(final.toFixed(2) / Number(num_of_family));

               }); 

              </script>
             

              <script>show_div('transport','transport_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.transport')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('transport',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('transport'),['class'=>'form-control transport']) !!}
                  </div><!-- end col-sm-8 -->
                  <div class="clearfix"></div>
                </div><!-- end form-group -->  
                <div class="form-group transport_salary"> 
                  <label class="col-sm-4 control-label">{{trans('admin.transport_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control transport_salary" type="text" value="{{old('transport_salary')}}" name="transport_salary" placeholder="{{trans('admin.transport_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
               <script>show_div('sheep','sheep_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('sheep',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('sheep'),['class'=>'form-control sheep']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group sheep_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control sheep_salary"  name="sheep_salary" value="{{old('sheep_salary')}}" type="text" placeholder="{{trans('admin.sheep_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('camel','camel_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.camel')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('camel',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('camel'),['class'=>'form-control camel']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group camel_salaryy"> 
                  <label class="col-sm-4 control-label">{{trans('admin.camel_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control camel_salary" name="camel_salary" value="{{old('camel_salary')}}" type="text" placeholder="{{trans('admin.camel_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('farm','farm_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.farm')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('farm',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('farm'),['class'=>'form-control farm']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group farm_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.farm_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control farm_salary" name="farm_salary" value="{{old('farm_salary')}}" type="text" placeholder="{{trans('admin.farm_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('home_property','home_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group home_property">
                  <label class="col-sm-4 control-label">{{trans('admin.home_property')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('home_property',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('home_property'),['class'=>'form-control home_property']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group home_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.home_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control home_salary" name="home_salary" value="{{old('home_salary')}}" type="text" placeholder="{{trans('admin.home_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('employment','employment_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employment')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('employment',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('employment'),['class'=>'form-control employment']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group employment_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.employment_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control employment_salary" name="employment_salary" value="{{old('employment_salary')}}" type="text" placeholder="{{trans('admin.employment_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group --> 
              </div><!-- end col-lg-6 -->
              <script>show_div('forestry','forestry_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('forestry',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('forestry'),['class'=>'form-control forestry']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group forestry_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control forestry_salary" name="forestry_salary" value="{{old('forestry_salary')}}" type="text" placeholder="{{trans('admin.forestry_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('basta','basta_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.basta')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('basta',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('basta'),['class'=>'form-control basta']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group basta_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.basta_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control basta_salary" name="basta_salary" value="{{old('basta_salary')}}" type="text" placeholder="{{trans('admin.basta_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('corporation','corporation_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.corporation')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('corporation',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],old('corporation'),['class'=>'form-control corporation']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group corporation_salary"> 
                  <label class="col-sm-4 control-label">{{trans('admin.corporation_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control corporation_salary" value="{{old('corporation_salary')}}" type="text" name="corporation_salary" placeholder="{{trans('admin.corporation_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{trans('admin.details')}}</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="details" rows="5" placeholder="{{trans('admin.details')}} ....">{{old('details')}}</textarea>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.total_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control total_salary" id="disabledInput" value="{{old('total_salary')}}" name="total_salary" type="text" placeholder="{{trans('admin.total_salary')}}" readonly>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{trans('admin.balance')}}</label>
                  <div class="col-sm-10">
                    <input class="form-control balance" id="disabledInput" value="{{old('balance')}}" name="balance" type="text" placeholder="{{trans('admin.balance')}}" readonly>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="accept_info" value="1"> <a href="{{url('page/2')}}" >التعهد بصحة المعلومات</a>
                    </label>
                  </div><!-- end checkbox -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->
 
              <div class="clearfix"></div>
            </div><!-- end row -->
            <hr>
            <div class="pull-left"><a href="#" class="nextstep">التالي <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>

            <div class="pull-right"><button type="submit">{{trans('admin.save')}} <i class="fa fa-save" aria-hidden="true"></i></button></div>

            <div class="clearfix"></div>
        
      {!! Form::close() !!}
        </div>
 
 

      </div><!-- end stepsuser -->
      
@stop
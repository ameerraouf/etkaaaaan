<style media="screen">
  #printarea{ display: none; }
</style>

<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue" id="printarea">

	<div class="portlet-body form">

{!! Form::open(['method'=>'put','url'=>app('aurl').'/orders/'.$edit->id]) !!}
<div class="stepsuser">
<div class="step1content">

          <h1>بيانات المستفيد</h1>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">رقم الملف</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="disabledInput" type="text" placeholder="{{$edit->user_id}}" disabled="">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.name')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <input class="form-control" name="name" value="" type="text" placeholder="{{trans('admin.name')}}" />
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.id_card')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <input class="form-control" value="{{$edit->id_card}}" name="id_card" type="text" placeholder="{{trans('admin.id_card')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.birth')}} <i>*</i></label>


                  <div class="col-sm-8" id="datepicker">
                  <div class="input-group" >

                    <input type="text" name="birth" value="{{ $edit->birth }}"  onclick="pickADate();" id="picked-text" placeholder="{{trans('admin.birth')}}" class="form-control">
                    <span id="birthings"></span>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th" id="pick-button" ></span>
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
                    {!! Form::select('gender',['male'=>trans('admin.male'),'female'=>trans('admin.female')],$edit->gender,['class'=>'form-control']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.age')}} <i>*</i></label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{$edit->age}}" name="age">
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
                      <input maxlength="12" class="input-text qty num_of_family" value="{{$edit->num_of_family}}" name="num_of_family">
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
                   {!! Form::select('handicapped',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->handicapped,['class'=>'form-control handicapped']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group handicapped_num_div">
                  <label class="col-sm-4 control-label">{{trans('admin.handicapped_num')}}</label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{$edit->handicapped_num}}" name="handicapped_num">
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
                   {!! Form::select('sick',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->sick,['class'=>'form-control sick']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group sick_num">
                  <label class="col-sm-4 control-label">{{trans('admin.sick_num')}}</label>
                  <div class="col-sm-8">
                    <div class="inputnumber">
                      <a class="minus" href="javascript:void(0)">-</a>
                      <input maxlength="12" class="input-text qty"  value="{{$edit->sick_num}}" name="sick_num">
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
                      ],$edit->social_status,['class'=>'form-control']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.pension_insurance')}}</label>
                  <div class="col-sm-8">
                    {!! Form::select('pension_insurance',['pension'=>trans('admin.pension'),'insurance'=>trans('admin.insurance'),'no'=>trans('admin.no')],$edit->pension_insurance,['class'=>'form-control']) !!}

                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control salary" name="salary" value="{{$edit->salary}}" type="text" placeholder="{{trans('admin.salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('have_job','title_job');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.have_job')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('have_job',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->have_job,['class'=>'form-control have_job']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group title_job">
                  <label class="col-sm-4 control-label">{{trans('admin.title_job')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="title_job" value="{{$edit->title_job}}" type="text" placeholder="{{trans('admin.title_job')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group ensure_monthly">
                  <label class="col-sm-4 control-label">{{trans('admin.ensure_monthly')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="ensure_monthly" value="{{$edit->ensure_monthly}}" type="text" placeholder="{{trans('admin.ensure_monthly')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.yearly_guarantee')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="yearly_guarantee" value="{{$edit->yearly_guarantee}}" type="text" placeholder="{{trans('admin.yearly_guarantee')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
               <script>show_div('finance_climate','finance_climate_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('finance_climate',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->finance_climate,['class'=>'form-control finance_climate']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group finance_climate_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.finance_climate_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control finance_climate_salary" name="finance_climate_salary" value="{{$edit->finance_climate_salary}}" type="text" placeholder="{{trans('admin.finance_climate_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('other_income','type_income,.type_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.other_income')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('other_income',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->other_income,['class'=>'form-control other_income']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group type_income">
                  <label class="col-sm-4 control-label">{{trans('admin.type_income')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="type_income" value="{{$edit->type_income}}"  type="text" placeholder="{{trans('admin.type_income')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group type_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.type_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control type_salary" name="type_salary" value="{{$edit->type_salary}}" type="text" placeholder="{{trans('admin.type_salary')}}">
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
               @if($edit->status == null)
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
                   {!! Form::select('transport',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->transport,['class'=>'form-control transport']) !!}
                  </div><!-- end col-sm-8 -->
                  <div class="clearfix"></div>
                </div><!-- end form-group -->
                <div class="form-group transport_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.transport_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control transport_salary" type="text" value="{{$edit->transport_salary}}" name="transport_salary" placeholder="{{trans('admin.transport_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
               <script>show_div('sheep','sheep_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('sheep',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->sheep,['class'=>'form-control sheep']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group sheep_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.sheep_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control sheep_salary"  name="sheep_salary" value="{{$edit->sheep_salary}}" type="text" placeholder="{{trans('admin.sheep_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('camel','camel_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.camel')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('camel',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->camel,['class'=>'form-control camel']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group camel_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.camel_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control camel_salary" name="camel_salary" value="{{$edit->camel_salary}}" type="text" placeholder="{{trans('admin.camel_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('farm','farm_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.farm')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('farm',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->farm,['class'=>'form-control farm']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group farm_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.farm_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control farm_salary" name="farm_salary" value="{{$edit->farm_salary}}" type="text" placeholder="{{trans('admin.farm_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('home_property','home_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group home_property">
                  <label class="col-sm-4 control-label">{{trans('admin.home_property')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('home_property',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->home_property,['class'=>'form-control home_property']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group home_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.home_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control home_salary" name="home_salary" value="{{$edit->home_salary}}" type="text" placeholder="{{trans('admin.home_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('employment','employment_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.employment')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('employment',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->employment,['class'=>'form-control employment']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group employment_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.employment_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control employment_salary" name="employment_salary" value="{{$edit->employment_salary}}" type="text" placeholder="{{trans('admin.employment_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('forestry','forestry_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('forestry',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->forestry,['class'=>'form-control forestry']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group forestry_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.forestry_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control forestry_salary" name="forestry_salary" value="{{$edit->forestry_salary}}" type="text" placeholder="{{trans('admin.forestry_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('basta','basta_salaryy');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.basta')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('basta',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->basta,['class'=>'form-control basta']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group basta_salaryy">
                  <label class="col-sm-4 control-label">{{trans('admin.basta_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control basta_salary" name="basta_salary" value="{{$edit->basta_salary}}" type="text" placeholder="{{trans('admin.basta_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->
              <script>show_div('corporation','corporation_salary');</script>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.corporation')}}</label>
                  <div class="col-sm-8">
                   {!! Form::select('corporation',['no'=>trans('admin.no'),'yes'=>trans('admin.yes')],$edit->corporation,['class'=>'form-control corporation']) !!}
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
                <div class="clearfix"></div>
                <div class="form-group corporation_salary">
                  <label class="col-sm-4 control-label">{{trans('admin.corporation_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control corporation_salary" value="{{$edit->corporation_salary}}" type="text" name="corporation_salary" placeholder="{{trans('admin.corporation_salary')}}">
                  </div><!-- end col-sm-8 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-6 -->

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{trans('admin.details')}}</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="details" rows="10" placeholder="{{trans('admin.details')}} ....">{{$edit->details}}</textarea>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->


               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">{{trans('admin.total_salary')}}</label>
                  <div class="col-sm-8">
                    <input class="form-control total_salary" id="disabledInput" value="{{$edit->total_salary}}" name="total_salary" type="text" placeholder="{{trans('admin.total_salary')}}" readonly>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->

               <div class="clearfix"></div>

               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{trans('admin.balance')}}</label>
                  <div class="col-sm-10">
                    <input class="form-control balance" id="disabledInput" value="{{$edit->balance}}" name="balance" type="text" placeholder="{{trans('admin.balance')}}" readonly>
                  </div><!-- end col-sm-10 -->
                </div><!-- end form-group -->
              </div><!-- end col-lg-12 -->

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


            <div class="clearfix"></div>

        </div>


			{!! Form::close() !!}
		</div>
  </div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

@extends(app('tmp').'.index')
@section('theme')
<?php 
$fileaccepted = App\Order3::where('user_id',auth()->user()->id)->where('status','!=','accept')->count();
$fileaccepted1 = App\Order3::where('user_id',auth()->user()->id)->count();
?>
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
            <li class="active">
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>مراجعى الطلب</span>
              </a>
            </li>
            <li @if($fileaccepted > 0 || $fileaccepted1 == 0) class="active" @endif>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>تحميل الملفات</span>
              </a>
            </li>
            <li  @if($fileaccepted == 0 and $fileaccepted1 > 0) class="active" @endif>
              <a>
                <i class="fa fa-check" aria-hidden="true"></i>
                <span>نهاية الطلب</span>
              </a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div><!-- end stepsitems -->
        @if($fileaccepted > 0 || $fileaccepted1 == 0)

        <script src="http://malsup.github.io/min/jquery.form.min.js" type="text/javascript"></script>
<script type="text/javascript">
// prepare the form when the DOM is ready 
$(document).ready(function() { 
    var options = { 
        target:        '#output11',   // target element(s) to be updated with server response 
        beforeSubmit:  showRequest,  // pre-submit callback 
        success:       showResponse,  // post-submit callback 
        // other available options: 
        url:       '{{ url('upload/files') }}',         // override for form's 'action' attribute 
        type:      'post',        // 'get' or 'post', override for form's 'method' attribute 
        dataType:  'json'        // 'xml', 'script', or 'json' (expected server response type) 
        //clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 
 
    // bind form using 'ajaxForm' 
    $('#uploadpdf').ajaxForm(options); 
}); 
 
// pre-submit callback 
function showRequest(formData, jqForm, options) { 
    var queryString = $.param(formData); 
    //alert('About to submit: \n\n' + queryString); 
    $('.errormsg').html('');
    $('.uploadfile').val('');
    $('.loadingpdf').removeClass('hidden');
    return true; 
} 
 
// post-submit callback 
function showResponse(data, statusText, xhr, $form)  { 
 
  $('.loadingpdf').addClass('hidden');
    if(data.status == 'success')
    {
      $('.data_pdf').append(data.data);
    }else if(data.status == 'error')
    {
      $('.errormsg').html(data.message);
    }
}   
</script>

        <div class="step1content">
          <h1>تحميل الملفات</h1>
     
            <div class="stepfive">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <p>من هنا يمكن تحميل ملفات نماذج إستكمال البيانات وبعد تعبئتها يمكنك رفعها مرة اخري</p>
                  <div class="table-responsive">
                    <table class="table table-bordered color1">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th width="65%" style="text-align: right;">اسم النموذج</th>
                          <th width="30%">رابط التحميل</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach(App\FormPDF::whereIn('id',explode(',',$order->file_pdf_download))->get() as $pdf)
                        <tr>
                          <td>1</td>
                          <td style="text-align: right;">{{$pdf->title}}
                          <p> <small>{{$pdf->content}}</small></p>
                          </td>
                          <td><a href="{{url('downloadpdf/'.$pdf->id)}}" title="{{$pdf->content}}"><i aria-hidden="true" class="fa fa-cloud-download"></i> تحميل الملف</a></td>
                        </tr>
                       @endforeach 
                       
                      </tbody>
                    </table>
                  </div><!-- end table-responsive -->
                </div><!-- end col-lg-6 -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <script>
                  $(document).on('click','.removefile',function(){
                    var removefile = $(this).attr('fid');
                     $.ajax({
                      url:'{{url('remove/file/data')}}',
                      dataType:'json',
                      type:'post',
                      data:{fid:removefile,_token:'{{csrf_token()}}'},
                      beforeSend : function()
                      {
                       $('.fid'+removefile).remove(); 
                      },success: function()
                      {
                       $('.fid'+removefile).remove(); 

                      }

                     });
                    return false;
                  });
                </script>
                  <p>رفع الملفات بعد تعبئتها </p>
                    
                  <div class="table-responsive">
                    <table class="table table-bordered color2">
                      <thead>
                        <tr>
                          <th width="5%">#</th>
                          <th width="60%" style="text-align: right;">اسم النموذج</th>
                          <th width="20%">الحالة</th>
                          <th width="15%">ادارة</th>
                        </tr>
                      </thead>
                      <tbody class="data_pdf">
                       @foreach(App\Order3::where('user_id',auth()->user()->id)->get() as $data)
                         <tr class="fid{{$data->id}}">
                           <td>{{$data->id}}</td>
                           <td style="text-align: right;">
                           <p>{{$data->pdf_name}}</p>
                           @if($data->status == 'refused') 
                           <small>سبب الرفض : {{$data->refused_reason}}</small>
                           @endif
                           </td>
                           <td>
                           <small>
                             @if($data->status == null)
                              لم يتم الحفظ 
                             @elseif($data->status == 'panding') 
                             <span class="label label-warning">بالإنتظار</span>
                             @elseif($data->status == 'refused') 
                             <span class="label label-danger">مرفوض</span>
                             @elseif($data->status == 'accept') 
                             <span class="label label-success">مقبول</span>
                             @endif
                           </small>
                           </td>
                           <td>
                           <a href="#" class="removefile" fid="{{$data->id}}"><i class="fa fa-trash"></i></a>
                           </td>
                         </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  </div><!-- end table-responsive -->
                  <p class="errormsg"></p>
                  {!! Form::open(['files'=>true,'id'=>'uploadpdf']) !!}
                  <div class="form-group col-md-8">
                    <label>ارفاق ملف PDF <i class="fa fa-spinner fa-spin loadingpdf hidden"></i></label>
                    <input type="file" name="pdf" accept="application/pdf,image/x-eps" class="form-control uploadfile" />
                  </div>
                   <br>
                    <button type="submit" id="output1"><i aria-hidden="true" class="fa fa-cloud-upload"></i> {{trans('main.upload')}}</button>
                  {!! Form::close() !!}
                </div><!-- end col-lg-6 -->
              </div><!-- end row -->
            </div><!-- end stepfive -->
            <hr>
            <div class="pull-right"><a href="{{url('step/2')}}" class="prevstep"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> السابق</a></div>

            <div class="pull-left hidden"><a href="#" class="nextstep">التالي <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
             
            {!! Form::open(['class'=>'pull-left','style'=>'margin-left:10px;']) !!}
             <div class="pull-right"><button type="submit">{{trans('main.save_files')}} <i class="fa fa-save" aria-hidden="true"></i></button></div>
            {!! Form::close() !!}
            <div class="clearfix"></div>
         
        </div><!-- end step1content -->
        @else

         <div class="step1content">
          <h1>نهاية الطلب</h1>
          <form action="#">
            <div class="steptwo">
              <div class="alert alert-success" role="alert"><i class="fa fa-check-square" aria-hidden="true"></i> تم استكمال البيانات جميعها واصبحت مستفيد في الجمعية الخيرية بالبدايع بملف رقم {{auth()->user()->id}} ... شاكرين لكم انتسابكم .</div>
            </div><!-- end steptwo -->
            <hr>
            
            <div class="clearfix"></div>
          </form>
        </div><!-- end step1content -->

        @endif

      </div><!-- end stepsuser -->

@stop
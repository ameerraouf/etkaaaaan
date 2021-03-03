@extends(app('tmp').'.index')
@section('title', ' | ادفع الان')
@section('theme')
<div class="container kufi">
    
   <center>
       <div class="alert alert-success  show" role="alert" style="width:90%;margin-top:20px;border:solid 1px #4caf50;">
           الرجاء بعد تحويل المبلغ تعبئة النموذج التالى :
       </div>
   </center>
                            <div class="row my-5 my-shadow bg-white w-100 mx-0 p-3  border">
                            <div class="col-12 text-center p-2" style="background-color: #0d5f80; color: #FFF;font-size:24px;"> 
                              <i class="icofont-credit-card"></i> دفع قيمة منتج     
                            </div>
                                <div class="col-md-4 mt-3">
                                    
                                    
                                    <div class="mt-3">
                                        <img class="w-100" src="{{asset('assets/images/header2.png')}}" alt="">
                                    </div>
                                    <a href="#" class="pb-4" style="border-bottom: 3px dashed #0d5f80" data-toggle="modal" data-target="#bank_list">
                                        <h4 class="text-center  hos hos-info" style="width:100%;background-color: #0d5f80;">
                                            <i class="fa fa-university" aria-hidden="true"></i>
                                            معاينة الحسابات البنكية
                                        </h4>
                                    </a>
                                </div>
                                <div class="col-md-8 mt-3">
                                    <div>
                                        <div class="mb-3">
                                     
                                        </div>
                                        <!-- panel preview -->
                                        <div class="">

                                            @if($errors->any())
                                                <ul>
                                                    @foreach( $errors->all() as $e)
                                                        <li class=" text-danger text-center">
                                                            {{ $e }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif


                                            @if( session()->has('success') )
                                                <div class="alert alert-success">
                                                    {{  session()->get('success') }}
                                                </div>
                                            @endif

                                            <div class="panel father panel-default">
                                                <form id="send" action="{{ route('pay') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="panel-body form-horizontal payment-form row">
                                                        <div class="form-group col-md-6">
                                                            <label for="status" class=" control-label">
                                                                الاسم
                                                            </label>
                                                            <div class="">
                                                                <input type="text"
                                                                       class="form-control" required
                                                                       name="name" value="{{ old('name') }}" style="border:solid 1px #000;border-radius:2px;">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="status" class=" control-label">
                                                                الجوال
                                                            </label>
                                                            <div class="">
                                                                <input type="phone"
                                                                       placeholder="رقم الجوال بصيغه دوليه مثل +999 000000 00000" required
                                                                       class="form-control"
                                                                       name="phone" value="{{ old('phone') }}" style="border:solid 1px #000;border-radius:2px;">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="status" class=" control-label">
                                                                البريد الالكتروني
                                                            </label>
                                                            <div class="">
                                                                <input type="email"
                                                                       class="form-control" required
                                                                       name="email" value="{{ old('email') }}" style="border:solid 1px #000;border-radius:2px;">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label required class=" control-label">الدوله</label>

                                                            <input type="text" class="form-control" name="country" style="border:solid 1px #000;border-radius:2px;">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label required class=" control-label">قيمة التبرع</label>

                                                            <input type="text" class="form-control" name="price" style="border:solid 1px #000;border-radius:2px;" value="{{$price}}">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label required class=" control-label">اسم الحساب البنكي المحول منه</label>

                                                            <input type="text" class="form-control" name="bank" style="border:solid 1px #000;border-radius:2px;">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label required class=" control-label">رقم الحساب</label>

                                                            <input type="text" class="form-control" name="account" style="border:solid 1px #000;border-radius:2px;">
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
			          	<label>وصل التحويل:</label>
                  <div class="form-group" style="background-color:#f7f9fc;width:100%;">
                    <center>
                      <br>
                      <div class="custom-control custom-radio custom-control-inline">
                          <div class="col-md-12">
                            <button type="button" class="browse btn btn-primary" id="files_desktop" style="width:220px;background-color: #0d5f80;">
                              <i class="icofont-image"></i>
                              رفع الصور من جهازي
                            </button>
                          </div>
                      </div>
                      <br>
                        <div id="show_slide" class="carousel slide" data-ride="carousel" style="border:solid 1px #000;">
                          <ol class="carousel-indicators slide_show_id"></ol>
                          <div class="carousel-inner slide_show" ></div>
                          <a class="carousel-control-prev" href="#show_slide" role="button" data-slide="prev">
                            <i class="fa fa-fast-backward" aria-hidden="true" ></i>
                          </a>
                          
                           <a class="carousel-control-next" href="#show_slide" role="button" data-slide="next">
                              <i class="fa fa-fast-forward" aria-hidden="true" ></i>
                          </a>
                          
                        </div>
                        
                      </center>
                  </div>
			 </div>

                                                        <div class="form-group col-12">
                                                            <center>
                                                                <button type="submit" class="btn btn-success preview-add-button" style="width:220px;">
                                                                    <i class="fa fa-paper-plane" aria-hidden="true" ></i>
                                                                    إرســــال
                                                                </button>
                                                            </center>
                                                        </div>
                                                    </div>
                <input type="file" name="transfer_img[]" style="width:0px;" class="file"  multiple>
                                                </form>
                                            </div>
                                        </div> <!-- / panel preview -->
                                    </div>
                                </div>

                            </div>



<div class="modal fade" role="dialog" id="error_image">
		<div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border: 5px solid #b4b7b98f;border-radius:10px;">
           <div class="modal-title btn hos-danger" style="color:#fff;border-radius:0px;">
				     <center>
				           خطأ أثناء تحميل الصور
				     </center>
				</div>
				<div class="modal-body" id="msg"></div>
				<div class="modal-footer">
					<div class="col-md-offset-10 col-md-3">

				    <button type="button" class="btn hos-info" data-dismiss="modal" style="width:100px;">
	                    غلق
					</button>

				</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="modal fade" role="dialog" id="bank_list">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="width:90%;">
			<div class="modal-content">
				<div  class="btn hos-success" style="background-color: #0d5f80;">
				 <div class="modal-title" style="color:#fff;">
				     <center>
					لائحة الحسابات البنكية
				     </center>
				</div>
			 </div>
				<div class="modal-body">
		<center>	    

<h1><strong>الحساب الخاص بالزكاة</strong></h1>

<h2><strong><img alt="" src="http://news.konooze.com/wp-content/uploads/2013/03/2013-03-05-3.gif" style="width: 220px; height: 113px;" /><br />
مصرف الراجحي&nbsp;</strong></h2>

<h2><strong>جمعية البدائع الخيرية</strong></h2>

<h2>SA6680000<strong>167608010006715<br />
------------------------------------------</strong></h2>

<p>&nbsp;</p>

<h2><strong>الحسابات البنكية الخاصه بجميعة البدائع الخيرية:</strong></h2>

<p>&nbsp;</p>

<h2><b>الحسابات العامة</b></h2>

<h2><strong><img alt="" src="http://news.konooze.com/wp-content/uploads/2013/03/2013-03-05-3.gif" style="width: 220px; height: 113px;" /><br />
مصرف الراجحي</strong></h2>

<h2><strong>جمعية البدائع الخيرية</strong></h2>

<h2>SA5480000<strong>167608010004603<br />
------------------------------------------</strong></h2>

<h2><br />
<strong><img alt="" src="http://www.theworldfolio.com/img_db/old/13164427501.jpg" style="width: 220px; height: 150px;" /><br />
البنك الأهلي<br />
جمعية البدائع الخيرية<br />
SA</strong>54100000<strong>39912513000106</strong></h2>

<p>&nbsp;</p>

<p><img alt="" src="http://www.bankalbilad.com/_Layouts/15/AlbiladNew/Internet/Shared/img/logo.png" style="width: 220px; height: 66px;" /></p>

<p>&nbsp;</p>

<h2><strong>بنك البلاد<br />
جمعية البدائع الخيرية<br />
SA</strong>2115000<strong>999113648020008</strong></h2>

<p>&nbsp;</p>

<p><img alt="" src="http://www.bankalbilad.com/_Layouts/15/AlbiladNew/Internet/Shared/img/logo.png" style="opacity: 0.9; width: 220px; height: 66px;" /></p>

<p>&nbsp;</p>

<h2><strong>بنك البلاد (حساب الزكاة)<br />
جمعية البدائع الخيرية<br />
SA</strong>9615000<strong>999113648020016</strong></h2>

<div>&nbsp;</div>

<p><img  src="https://www.alhakiba.com/wp-content/uploads/2017/09/ENMA.png" /></p>

<h2><strong>بنك الإنماء<br />
جمعية البدائع الخيرية<br />
SA</strong>52050000<strong>68299999332000</strong></h2>

<div>&nbsp;</div>

<div>
<p><img  src="https://www.alhakiba.com/wp-content/uploads/2017/09/ENMA.png" style="opacity: 0.9;" /></p>

<h2><strong>بنك الإنماء (حساب الزكاة)<br />
جمعية البدائع الخيرية<br />
SA</strong>52050000<strong>68299999332001</strong></h2>
</div>
</center>
				</div>
				<div class="modal-footer">
					<div class="col-md-offset-12 col-md-3">

				    <button type="button" class="btn hos-primary" data-dismiss="modal" style="width:100px;">
	                  اغلاق
					</button>

				</div>
				</div>
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script type="text/javascript">
function remove_tags(a)
{
  $(a).parent().remove();
}

$('document').ready(function(){
     $(document).on("click", ".browse", function()
     {
       var file = $(document).find(".file");
       file.trigger("click");
       $('#allshowelement').html('<div id="wowslider-container1"><div class="ws_bullets"></div></div>');
     });

     $('.file').change(function()
     {

        if(this.files.length <= 10)
        {
          for(var i = 0; i< this.files.length ; i++)
             setFiles(this.files[i],'#preview'+i , i);
        }
        else
        {
          $("#msg").html('لقد تجاوزت عدد الصور المسموح رفعها ');
          $("#error_image").modal("show");
        }
     });

  function setFiles(image , element , i)
  {
    var reader = new FileReader();
    reader.onload = function (e) {
                var image = new Image();
                image.src = e.target.result;
                image.onload = function () {
                  if(i == 0)
                  {
                    $('.slide_show').append('<div class="carousel-item active">'+
                    '<img class="d-block w-100" src="'+e.target.result+'"></div>');

                    $('.slide_show_id').append('<li data-target="#show_slide" data-slide-to="'+i+'" class="active"></li>');
                  }
                  else {
                    $('.slide_show').append('<div class="carousel-item">'+
                    '<img class="d-block w-100" src="'+e.target.result+'" alt="Third slide"></div>');
                    $('.slide_show_id').append('<li data-target="#show_slide" data-slide-to="'+i+'"></li>');
                  }
                  //  $(element).attr('src', e.target.result);
                };
    }
    reader.readAsDataURL(image);
  }

});
</script>
                    @stop
